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

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['activeMenu'] = "offers";
        $data['all_offers'] = Offers::get();

        return view('super-admin.offers.listData', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        return view('super-admin.offers.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'short_desc' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->passes()) {
            $name = $request->name;
            $short_desc = $request->short_desc;
            $points = $request->points;

            Offers::create([
                'name' => $name,
                'short_desc' => $short_desc,
                'points' => $points,
            ]);

            $output['messege'] = 'Offers has been Created';
            $output['msgType'] = 'success';
        
            return redirect()->back()->with($output);
        }else{
            return redirect()->back()->withErrors($validator);
        }
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
        $data['offers'] = Offers::find($id);
        return view('super-admin.offers.edit', $data);
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
            $points = $request->points;

            Offers::find($id)->update([
                'name' => $name,
                'short_desc' => $short_desc,
                'points' => $points,
            ]);

            $output['messege'] = 'Offers has been Updated';
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
