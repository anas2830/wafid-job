<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Models\UserDocument;
use App\Models\MedicalReports;


use DB;
use Str;
use Auth;
use File;
use Helper;


class HomeController extends Controller
{


    public function index(){
        $data['activeMenu'] = "home";
        $data['totalUser'] = User::count();
        $data['processing_user'] = User::where('complete_step', '!=', 4)->count();
        $data['complete_user'] = User::where('complete_step', 4)->count();

        return view('super-admin.home', $data);
    }

    public function userList(){
        $data['activeMenu'] = "user-list";
        $data['users'] = User::get();
        return view('super-admin.user.listData', $data);
    }

    public function deleteUser($id){
    
        $user = User::find($id);
        $imgPath = 'uploads/userDocument';
        File::delete(public_path($imgPath.'/').$user->photo_name);
        File::delete(public_path($imgPath.'/thumb/').$user->photo_name);

        User::find($id)->delete();
    }

    public function userDocument($id){
        $data['user_documents'] = UserDocument::where('user_id', $id)->first();
        $data['user_medical_document'] = MedicalReports::where('user_id', $id)->get();
        return view('super-admin.user.documentList', $data);
    }

    public function adminProfile(){

        $data['activeMenu'] = "profile";
        if(Auth::guard('admin')->check()){
            $data['user_id'] = $user_id = Auth::guard('admin')->user()->id;
            $data['userInfo'] = DB::table('admins')->find($user_id);
            $data['authRole'] = "admin";
        }

        return view('super-admin.profile', $data);
    }

    public function adminProfileUpdate(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $name = $request->name;
        $password = $request->password;
        $photoFile = $request->photo;

        if(Auth::guard('admin')->check()){
            $data['user_id'] = $user_id = Auth::guard('admin')->user()->id;
            $authInfo = DB::table('admins')->find($user_id);
            $authTable = Admin::find($user_id);
            $imgPath = "adminProfile";
        }
        
        if(isset($photoFile)){
            $validPath = 'uploads/'.$imgPath;
            $uploadResponse = Helper::getUploadedFileName($photoFile, $validPath);
            if($uploadResponse['status'] == 1){
                File::delete(public_path($validPath.'/').$authInfo->photo_name);
                File::delete(public_path($validPath.'/thumb/').$authInfo->photo_name);
                $photo_name = $uploadResponse['file_name'];
                $photo_original_name = $uploadResponse['file_original_name'];
                $photo_size = $uploadResponse['file_size'];
                $photo_extention = $uploadResponse['file_extention'];

                $authTable->update([
                    'name' => $name,
                    'password' => Hash::make($password),
                    'photo_name' => $photo_name,
                    'photo_original_name' => $photo_original_name,
                    'photo_size' => $photo_size,
                    'photo_extention' => $photo_extention,
                ]);
            }else{
                return back()->withInput()->with('error', 'profile image '. $uploadResponse['errors']);
            } 
        }else{
            $authTable->update([
                'name' => $name,
                'password' => Hash::make($password)
            ]);
        }

        return back()->withInput()->with('message', 'Profile Update successfully');
    }
}
