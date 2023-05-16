<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\User;
use App\Models\Offers;
use App\Models\Service;
use App\Models\EasySteps;

use DB;
use Str;
use Auth;
use File;
use Helper;

class IndexController extends Controller
{

    public function index()
    {
        $data['offers'] = Offers::get();
        $data['header_footer_seetings'] = DB::table('header_footer_content')->where('id', 1)->first();
        $data['about_us_seetings'] = DB::table('home_aobut_content')->where('id', 1)->first();
        $data['services'] = Service::get();
        $data['easy_steps'] = EasySteps::get();
        return view('website.home', $data);
    }

    public function processingCandidate(){
        $data['processing_candidate'] = User::where('complete_step', '!=', 4)->paginate(16);
        return view('website.processing_candidate', $data);
    }

    public function successfullCandidate(){
        $data['successfull_candidate'] = User::where('complete_step', 4)->paginate(16);
        return view('website.successfull_candidate', $data);
    }


}
