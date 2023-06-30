<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteImage;
use App\Models\SiteInfo;
use Illuminate\Http\Request;
use Image;

class SettingController extends Controller
{
    public function setting(){
        $imge = SiteImage::first();
        $site_info = SiteInfo::first();
        return view('admin.setting.site_setting',compact('imge', 'site_info'));
    }
    public function save_logo(Request $request){
        $logo = SiteImage::find($request->img_id);
        if($logo){
            $data = SiteImage::find($request->img_id);
            if($request->hasFile('logo')) {
                $image = $request->logo;
                $filename = $image->getClientOriginalName();
                $filename = preg_replace('/\s+/', '-', $filename);
                $folder = 'uploads/'.date('Y').'/'.date('m');
                if (!file_exists($folder)) {
                    mkdir($folder, 0777, true);
                }
                $logo_img = $folder.'/'. time() . '-' . $filename;
                Image::make($image)->save($logo_img);
                $data->logo = asset($logo_img);
            }
            $data->save();
        }else{
            $data =new SiteImage();
            if($request->hasFile('logo')) {
                $image = $request->logo;
                $filename = $image->getClientOriginalName();
                $filename = preg_replace('/\s+/', '-', $filename);
                $folder = 'uploads/'.date('Y').'/'.date('m');
                if (!file_exists($folder)) {
                    mkdir($folder, 0777, true);
                }
                $logo_img = $folder.'/'. time() . '-' . $filename;
                Image::make($image)->save($logo_img);
                $data->logo = asset($logo_img);
            }
            $data->save();
        }
        
        $notification=array(
            'message' => 'Successfully Done',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function save_favicon(Request $request){
        $favicon = SiteImage::find($request->fav_id);
        if($favicon){
            $fav_data = SiteImage::find($request->fav_id);
            if($request->hasFile('fav_icon')) {
                $image = $request->fav_icon;
                $filename = $image->getClientOriginalName();
                $filename = preg_replace('/\s+/', '-', $filename);
                $folder = 'uploads/'.date('Y').'/'.date('m');
                if (!file_exists($folder)) {
                    mkdir($folder, 0777, true);
                }
                $fav_icon = $folder.'/'. time() . '-' . $filename;
                Image::make($image)->resize(32, 32)->save($fav_icon);
                $fav_data->favicon = asset($fav_icon);
            }
            $fav_data->save();
        }else{
            $fav_data = new SiteImage();
            if($request->hasFile('fav_icon')) {
                $image = $request->fav_icon;
                $filename = $image->getClientOriginalName();
                $filename = preg_replace('/\s+/', '-', $filename);
                $folder = 'uploads/'.date('Y').'/'.date('m');
                if (!file_exists($folder)) {
                    mkdir($folder, 0777, true);
                }
                $fav_icon = $folder.'/'. time() . '-' . $filename;
                Image::make($image)->resize(32, 32)->save($fav_icon);
                $fav_data->favicon = asset($fav_icon);
            }
            $fav_data->save();
        }
        
        $notification=array(
            'message' => 'Successfully Done',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function save_site_info(Request $request)
    {

        $exist = SiteInfo::first();

        if($exist){

            $data = SiteInfo::find($exist->id);
            $data->site_name = $request->site_name;
            $data->foundation_name = $request->foundation_name;
            $data->slogan = $request->slogan;
            $data->contact_number = $request->contact_number;
            $data->profit = $request->profit;
            $data->min_withdraw = $request->min_withdraw;
            $data->agent_fee = $request->agent_fee;
            $data->form_fee = $request->form_fee;
            $data->refer_commission = $request->refer_commission ?? 0;
            $data->email = $request->email;
            $data->address = $request->address;
            $data->facebook = $request->facebook;
            $data->whatsapp = $request->whatsapp;
            $data->youtube = $request->youtube;
            $data->insta = $request->insta;
            $data->linkedin = $request->linkedin;
            $data->save();

        }else{

            $data = new SiteInfo();
            $data->site_name = $request->site_name;
            $data->foundation_name = $request->foundation_name;
            $data->slogan = $request->slogan;
            $data->contact_number = $request->contact_number;
            $data->profit = $request->profit;
            $data->min_withdraw = $request->min_withdraw;
            $data->agent_fee = $request->agent_fee;
            $data->form_fee = $request->form_fee;
            $data->refer_commission = $request->refer_commission ?? 0;
            $data->email = $request->email;
            $data->address = $request->address;
            $data->facebook = $request->facebook;
            $data->whatsapp = $request->whatsapp;
            $data->youtube = $request->youtube;
            $data->insta = $request->insta;
            $data->linkedin = $request->linkedin;
            $data->save();
        }


        $notification=array(
            'message' => 'Successfully Done',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }



}
