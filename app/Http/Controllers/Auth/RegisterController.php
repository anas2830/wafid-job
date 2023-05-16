<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Auth\Events\Registered;

use App\Models\Offers;

use DB;
use Str;
use Auth;
use File;
use Helper;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm(){
        $data['offers'] = Offers::get();
        return view('auth.register', $data);
    }

    public function signUp(Request $request){

        $request->validate([
            'offer' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'country' => ['required', 'string'],
            'present_address' => ['required', 'string'],
            'permanent_address' => ['required', 'string'],
            'destination_country' => ['required', 'string'],


            // 'photo' => ['mimes:jpeg,jpg,png,', 'max:300'],
        ]);

        $offer = $request->offer;
        $name = $request->name;
        $job_title = $request->job_title;
        $email = $request->email;
        $password = $request->password;
        $photoFile = $request->photo;
        $present_address = $request->present_address;
        $permanent_address = $request->permanent_address;
        $from_country = $request->country;
        $destination_country = $request->destination_country;

        $photo_name = Null;
        $photo_original_name = Null;
        $photo_size = Null;
        $photo_extention = Null;

        if(isset($photoFile)){
            $validPath = 'uploads/userProfile';
            $uploadResponse = Helper::getUploadedFileName($photoFile, $validPath);
            if($uploadResponse['status'] == 1){
                $photo_name = $uploadResponse['file_name'];
                $photo_original_name = $uploadResponse['file_original_name'];
                $photo_size = $uploadResponse['file_size'];
                $photo_extention = $uploadResponse['file_extention'];
            }else{
                return back()->withInput()->with('error', 'profile image '. $uploadResponse['errors']);
            } 
        }


        $data = User::create([
            'id_number' => Helper::getCandidateId(),
            'offer_id' => $offer,
            'job_title' => (isset($job_title) ? $job_title : Null ),
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'present_address' => (isset($present_address) ? $present_address : Null ),
            'permanent_address' => (isset($permanent_address) ? $permanent_address : Null ),
            'from_country' => (isset($from_country) ? $from_country : Null ),
            'to_country' => (isset($destination_country) ? $destination_country : Null ),
            'photo_name' => $photo_name,
            'photo_original_name' => $photo_original_name,
            'photo_size' => $photo_size,
            'photo_extention' => $photo_extention,
            'complete_step' => 1,
        ]);

        event(new Registered($data));

        // Auth::loginUsingId($data->id);

        return back()->withInput()->with('message', 'Register Successfully! Check your email and verify');
 

    }
}
