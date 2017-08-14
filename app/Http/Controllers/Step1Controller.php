<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use View;
use Validator;
use Mail;

class Step1Controller extends Controller
{
    //
    protected function validator(array $data)
    {
//        print_r($data);exit;
        return Validator::make($data, [
            'category' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'zipcode' => 'digits_between:2,6',
            'district' => 'required|string|max:255',
            'mapposition' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'age' => 'required|numeric|min:18',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|numeric|digits_between:9,12',
//            'phone' =>  'required|regex:/(01)[0-9]{9}/',
            'email' => 'required|string|email|max:255',
            'ip' => 'required|ip',
        ]);
    }
    public function index(Request $request)
    {
        //
        $ip = $request->ip();
        return view('step1')->with('ip',$ip);

    }

    public function create()
    {
        //
        $res = Input::all();
//         print_r($res);
//        $this->validator($res)->validate();
//        print_r( $this->validator($res));exit;
        return view('step2')->with('res',$res);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
