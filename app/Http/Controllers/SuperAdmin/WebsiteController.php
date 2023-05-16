<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Offers;

use Illuminate\Support\Facades\Validator;
use DB;
use Str;
use Auth;
use File;
use Helper;

class WebsiteController extends Controller
{

    public function headerSeetings()
    {
        $data['activeMenu'] = "header-seetings";
        $data['header_footer_seetings'] = DB::table('header_footer_content')->where('id', 1)->first();

        return view('super-admin.website.header-seetings', $data);
    }

    public function headerSeetingsSave(Request $request){

        $photoFile = $request->site_logo;
        $fav_icon = $request->fav_icon;
        $validPath = 'uploads/bg';
        if(isset($photoFile)){
            $uploadResponse = Helper::getUploadedFileName($photoFile, $validPath, 0, 0, 0, false);
            if($uploadResponse['status'] == 1){
                // $exists = DB::table('header_footer_content')->where('id', 1)->first();
                // File::delete(public_path($validPath.'/').$exists->site_logo);
                // File::delete(public_path($validPath.'/thumb/').$exists->site_logo);
                $photo_name = $uploadResponse['file_name'];
                DB::table('header_footer_content')->where('id', 1)->update([
                    'site_logo' => $photo_name,
                ]);
            }else{
                return back()->withInput()->with('error', 'site logo '. $uploadResponse['errors']);
            } 
        }
        if(isset($fav_icon)){
            $uploadResponse = Helper::getUploadedFileName($fav_icon, $validPath, 0, 0, 0, false);
            if($uploadResponse['status'] == 1){
                $fav_icon_name = $uploadResponse['file_name'];
                DB::table('header_footer_content')->where('id', 1)->update([
                    'fav_icon' => $fav_icon_name,
                ]);
            }else{
                return back()->withInput()->with('error', 'fav image '. $uploadResponse['errors']);
            } 
        }

        DB::table('header_footer_content')->where('id', 1)->update([
            'email' => $request->email,
            'site_title' => $request->site_title,
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'banner_top_text' => $request->banner_top_text,
            'banner_middle_text' => $request->banner_middle_text,
            'banner_bottom_text' => $request->banner_bottom_text,
            'footer_left_short_text' => $request->footer_left_short_text,
            'address' => $request->address,
        ]);
        return back()->withInput()->with('message', 'Update successfully');
    }

    public function aboutUs(){
        $data['activeMenu'] = "about-us";
        $data['about_us_seetings'] = DB::table('home_aobut_content')->where('id', 1)->first();

        return view('super-admin.website.about-us', $data);
    }

    public function aboutUsSave(Request $request){
        DB::table('home_aobut_content')->where('id', 1)->update([
            'we_do_content' => $request->we_do_content,
            'candidates_content' => $request->candidates_content,
            'employers_content' => $request->employers_content,
        ]);
        return back()->withInput()->with('message', 'Update successfully');
    }

    
}
