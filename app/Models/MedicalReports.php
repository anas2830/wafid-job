<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Auth;

class MedicalReports extends BaseModel
{

    protected $table = 'medical_reports';

    protected $guarded = ['id', 'created_at', 'updated_at'];

}
