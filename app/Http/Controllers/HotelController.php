<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Validator;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $object = new \STDClass();
        $object->items = DB::table('hotels')->get();

        return response()->json($object);
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

        $validator = Validator::make($request->all(), [
            'lat' => 'required',
            'lng' => 'required',
            'name' => 'required',
            'address' => 'required',
        ]);


        $object = new \STDClass();
        $object->status = true;

        if ($validator->fails()) {
            $object->message = "Input validation failed";
            $object->status = false;
        } else {
            
            $lat = $request->get('lat');
            $lng = $request->get('lng');
            $name = $request->get('name');
            $address = $request->get('address');

            $id = DB::table('hotels')->insertGetId(
                ['lat' => $lat, 'lng' => $lng, 'name' => $name, 'address' => $address]
                );


            if($id <=0 ) {
                $object->message = "Database error";
                $object->status = false;
            }
        }


        return response()->json($object);
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
        //
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
        //
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
