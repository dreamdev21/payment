<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use View;

class Step1Controller extends Controller
{
    //
    public function index()
    {
        //

    }
    public function dropzone()

    {

        return view('dropzone-view');

    }


    /**

     * Image Upload Code

     *

     * @return void

     */

    public function dropzoneStore(Request $request)

    {

        $image = $request->file('file');

        $imageName = time().$image->getClientOriginalName();

        $image->move(public_path('images'),$imageName);

        return response()->json(['success'=>$imageName]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
         $res = Input::all();
        return view('step1_edit')->with('res',$res);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
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
