<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SiteInfo;
use App\Models\UserAddress;
use App\Models\UserEducation;
use App\Models\ApplicationForm;
use App\Models\AgentBonusHistory;
use App\Models\Withdraw;
use App\Models\WithdrawHistory;
use App\Models\SiteImage;
use App\Models\SMSAPI;
use Auth;
use Hash;
use Str;
use Carbon\Carbon;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $site_info = SiteInfo::first();
        return view('frontend.user.dashboard', compact('user', 'site_info'));
    }
    
    public function wallet()
    {
        $user = Auth::user();
        $site_info = SiteInfo::first();
        return view('frontend.user.wallet', compact('user', 'site_info'));
    }
    
    public function edit_wallet()
    {
        $user = Auth::user();
        $site_info = SiteInfo::first();
        return view('frontend.user.edit_wallet', compact('user', 'site_info'));
    }

    
    public function update_wallet(Request $request)
    {

        $user = Auth::user();

        User::where('id', $user->id)->update([
            'mobile_banking_type' => $request->mobile_banking_type,
            'mobile_banking_number' => $request->mobile_banking_number,
        ]);

        return back()->with('success','Updated successful');

    }

    public function my_profile()
    {
        $data = Auth::user();
        $address = UserAddress::where('user_id', $data->id)->first();
        $education = UserEducation::where('user_id', $data->id)->first();
        return view('frontend.user.my_profile', compact('data', 'address', 'education'));
    }

    public function agent_information_pdf()
    {
        $data = Auth::user();

        $address = UserAddress::where('user_id', $data->id)->first();
        $education = UserEducation::where('user_id', $data->id)->first();
        $site_info = SiteInfo::first();
        $site_image = SiteImage::first();

        return view('frontend.user.agent_information_pdf', compact('data', 'address', 'education', 'site_info', 'site_image'));
    }

    public function profite_report()
    {
        $user = Auth::user();

        $forms = ApplicationForm::where('user_id', $user->id)->get();

        return view('frontend.user.profite_report', compact('user', 'forms'));
    }



    public function team()
    {
        $user = Auth::user();

        $total_members = User::where('referral_code', $user->refer_code)->get();

        $colors = array(
            'green' => 'green',
            'red' => 'red',
            'orange' => 'orange',
            'yellow' => 'yellow',
            'blue' => 'blue',
            'gray' => 'gray',
        );
        $color=array_rand($colors, 1);
        return view('frontend.user.team', compact('user', 'total_members', 'colors', 'color'));
    }

    public function invite_friend()
    {
        $user = Auth::user();
        return view('frontend.user.invite_friend', compact('user'));
    }

    public function settings()
    {
        $user = Auth::user();
        return view('frontend.user.settings', compact('user'));
    }

    public function set_login_password()
    {
        $user = Auth::user();
        return view('frontend.user.set_login_password', compact('user'));
    }

    public function set_transaction_password()
    {
        $user = Auth::user();
        return view('frontend.user.set_transaction_password', compact('user'));
    }

    public function update_login_password(Request $request)
    {

         $request->validate([
            'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
         ]);

       $user = Auth::user();
       User::where('id', $user->id)->update([
            'password' => Hash::make($request->password),
       ]); 


       return back()->with('success','Login password updated successful');



    }

    public function update_transaction_password(Request $request)
    {

         $request->validate([
            'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
         ]);

       $user = Auth::user();
       User::where('id', $user->id)->update([
            'transaction_password' => Hash::make($request->password),
       ]); 


       return back()->with('success','Transaction password updated successful');



    }


    public function form_fillup()
    {
        $user = Auth::user();
        return view('frontend.user.form_fillup', compact('user'));
    }

    public function my_all_forms()
    {
        $user = Auth::user();
        $forms = ApplicationForm::where('user_id', $user->id)->get();
        return view('frontend.user.all_forms', compact('user', 'forms'));
    }

    public function my_form_pdf($id)
    {
        $data = ApplicationForm::find($id);

        $site_info = SiteInfo::first();
        $site_image = SiteImage::first();

        return view('frontend.user.my_form_pdf', compact('data', 'site_info', 'site_image'));


    }

    public function submit_form(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            // 'image' => 'required',
            'trx' => 'required',
        ]);

        $user = Auth::user();

        $site_info = SiteInfo::first();

        $form = ApplicationForm::count();
        $total_form = $form + 1;

        $bonus = ($site_info->form_fee * 10) / 100;

        $age = Carbon::parse($request->birth_date)->diff(Carbon::now())->format('%y');

        $form = new ApplicationForm();
        $form->user_id = $user->id;
        $form->agent_bonus = $bonus;
        $form->form_fee = $site_info->form_fee;
        $form->name = $request->name;
        $form->mother_name = $request->mother_name;
        $form->father_name = $request->father_name;
        $form->nationality = $request->nationality;
        $form->birth_date = $request->birth_date;
        $form->age = $age ?? '';
        $form->national_id_card_no_or_b_d_c = $request->national_id_card_no_or_b_d_c;
        $form->type_of_id = $request->type_of_id;
        $form->type_of_member = $request->type_of_member;
        $form->mobile_number = $request->mobile_number;
        $form->class = $request->class;
        $form->area = $request->area;

        $form->mobile_banking_number = $request->mobile_banking_number;
        $form->mobile_banking_type = $request->mobile_banking_type;
        $form->trx = $request->trx;
        
        $form->village_present = $request->village_present;
        $form->village_permanent = $request->village_permanent;

        $form->post_office_present = $request->post_office_present;
        $form->post_office_permanent = $request->post_office_permanent;
        
        $form->thana_present = $request->thana_present;
        $form->thana_permanent = $request->thana_permanent;

        $form->district_present = $request->district_present;
        $form->district_permanent = $request->district_permanent;


        $image = $request->file('image');
        if($image)
        {
            $image_name= Str::random(10);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/agent_application_form/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            
            if($success)
            {
                $form->image = $image_url;
            }
        }

        $form->save();


       User::where('id', $user->id)->update([
            'balance' => $user->balance + $bonus,
            'available_balance' => $user->available_balance + $bonus,
       ]); 

        $history = new AgentBonusHistory();
        $history->user_id = $user->id;
        $history->application_form_id = $form->id;
        $history->bonus = $bonus;
        $history->form_fee = $site_info->form_fee;
        $history->save();


        $sms_api = SMSAPI::first();


        if($user->contact_number){

            $sender_id = '531';
            $apiKey='Z3Jhdml0eTpncmF2aXR5ODE2'; 
            $mobileNo= $user->contact_number;
            $message = 'You submit a form and you get '.' '.$bonus.' Taka bonus';



            $url = 'https://24smsbd.com/api/bulkSmsApi';
            $data = array('sender_id' => $sender_id,
             'apiKey' => $apiKey,
             'mobileNo' => $mobileNo,
             'message' =>$message   
             );

             $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);     
                $output = curl_exec($curl);
                curl_close($curl);

        }



       return back()->with('success','Submitted successful');


    }



    public function withdraw_history()
    {
        $user = Auth::user();
        $site_info = SiteInfo::first();
        $histories = Withdraw::where('user_id', $user->id)->get();

        return view('frontend.user.withdraw_history', compact('user', 'site_info', 'histories'));
    }


    public function withdraw()
    {
        $user = Auth::user();
        $site_info = SiteInfo::first();

        return view('frontend.user.withdraw', compact('user', 'site_info'));
    }

    public function submit_withdraw_request(Request $request)
    {

        $user = Auth::user();

        $site_info = SiteInfo::first();

        $password = $request->transaction_password;


        if (Hash::check($password, $user->transaction_password)) {

            if($user->available_balance < $request->amount){
                return back()->with('error','Insuficient balance'); 
            }

            if($site_info->min_withdraw <= $request->amount){
                
                $data = new Withdraw();
                $data->user_id = $user->id;
                $data->payment_method = $request->payment_method;
                $data->account_number = $request->account_number;
                $data->account_type = $request->account_type;
                $data->amount = $request->amount;
                $data->status = 0;
                $data->save();

                User::where('id', $user->id)->update([
                    'available_balance' => $user->available_balance - $request->amount,
                ]); 

                $history = new WithdrawHistory();
                $history->user_id = $user->id;
                $history->withdraw_id = $data->id;
                $history->old_balance = $user->available_balance;
                $history->amount = $request->amount;
                $history->new_balance = $user->available_balance - $request->amount;
                $history->save();

                return back()->with('success','Withdraw Request Submitted successful');

            }else{

               return back()->with('error','Minimum withdraw amount is: '.' '.$site_info->min_withdraw.' '.'BDT');

            }
            
        }else{

            return back()->with('error','Transaction password is incorrect');

        }

    



    }

}
