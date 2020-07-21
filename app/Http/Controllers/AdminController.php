<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Transaction;
use App\Model\UserConference;
use App\Model\UserSeminar;
use App\Model\PaperRegistrant;
use App\Model\Helper;

use Mail;
use App\Mail\PaymentApproved;

use Alert;
use Auth;
use Validator;
use DB;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function paymentUpdate(Request $request) {
        $data = Transaction::where([
                    ['id_user', $request->input('id_user')],
                    ['status', 0]
                ])
                ->with('user')
                ->get();

        foreach($data as $n) {
            $n->status = 1;
            $n->save();
        }
        if($data[0]->user->id_role == 2) {
            $a = new UserSeminar();
            $a->id_user = $data[0]->id_user;

            $getLastPin = DB::table('user_seminars')->orderBy('pin_entrance', 'desc')->first();
            if($getLastPin) {
                $a->pin_entrance = rand(000000,999998) + 1;
                $a->certificate_no = rand(000000,999998) + 1;
            } else {
                $a->pin_entrance = rand(000000,999998);
                $a->certificate_no = rand(000000,999998);
            }
            $a->status_certificate = 0;

        } elseif($data[0]->user->id_role == 3) {

            $a = new UserConference();
            $a->id_user = $data[0]->id_user;

            $dataPaper = PaperRegistrant::where('id_user', $data[0]->id_user)->first();
            $dataPaper->publish = 1;
            $dataPaper->save();

            $getPaperId = $dataPaper->id;

            $a->id_paper = $getPaperId;

            $getLastPin = DB::table('user_conferences')->orderBy('pin_entrance', 'desc')->first();
            if($getLastPin) {
                $a->pin_entrance = rand(000000,999998) + 1;
                $a->certificate_no = rand(000000,999998) + 1;
            } else {
                $a->pin_entrance = rand(000000,999998);
                $a->certificate_no = rand(000000,999998);
            }
            $a->category_certificate = 1;
            $a->status_certificate = 0;

        }
        $a->save();

        Mail::to($data[0]->user->email)->send(new PaymentApproved($data[0]));

        Alert::success('Success Update registrant : ' . $data[0]->user->name);
        return redirect()->back();
        // return "Success Update ". $data->status_payment . " : ". $data->status_payment;
    }

    public function activateEcertificate(Request $request) {
        $data = Helper::where([
            ['slug','=','activate_e_certificate'],
            ['status', 0]
        ])->first();

        $data->status = 1;
        $data->save();

        Alert::success('Success Activate E-Certificate Modul');
        return redirect()->back();
    }

    public function inactivateEcertificate(Request $request) {
        $data = Helper::where([
            ['slug','=','activate_e_certificate'],
            ['status', 1]
        ])->first();

        $data->status = 0;
        $data->save();

        Alert::success('Success Deactivate E-Certificate Modul');
        return redirect()->back();
    }

    public function searchPin(Request $request) {
        $input = $request->input('pin');
        $role = $request->input('role');

        if($role == 1) {
            $data = UserSeminar::where('pin_entrance', $input)->with('user')->first();
        } else {
            $data = UserConference::where('pin_entrance', $input)->with('user')->first();

        }
        if($data) {
            Alert::success('Find 1 Data!');
            return view('admin.pin', compact('data'));
        }

        Alert::error('Data not found');
        return redirect()->back();
    }

    public function deadline(Request $request) {
        $date = $request->input('date');
        $a = Helper::findOrFail($request->input('id'));
        $a->date_end = $date;
        $a->save();

        // return $date;
        Alert::success('Success change date');
        return redirect()->back();
    }

    // Get Process

    public function registrantSeminar() {
        $helper_payment = Helper::where('slug', '=', 'activate_payment_seminar')->first();
        $helper_certificate = Helper::where('slug', '=', 'activate_e_certificate')->first();
        $helper_abstract = Helper::where('slug', '=', 'activate_submit_abstract')->first();
        $helper_paper = Helper::where('slug', '=', 'activate_submit_paper')->first();
        $helper_payment_conference = Helper::where('slug', '=', 'activate_payment_conference')->first();
        $getPinSeminar = UserSeminar::where('id_user', Auth::user()->id)->first();
        $getPinConference = UserConference::where('id_user', Auth::user()->id)->first();
        $checkPaper = PaperRegistrant::where('id_user', Auth::user()->id)->first();
        $checkTransaction = Transaction::where('id_user', Auth::user()->id)->first();

        $userSeminars = UserSeminar::with('user')->paginate(10);
        $userConferences = UserConference::with('user','paper')->paginate(10);
        $userTransactions = Transaction::where('status', 0)->orderBy('created_at', 'desc')->with('user')->paginate(10);

        return view('admin/registrant-seminar',
            compact('helper_payment', 'helper_certificate', 'helper_abstract', 'helper_paper', 'helper_payment_conference', 'getPinSeminar', 'getPinConference', 'checkPaper', 'checkTransaction', 'userSeminars', 'userConferences', 'userTransactions')
        );
        // return $userSeminars;
    }

    public function registrantConference() {
        $helper_payment = Helper::where('slug', '=', 'activate_payment_seminar')->first();
        $helper_certificate = Helper::where('slug', '=', 'activate_e_certificate')->first();
        $helper_abstract = Helper::where('slug', '=', 'activate_submit_abstract')->first();
        $helper_paper = Helper::where('slug', '=', 'activate_submit_paper')->first();
        $helper_payment_conference = Helper::where('slug', '=', 'activate_payment_conference')->first();
        $getPinSeminar = UserSeminar::where('id_user', Auth::user()->id)->first();
        $getPinConference = UserConference::where('id_user', Auth::user()->id)->first();
        $checkPaper = PaperRegistrant::where('id_user', Auth::user()->id)->first();
        $checkTransaction = Transaction::where('id_user', Auth::user()->id)->first();

        $userSeminars = UserSeminar::with('user')->paginate(10);
        $userConferences = UserConference::with('user','paper')->paginate(10);
        $userTransactions = Transaction::where('status', 0)->orderBy('created_at', 'desc')->with('user')->paginate(10);

        return view('admin/registrant-conference',
            compact('helper_payment', 'helper_certificate', 'helper_abstract', 'helper_paper', 'helper_payment_conference', 'getPinSeminar', 'getPinConference', 'checkPaper', 'checkTransaction', 'userSeminars', 'userConferences', 'userTransactions')
        );
    }

    public function transactionIncoming() {

        $userTransactions = Transaction::where('status', 0)->orderBy('created_at', 'asc')->with('user')->paginate(10);

        return view('admin/transaction-incoming',
            compact('userTransactions')
        );
        // return $userTransactions;
    }

    public function transactionApproved() {
        $helper_payment = Helper::where('slug', '=', 'activate_payment_seminar')->first();
        $helper_certificate = Helper::where('slug', '=', 'activate_e_certificate')->first();
        $helper_abstract = Helper::where('slug', '=', 'activate_submit_abstract')->first();
        $helper_paper = Helper::where('slug', '=', 'activate_submit_paper')->first();
        $helper_payment_conference = Helper::where('slug', '=', 'activate_payment_conference')->first();
        $getPinSeminar = UserSeminar::where('id_user', Auth::user()->id)->first();
        $getPinConference = UserConference::where('id_user', Auth::user()->id)->first();
        $checkPaper = PaperRegistrant::where('id_user', Auth::user()->id)->first();
        $checkTransaction = Transaction::where('id_user', Auth::user()->id)->first();

        $userSeminars = UserSeminar::with('user')->paginate(10);
        $userConferences = UserConference::with('user','paper')->paginate(10);
        $userTransactions = Transaction::where('status', 1)->orderBy('created_at', 'desc')->with('user')->paginate(10);

        return view('admin/transaction-approved',
            compact('helper_payment', 'helper_certificate', 'helper_abstract', 'helper_paper', 'helper_payment_conference', 'getPinSeminar', 'getPinConference', 'checkPaper', 'checkTransaction', 'userSeminars', 'userConferences', 'userTransactions')
        );
    }

    public function pinEntrance() {
        $helper_payment = Helper::where('slug', '=', 'activate_payment_seminar')->first();
        $helper_certificate = Helper::where('slug', '=', 'activate_e_certificate')->first();
        $helper_abstract = Helper::where('slug', '=', 'activate_submit_abstract')->first();
        $helper_paper = Helper::where('slug', '=', 'activate_submit_paper')->first();
        $helper_payment_conference = Helper::where('slug', '=', 'activate_payment_conference')->first();
        $getPinSeminar = UserSeminar::where('id_user', Auth::user()->id)->first();
        $getPinConference = UserConference::where('id_user', Auth::user()->id)->first();
        $checkPaper = PaperRegistrant::where('id_user', Auth::user()->id)->first();
        $checkTransaction = Transaction::where('id_user', Auth::user()->id)->first();

        $userSeminars = UserSeminar::with('user')->paginate(10);
        $userConferences = UserConference::with('user','paper')->paginate(10);
        $userTransactions = Transaction::where('status', 0)->orderBy('created_at', 'desc')->with('user')->paginate(10);

        return view('admin.pin',
            compact('helper_payment', 'helper_certificate', 'helper_abstract', 'helper_paper', 'helper_payment_conference', 'getPinSeminar', 'getPinConference', 'checkPaper', 'checkTransaction', 'userSeminars', 'userConferences', 'userTransactions')
        );
    }

    public function setting() {
        $helper = Helper::all();
        // return $helper;
        return view('admin/setting', compact('helper'));
    }

    public function judges() {
        $data = User::where('id_role', 4)->get();
        return view('admin.judges', compact('data'));
    }

    public function judgesAddView() {
        return view('admin.judges-add');
    }

    public function judgesEditView($id) {
        $data = User::find($id);
        return view('admin.judges-edit', compact('data'));
    }

    public function judgesAdd(Request $request) {

        $data = new User;
        $data->id_role = 4;
        $data->id_payment_type = 1;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->email_verified_at = \Carbon\Carbon::now();
        $data->password = bcrypt($request->input('password'));
        $data->save();

        Alert::success('Success add user');
        return redirect()->route('app.judges');
    }

    public function judgesUpdate(Request $request) {
        $data = User::find($request->input('id'));
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->save();

        Alert::success('Success edit user');
        return redirect()->route('app.judges');
    }

    public function judgesDelete($id) {
        $data = User::find($id);
        $data->delete();

        Alert::success('Success delete user');
        return redirect()->back();
    }

}
