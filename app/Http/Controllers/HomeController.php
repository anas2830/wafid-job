<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\UserDocument;
use App\Models\MedicalReports;
use App\User;

use DB;
use Str;
use Auth;
use File;
use Helper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $data['user_id'] = $user_id = Auth::guard('web')->user()->id;
        $data['userInfo'] = $userInfo = DB::table('users')->find($user_id);
        $data['userDocument'] = $userDocument = DB::table('user_document')->where('user_id', $user_id)->first();
        $data['userMedicalDocument'] = $userMedicalDocument = MedicalReports::where('user_id', $user_id)->get();

        return view('website.dashboard', $data);
    }

    public function dashboardUpdate(Request $request){
        $profile_photo = $request->profile_photo;
        $passport_copy = $request->passport_copy;
        $medical_test = $request->medical_test;
        $bank_receipt = $request->bank_receipt;
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $exists_data = UserDocument::where('user_id', $user_id)->first();
        if(empty($exists_data)){
            $complete_step = 1;
        }else{
            $update_complete_step = Auth::user()->complete_step;
        }
        $user_document = [];
        $user_document['user_id'] = $user_id;

        if(isset($profile_photo)){
            $validPath = 'uploads/userProfile';
            $uploadResponse = Helper::getUploadedFileName($profile_photo, $validPath);
            if($uploadResponse['status'] == 1){
                $photo_name = $uploadResponse['file_name'];
                $photo_original_name = $uploadResponse['file_original_name'];
                $photo_size = $uploadResponse['file_size'];
                $photo_extention = $uploadResponse['file_extention'];
                File::delete(public_path($validPath.'/').$user->photo_name);
                File::delete(public_path($validPath.'/thumb/').$user->photo_name);
                User::find($user_id)->update([
                    'photo_name' => $photo_name,
                    'photo_original_name' => $photo_original_name,
                    'photo_size' => $photo_size,
                    'photo_extention' => $photo_extention,
                ]);
            }else{
                return back()->withInput()->with('error', 'profile image '. $uploadResponse['errors']);
            } 
        }

        if(isset($passport_copy)){
            $validPath = 'uploads/userDocument';
            $uploadPassportResponse = Helper::getUploadedAttachmentName($passport_copy, $validPath);
            if($uploadPassportResponse['status'] == 1){
                $user_document['passport_name'] = $uploadPassportResponse['file_name'];
                $user_document['passport_original_name'] = $uploadPassportResponse['file_original_name'];
                $user_document['passport_size'] = $uploadPassportResponse['file_size'];
                $user_document['passport_extention'] = $uploadPassportResponse['file_extention'];
                if(empty($exists_data)){
                    $complete_step++;
                }else{
                    if(!isset($exists_data->passport_name)){
                        $update_complete_step++;
                    }
                    File::delete(public_path($validPath.'/').$exists_data->passport_name);
                    File::delete(public_path($validPath.'/thumb/').$exists_data->passport_name);
                }
            }else{
                return back()->withInput()->with('error', 'passport file '. $uploadPassportResponse['errors']);
            } 
        }

        if(isset($medical_test)){
            $validPath = 'uploads/userDocument';
            foreach($medical_test as $medical_doc){
                $uploadMedicalResponse = Helper::getUploadedAttachmentName($medical_doc, $validPath);
                if($uploadMedicalResponse['status'] == 1){
                    $medical_name = $uploadMedicalResponse['file_name'];
                    $medical_original_name = $uploadMedicalResponse['file_original_name'];
                    $medical_size = $uploadMedicalResponse['file_size'];
                    $medical_extention = $uploadMedicalResponse['file_extention'];
                    $medical_exists_data = DB::table('medical_reports')->where('user_id', $user_id)->count();
                    if($medical_exists_data == 0){
                        if(empty($exists_data)){
                            $complete_step++;
                        }else{
                            $update_complete_step++;
                        }
                    }
                    MedicalReports::create([
                        'user_id' => $user_id,
                        'medical_name' => $medical_name,
                        'medical_original_name' => $medical_original_name,
                        'medical_size' => $medical_size,
                        'medical_extention' => $medical_extention,
                    ]);
                }else{
                    return back()->withInput()->with('error', 'medical test file '. $uploadMedicalResponse['errors']);
                } 
            }
        }

        if(isset($bank_receipt)){
            $validPath = 'uploads/userDocument';
            $uploadBankResponse = Helper::getUploadedAttachmentName($bank_receipt, $validPath);
            if($uploadBankResponse['status'] == 1){
                $user_document['bank_name'] = $uploadBankResponse['file_name'];
                $user_document['bank_original_name'] = $uploadBankResponse['file_original_name'];
                $user_document['bank_size'] = $uploadBankResponse['file_size'];
                $user_document['bank_extention'] = $uploadBankResponse['file_extention'];
                if(empty($exists_data)){
                    $complete_step++;
                }else{
                    if(!isset($exists_data->bank_name)){
                        $update_complete_step++;
                    }
                    File::delete(public_path($validPath.'/').$exists_data->bank_name);
                    File::delete(public_path($validPath.'/thumb/').$exists_data->bank_name);
                }
            }else{
                return back()->withInput()->with('error', 'bank receipt file '. $uploadBankResponse['errors']);
            } 
        }

        if(empty($exists_data)){
            UserDocument::create($user_document);
            User::find($user_id)->update([
                'complete_step' => $complete_step
            ]);
        }else{
            $exists_data->update($user_document);
            User::find($user_id)->update([
                'complete_step' => $update_complete_step
            ]);
        }

        return back()->withInput()->with('message', 'Information Upload Successfully!');
    }

    public function userProfile(Request $request){

        $data['user_id'] = $user_id = Auth::guard('web')->user()->id;
        $data['userInfo'] = DB::table('users')->find($user_id);

        return view('website.profile', $data);
    }


    public function profileUpdate(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'country' => ['required', 'string'],
            'destination_country' => ['required', 'string'],
            // 'photo' => ['mimes:jpeg,jpg,png,', 'max:300'],
        ]);

        $name = $request->name;
        $job_title = $request->job_title;
        $password = $request->password;
        $photoFile = $request->photo;
        $present_address = $request->present_address;
        $permanent_address = $request->permanent_address;
        $from_country = $request->country;
        $destination_country = $request->destination_country;
        $data['user_id'] = $user_id = Auth::guard('web')->user()->id;
        $authInfo = DB::table('users')->find($user_id);

        $update_data = [];

        if(isset($photoFile)){
            $validPath = 'uploads/userProfile';
            $uploadResponse = Helper::getUploadedFileName($photoFile, $validPath);
            if($uploadResponse['status'] == 1){
                File::delete(public_path($validPath.'/').$authInfo->photo_name);
                File::delete(public_path($validPath.'/thumb/').$authInfo->photo_name);
                $update_data['photo_name'] = $uploadResponse['file_name'];
                $update_data['photo_original_name'] = $uploadResponse['file_original_name'];
                $update_data['photo_size'] = $uploadResponse['file_size'];
                $update_data['photo_extention'] = $uploadResponse['file_extention'];
            }else{
                return back()->withInput()->with('error', 'profile image '. $uploadResponse['errors']);
            } 
        }

        $update_data['name'] = $name;
        $update_data['job_title'] = $job_title;
        $update_data['password'] = Hash::make($password);
        $update_data['present_address'] = $present_address;
        $update_data['permanent_address'] = $permanent_address;
        $update_data['from_country'] = $from_country;
        $update_data['destination_country'] = $destination_country;
        
        User::find($user_id)->update($update_data);

        return back()->withInput()->with('message', 'Profile Update Successfully!');

    }
}
