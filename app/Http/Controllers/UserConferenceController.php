<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Transaction;
use App\Model\UserConference;
use App\Model\PaperRegistrant;
use App\Model\Helper;

use Alert;
use Auth;
use Validator;
use DB;

class UserConferenceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function submitAbstract(Request $request) {

        $validator = Validator::make($request->all(), [
            // 'id_user' => 'required',
            'title' => 'required',
            'abstract' => 'required'
        ]);

        if($validator->fails()) {
            Alert::error('Cannot add data, please try again')->persistent('Close');
            return redirect()->back();
        }

        PaperRegistrant::create([
            'id_user' => Auth::user()->id,
            'title_paper' => $request->input('title'),
            'abstract_paper' => $request->input('abstract'),
        ]);

        Alert::success('Success upload data');
        return redirect()->back();

    }

    public function editAbstract(Request $request) {

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'title' => 'required',
            'abstract' => 'required'
        ]);

        if($validator->fails()) {
            Alert::error('Cannot add data, please try again')->persistent('Close');
            return redirect()->back();
        }

        $data = PaperRegistrant::find($request->input('id'));
        $data->title_paper = $request->input('title');
        $data->abstract_paper = $request->input('abstract');
        $data->save();

        Alert::success('Success update data');
        return redirect()->back();

    }

    public function submitPaper(Request $request) {

        $validator = Validator::make($request->all(), [
            'file' => 'required|max:5124|mimes:pdf,zip',
        ]);
        if($validator->fails()) {
            Alert::error('Cannot Submit Data, Please Try again')->persistent('Close');
            return redirect()->back();
        }
        $data = PaperRegistrant::where('id_user', Auth::user()->id)->first();
            if ($request->hasFile('file')) {
                $file           = $request->file('file');
                $user = str_replace(' ', '_', Auth::user()->name);
                $fileName = str_replace(' ', '_', $file->getClientOriginalName());
                $name            = $user . '_' . $fileName;
                $destinationPath = public_path('/paper');
                $file->move($destinationPath, $name);

                $data->file = 'paper/' . $name;
                $data->save();
            }

            if($data) {
                Alert::success('Success upload paper');
                return redirect()->back();
            } else {
                Alert::error('Failed upload paper');
                return redirect()->back();
            }
    }

    public function editPaper(Request $request) {

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'file' => 'required|max:5128|mimes:pdf,zip',
        ]);
        if($validator->fails()) {
            Alert::error('Cannot Submit Data, Please Try again.')->persistent('Close');
            return redirect()->back();
        }

        $data = PaperRegistrant::find($request->input('id'));
            \File::delete($data->file);
            if ($request->hasFile('file')) {
                $file           = $request->file('file');
                $user = str_replace(' ', '_', Auth::user()->name);
                $fileName = str_replace(' ', '_', $file->getClientOriginalName());
                $name            = $user . '_' . $fileName;
                $destinationPath = public_path('/paper');
                $file->move($destinationPath, $name);

                $data->file = 'paper/' . $name;
                $data->save();
            }
            // $data->save();

            if($data) {
                Alert::success('Success update paper');
                return redirect()->back();
            } else {
                Alert::error('Failed update paper');
                return redirect()->back();
            }
    }

    public function uploadPayment(Request $request) {
        $validator = Validator::make($request->all(), [
            // 'id_user' => 'required',
            // 'id_role' => 'required',
            'image' => 'required|max:5012|mimes:jpeg,jpeg,png',
        ]);

        if($validator->fails()) {
            Alert::error('Cannot Submit Data, Please Try again.')->persistent('Close');
            return redirect()->back();
        }

        $transaction = new Transaction;
            if ($request->hasFile('image')) {
                $image           = $request->file('image');
                $user = str_replace(' ', '_', Auth::user()->name);
                $name            = $user . '_' . \Carbon\Carbon::now()->toDateString() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/payment');
                $image->move($destinationPath, $name);

                $transaction->id_user = Auth::user()->id;
                $transaction->id_role = 3;
                $transaction->image = 'payment/' . $name;
                $transaction->note = $request->input('note');
                $transaction->save();
            }

            if($transaction) {
                Alert::success('Success upload data');
                return redirect()->back();
            } else {
                Alert::error('Failed upload data');
                return redirect()->back();
            }

    }

    public function printCertificate(Request $request) {

        $data = UserConference::where('id_user', Auth::user()->id)->first();
        $data->status_certificate = 1;
        $data->save();

        return "Print E-Certificate with name : " . $data->user->name;

    }


}
