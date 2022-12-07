<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as UserSession;

class AccountsController extends Controller
{
    // Login function
    public function userLogin(Request $request) {
        $request->validate([
            'email_add'=>'required|email',
            'user_pass'=>'required'
        ]);

        $acc = Accounts::where('email_add', '=', $request->email_add)->first();

        if ($acc) {
            if (Hash::check($request->user_pass,$acc->acc_pass)) {
                $request->session()->put('id_num', $acc->id_num);
                $data = array();
                $data = Accounts::where('id_num', '=', UserSession::get('id_num'))->first();

                if ($data->acc_type == "SA" || $data->acc_type == "RA") {
                    return redirect('admin');
                } elseif ($data->acc_type == "TE") {
                    return redirect('educator');
                }
            } else {
                return back()->with('fail', 'Password is incorrect');
            }
        } else {
            return back()->with('fail', 'Email entered is not registered');
        }
    }

    // Successful login
    public function adminDashboard() {
        $info = array();
        $info = Accounts::where('id_num', '=', UserSession::get('id_num'))->first();
        return view('admin', compact('info'));
    }

    public function educatorDashboard() {
        if (UserSession::has('id_num')) {
            $info = array();
            $info = Accounts::where('id_num', '=', UserSession::get('id_num'))->first();
            return view('educator', compact('info'));
        } else {
            return redirect('portal');
        }
        
    }

    // Admin Accounts Table
    public function accountsTable() {
        $info = array();
        $info = Accounts::where('id_num', '=', UserSession::get('id_num'))->first();
        $all_accs = Accounts::where('acc_type', '!=', "SA")->get();
        $admins_only = Accounts::where('acc_type', '=', "RA")->get();
        $teachers_only = Accounts::where('acc_type', '=', "TE")->get();
        $stud_only = Accounts::where('acc_type', '=', "ST")->get();
        
        return view('accounts')
        ->with(compact('info'))
        ->with(compact('all_accs'))
        ->with(compact('admins_only'))
        ->with(compact('teachers_only'))
        ->with(compact('stud_only'));
    }

    // User Logout
    public function logout() {
        if (UserSession::has('id_num')) {
            UserSession::pull('id_num');
            return redirect('portal');
        } else {
            return "No Session found!";
        }
    }


    // Continue Session
    public function continueSession(Request $req) {
        if (UserSession::has('id_num')) {
            $account_type = $req->session()->get('id_num');
            $acc_type = Accounts::where('id_num', '=', $account_type)->first();

            // echo $acc_type->acc_type;
            if ($acc_type->acc_type == "SA") {
                return redirect('admin');
            } elseif ($acc_type->acc_type == "TE") {
                return redirect('educator');
            }
        } else {
            return redirect('portal');
        }
    }


    // Update Accounts
    public function updateAccounts(Request $request) {
        $first_name = $request->input('first_name');
        $family_name = $request->input('family_name');
        $email_add = $request->input('email_add');
        $country_code = $request->input('country_code');
        $phone_number = $request->input('phone_number');
        $b_month = $request->input('b_month');
        $b_day = $request->input('b_day');
        $b_year = $request->input('b_yearb_year');
        $birthday = $b_month." ".$b_day.",".$b_year;
        $unid = $request->input('unid');
        $updator_id_num = UserSession::get('id_num');
        $get_updator = Accounts::where('id_num', '=', $updator_id_num)->first();

        $update_acc = DB::table('accounts')
            ->where('unid', $unid)
            ->update([
                'first_name' => $first_name,
                'family_name' => $family_name,
                'email_add' => $email_add,
                'country_code' => $country_code,
                'phone_number' => $phone_number,
                'b_month' => $b_month,
                'b_day' => $b_day,
                'b_year' => $b_year,
                'birthday' => $birthday,
                'update_by' => $get_updator->first_name." ".$get_updator->family_name,
            ]);

        if ($update_acc) {
            return redirect('accounts')
            ->with('success', 'Account updated succesfully');
        } else {
            // return redirect('accounts')
            // ->with('fail', 'Account update failed');

            echo $birthday;
        }
    }
}
