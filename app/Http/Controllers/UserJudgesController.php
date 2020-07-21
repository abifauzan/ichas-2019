<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Transaction;
use App\Model\UserConference;
use App\Model\PaperRegistrant;
use App\Model\Helper;

use Mail;
use App\Mail\IncomingPayment;

use Alert;
use Auth;
use Validator;
use DB;

class UserJudgesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function approveAbstract(Request $request) {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required'
        ]);

        if($validator->fails()) {
            Alert::error('Cannot approve paper, please try again')->persistent('Close');
            return redirect()->back();
        }

        $data = PaperRegistrant::where('id_user', $request->input('id_user'))->with('user')->first();
        $data->approval = 1;
        $data->save();


        Alert::success('Success make approval paper : '. $data->title_paper);

        return redirect()->back();

    }

    public function incomingAbstract() {
        $datas = PaperRegistrant::where('approval', 0)->with('user')->paginate(10);
        return view('judge.view-abstract', compact('datas'));
    }

    public function allPaper() {
        $datas = PaperRegistrant::where([
            ['approval', 1],
            ['publish', 1]
        ])->with('user')->paginate(10);

        return view('judge.all-paper', compact('datas'));
    }

    public function approveTitle(Request $request) {
        $data = PaperRegistrant::where('id', $request->input('id'))->with('user')->first();
        $data->approval = 1;
        $data->save();

        if($data) {
            Alert::success('Success approve title : '. $data->title_paper);
            $deadline = Helper::all();

            Mail::to($data->user->email)->send(new IncomingPayment($data, $deadline));
            return redirect()->back();
        }
        Alert::error('Cannot approve data');
        return redirect()->back();
    }

}
