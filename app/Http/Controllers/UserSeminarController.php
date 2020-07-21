<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Transaction;
use App\Model\UserSeminar;
use App\Model\Helper;

use Alert;
use Auth;
use Validator;
use DB;

class UserSeminarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
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
                $name            = $user . '_' . \Carbon\Carbon::now()->toDateString() . rand(000,999) . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/payment');
                $image->move($destinationPath, $name);

                $transaction->id_user = Auth::user()->id;
                $transaction->id_role = 2;
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

        $data = UserSeminar::where('id_user', Auth::user()->id)->first();
        $data->status_certificate = 1;
        $data->save();

        return "Print E-Certificate with name : " . $data->user->name;

    }




}
