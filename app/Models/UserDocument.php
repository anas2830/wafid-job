<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Auth;

class UserDocument extends BaseModel
{

    protected $table = 'user_document';

    protected $guarded = ['id', 'created_at', 'updated_at'];

}
