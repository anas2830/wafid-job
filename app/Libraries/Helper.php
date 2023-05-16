<?php // Code within app\Libraries\Helper.php

namespace App\Libraries;


use App\User;

use Image;
use Auth;
use DB;
use Validator;
use Str;
use File;


class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function getUploadedFileName($mainFile, $imgPath, $reqWidth=0, $reqHeight=0, $isBlog = 0, $thumb = true)
    {
        $fileExtention = $mainFile->extension();
        $fileOriginalName = $mainFile->getClientOriginalName();
        $file_size 	= $mainFile->getSize();
        if($isBlog > 0){
            $user_id = Auth::guard('web')->user()->id;
        }else{
            $user_id = 0;
        }

        $validExtentions = array('jpeg', 'jpg', 'png');
        $path = public_path($imgPath);
        $currentTime = time();
        $fileName = $user_id.'_'.$currentTime.'.'.$fileExtention;

        if (in_array($fileExtention, $validExtentions)) {

            $mainFile->move($path, $fileName);
            //create instance
            $img = Image::make($path.'/'.$fileName);
            //resize image
            $img->resize(80, 80, function ($constraint) {
                $constraint->aspectRatio();
            });
            if($thumb){
                $img->save($path.'/thumb/'.$fileName);
            }
            
            $output['status'] = 1;
            $output['file_name'] = $fileName;
            $output['file_original_name'] = $fileOriginalName;
            $output['file_extention']     = $fileExtention;
            $output['file_size']          =  $file_size;
        
        } else {
            $output['errors'] = $fileExtention.' File is not support';
            $output['status'] = 0;
        }
        return $output;

    }

    public static function getUploadedAttachmentName($mainFile, $validPath)
    {
        $fileExtention = $mainFile->extension();
        $fileOriginalName = $mainFile->getClientOriginalName();
        $file_size 	= $mainFile->getSize();
        $validExtentions = array('pdf', 'doc', 'docx');
        $path = public_path($validPath);
        $currentTime = time();
        $fileName = $currentTime.'_'.$fileOriginalName.'_'.$file_size.'.'.$fileExtention;

        if($file_size <= 1048576) {
            if (in_array($fileExtention, $validExtentions)) {
                $mainFile->move($path, $fileName);
        
                $output['status']             = 1;
                $output['file_name']          = $fileName;
                $output['file_original_name'] = $fileOriginalName;
                $output['file_extention']     = $fileExtention;
                $output['file_size']          =  $file_size;
    
            } else {
                $output['errors'] = $fileExtention.' File type is not support';
                $output['status'] = 0;
            }
        } else {
            $output['errors'] = $file_size. ' size is too large !!!';
            $output['status'] = 0;
        }
        
        return $output;

    }

    public static function getCandidateId(){
        $id_number = User::max('id_number');
        if (empty($id_number)) {
            $generated_id = 10001;
        } else {
            $generated_id = $id_number + 1;
        }
        return $generated_id;
    }

    public static function offerName($offer_id){
        $offer = DB::table('offers')->where('id', $offer_id)->first();
        if(empty($offer)){
            return '';
        }else{
            return $offer->name;
        }
    }



}