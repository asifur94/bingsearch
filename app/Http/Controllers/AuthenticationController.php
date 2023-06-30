<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserEducation;
use App\Models\SiteInfo;
use App\Models\SMSAPI;
use App\Models\PostLike;
use App\Models\PostDislike;
use Hash;
use Str;
use Auth;
use Alert;
use Session;
use Carbon\Carbon;

use GuzzleHttp\Client;



class AuthenticationController extends Controller
{

    public function submit_registration(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $site_info = SiteInfo::first();



        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->password_str = $request->password;
        $user->status = 1;
        $user->save();


        $userdata = array(
          'email' => $request->email ,
          'password' => $request->password
        );


        if (Auth::attempt($userdata))
        {
            $user = Auth::user();
            

            Alert::success('Registration successful', '');
            return redirect('/');

        }

                Alert::error('Some this wrong !!', '');
                return redirect()->back();


    }

    public function registration()
    {
        return view('frontend.user.registration');
    }

    public function login()
    {
        return view('frontend.user.login');
    }

    public function submit_login(Request $request)
    {
        $userdata = array(
          'email' => $request->email,
          'password' => $request->password
        );

        if (Auth::attempt($userdata))
        {
            $user = Auth::user();

            if($user->status == 1){
                Alert::success('Login successful', '');
                return redirect('/');
            }else{
                
                Alert::error('Email or password incorrect', '');
                return redirect()->back();

            }
            
        }
        else
        {
            Alert::error('Email or password incorrect ', '');
            return redirect()->back();
        }
    }





    public function logout()
    {
        session::flush();
        return redirect('/');
    }

    public function post_like($id)
    {

        $user = Auth::user();
        
        if(!$user){
            Alert::error('Please login', '');
            return redirect('/');
        }

        $already_like = PostLike::where('user_id', $user->id)->where('post_id', $id)->first();
        if($already_like){
            Alert::error('You already like this post', '');
            return redirect()->back();
        }


        $already_dislike = PostDislike::where('user_id', $user->id)->where('post_id', $id)->first();
        if($already_dislike){
            PostDislike::where('id', $already_dislike->id)->delete();
        }


        $data = new PostLike();
        $data->user_id = $user->id;
        $data->post_id = $id;
        $data->save();

        $like_count = PostLike::where('post_id', $id)->count();
        $dislike_count = PostDislike::where('post_id', $id)->count();

        return response()->json([
            'status' => 200,
            'like_count' => $like_count,
            'dislike_count' => $dislike_count,
        ]);

        // Alert::success('You like this post', '');
        // return redirect('/');

    }

    public function post_dislike($id)
    {

        $user = Auth::user();
        
        if(!$user){
            Alert::error('Please login', '');
            return redirect('/');
        }

        $already_dislike = PostDislike::where('user_id', $user->id)->where('post_id', $id)->first();
        if($already_dislike){
            Alert::error('You already dislike this post', '');
            return redirect()->back();
        }


        $already_like = PostLike::where('user_id', $user->id)->where('post_id', $id)->first();
        if($already_like){
            PostLike::where('id', $already_like->id)->delete();
        }

        $data = new PostDislike();
        $data->user_id = $user->id;
        $data->post_id = $id;
        $data->save();

        $like_count = PostLike::where('post_id', $id)->count();
        $dislike_count = PostDislike::where('post_id', $id)->count();

        return response()->json([
            'status' => 200,
            'like_count' => $like_count,
            'dislike_count' => $dislike_count,
        ]);


    }

}
