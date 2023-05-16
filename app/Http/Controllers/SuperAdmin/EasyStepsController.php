<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\EasySteps;

use Illuminate\Support\Facades\Validator;
use DB;
use Str;
use Auth;
use File;
use Helper;

class EasyStepsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['activeMenu'] = "easy-steps";
        $data['all_steps'] = EasySteps::get();

        return view('super-admin.easy-steps.listData', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['step'] = EasySteps::find($id);
        return view('super-admin.easy-steps.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'short_desc' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->passes()) {

            $name = $request->name;
            $short_desc = $request->short_desc;

            EasySteps::find($id)->update([
                'name' => $name,
                'short_desc' => $short_desc,
            ]);

            $output['messege'] = 'Step has been Updated';
            $output['msgType'] = 'success';
        
            return redirect()->back()->with($output);
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
