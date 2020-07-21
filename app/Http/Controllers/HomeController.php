<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Transaction;
use App\Model\UserSeminar;
use App\Model\UserConference;
use App\Model\PaperRegistrant;
use App\Model\Helper;

use Alert;
use Auth;
use Validator;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $helper_payment = Helper::where('slug', '=', 'activate_payment_seminar')->first();
        $helper_certificate = Helper::where('slug', '=', 'activate_e_certificate')->first();
        $helper_abstract = Helper::where('slug', '=', 'activate_submit_abstract')->first();
        $helper_paper = Helper::where('slug', '=', 'activate_submit_paper')->first();
        $helper_payment_conference = Helper::where('slug', '=', 'activate_payment_conference')->first();
        $getPinSeminar = UserSeminar::where('id_user', Auth::user()->id)->first();
        $getPinConference = UserConference::where('id_user', Auth::user()->id)->first();
        $checkPaper = PaperRegistrant::where('id_user', Auth::user()->id)->first();
        $checkTransaction = Transaction::where('id_user', Auth::user()->id)->first();

        // Admin

        $userSeminars = UserSeminar::with('user')->get();
        $userConferences = UserConference::with('user','paper')->get();
        $userTransactions = Transaction::where('status', 0)->orderBy('created_at', 'desc')->with('user')->get();

        $checkUserSeminar = UserSeminar::where('id_user', Auth::user()->id)->with('user')->first();
        $checkUserConference = UserConference::where('id_user', Auth::user()->id)->with('user')->first();
        // return $transactions;
        return view('home',
            compact('helper_payment', 'helper_certificate', 'helper_abstract', 'helper_paper', 'helper_payment_conference', 'getPinSeminar', 'getPinConference', 'checkPaper', 'checkTransaction', 'userSeminars', 'userConferences', 'userTransactions', 'checkUserSeminar', 'checkUserConference')
        );
    }

    public function transaction() {
        $datas = Transaction::where('id_user', Auth::user()->id)->orderBy('created_at', 'desc')->with('user')->get();
        // return $datas;

        return view('transaction', compact('datas'));
    }

    public function eCertificate() {
        $role = Auth::user()->id_role;
        if($role == 2) {
            $data = UserSeminar::where('id_user', Auth::user()->id)->with('user')->first();
        } else {
            $data = UserConference::where('id_user', Auth::user()->id)->with('user')->first();
        }

        $helper = Helper::where('slug', '=', 'activate_e_certificate')->first();
        return view('certificate', compact('data', 'helper'));
        // return $data;
    }

    // get

    public function paperHome() {
        $helper_payment = Helper::where('slug', '=', 'activate_payment_seminar')->first();
        $helper_certificate = Helper::where('slug', '=', 'activate_e_certificate')->first();
        $helper_abstract = Helper::where('slug', '=', 'activate_submit_abstract')->first();
        $helper_paper = Helper::where('slug', '=', 'activate_submit_paper')->first();
        $helper_payment_conference = Helper::where('slug', '=', 'activate_payment_conference')->first();
        $getPinSeminar = UserSeminar::where('id_user', Auth::user()->id)->first();
        $getPinConference = UserConference::where('id_user', Auth::user()->id)->first();
        $checkPaper = PaperRegistrant::where('id_user', Auth::user()->id)->first();
        $checkTransaction = Transaction::where('id_user', Auth::user()->id)->first();

        // Admin

        $userSeminars = UserSeminar::with('user')->get();
        $userConferences = UserConference::with('user','paper')->get();
        $userTransactions = Transaction::where('status', 0)->orderBy('created_at', 'desc')->with('user')->get();

        return view('user-paper',
            compact('helper_payment', 'helper_certificate', 'helper_abstract', 'helper_paper', 'helper_payment_conference', 'getPinSeminar', 'getPinConference', 'checkPaper', 'checkTransaction', 'userSeminars', 'userConferences', 'userTransactions')
        );


    }

}
