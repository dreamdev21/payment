@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <section class="section">

                    <div class="page-header text-center">
                        <div class="container">
                            <h1>Check your data</h1>
                            <br>

                        </div>
                    </div>
                    {{--{{ $res[] }}--}}
                    <div class="container">
                        {!! Form::open(['url' => '/step1/create', 'class' => 'form-horizontal']) !!}
                        {!! csrf_field() !!}
                        <div id = "box1" class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <span class="card-title">Step2</span>
                                        </div>
                                        <div class="card-content">

                                                <fieldset class="last-child">
                                                    <div class="form-group">
                                                        {!! Form::label('select', 'Category', ['class' => 'col-lg-2 control-label'] )  !!}
                                                        <div class="col-lg-10">
                                                            {!!  Form::select('category', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  $res['category'], ['class' => 'form-control' ]) !!}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('select', 'City', ['class' => 'col-lg-2 control-label'] )  !!}
                                                        <div class="col-lg-10">
                                                            {!!  Form::select('city', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  $res['city'], ['class' => 'form-control' ]) !!}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('select', 'Address', ['class' => 'col-lg-2 control-label'] )  !!}
                                                        <div class="col-lg-10">
                                                            {!!  Form::select('address', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  $res['address'], ['class' => 'form-control' ]) !!}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('select', 'Zipcode', ['class' => 'col-lg-2 control-label'] )  !!}
                                                        <div class="col-lg-10">
                                                            {!!  Form::select('zipcode', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  $res['zipcode'], ['class' => 'form-control' ]) !!}
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <fieldset>
                                                    <div class="form-group">
                                                        {!! Form::label('text', 'District', ['class' => 'col-lg-2 control-label']) !!}
                                                        <div class="col-lg-10">
                                                            {!! Form::text('district', $value = $res['district'], ['class' => 'form-control', 'rows' => 1]) !!}
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-group">
                                                        {!! Form::label('text', 'Map Position', ['class' => 'col-lg-2 control-label']) !!}
                                                        <div class="col-lg-10">
                                                            {!! Form::text('mapposition', $value = $res['mapposition'], ['class' => 'form-control', 'rows' => 1]) !!}
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-group">
                                                        {!! Form::label('text', 'Title', ['class' => 'col-lg-2 control-label']) !!}
                                                        <div class="col-lg-10">
                                                            {!! Form::text('title', $value = $res['title'], ['class' => 'form-control', 'rows' => 1]) !!}
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <!-- Text Area -->
                                                    <div class="form-group">
                                                        {!! Form::label('textarea', 'Description', ['class' => 'col-lg-2 control-label']) !!}
                                                        <div class="col-lg-10">
                                                            {!! Form::textarea('description', $value = $res['description'], ['class' => 'form-control', 'rows' => 3]) !!}
                                                        </div>
                                                    </div>
                                                </fieldset>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{--<div id = "box2" class="container">--}}

                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}

                                    {{--<div class="card">--}}
                                        {{--<div class="card-header">--}}
                                            {{--<span class="card-title">Image Upload</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="card-content">--}}
                                            {{--{{Form::open(['url' => '/step1', 'files' => true])}}--}}

                                            {{--{{Form::label('user_photo', 'User Photo',['class' => 'control-label'])}}--}}
                                            {{--{{Form::file('user_photo')}}--}}
                                            {{--{{Form::submit('Save', ['class' => 'btn btn-success'])}}--}}

                                            {{--{{Form::close()}}--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div id = "box2" class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <span class="card-title">Image Upload</span>
                                        </div>

                                        <div class="card-content">
                                            <div class ="row">
                                                <div class="col-md-4 col-md-offset-2">
                                                    <fieldset class="last-child">




                                                        {{--                                                        <form action="{{ route('ajaxImageUpload') }}" enctype="multipart/form-data" method="POST">--}}


                                                        <div class="alert alert-danger print-error-msg" style="display:none">

                                                            <ul></ul>

                                                        </div>


                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


                                                        <div class="form-group">

                                                            <label>Alt Title:</label>

                                                            <input type="text" name="title" class="form-control" placeholder="Add Title">

                                                        </div>


                                                        <div class="form-group">
                                                            <input type="file" name="img[]" class="file"  id="profile-img">
                                                            <div class="input-group col-xs-12">
                                                                <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                                                                <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                                                <span class="input-group-btn">
                                                                    <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                                                  </span>
                                                            </div>
                                                        </div>


                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4 col-md-offset-2">
                                                    <fieldset class="last-child">
                                                        <div class="form-group">

                                                            <label>Preview:</label>

                                                            <img src="" id="profile-img-tag" width="200px"  />

                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id = "box3" class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <span class="card-title">User Info</span>
                                        </div>
                                        <div class="card-content">

                                            <fieldset class="last-child">

                                                <div class="form-group">
                                                    {!! Form::label('text', 'Age', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('age', $value = $res['age'], ['class' => 'form-control', 'rows' => 1]) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('text', 'First Name', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('firstname', $value = $res['firstname'], ['class' => 'form-control', 'rows' => 1]) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('text', 'Last Name', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('lastname', $value = $res['lastname'], ['class' => 'form-control', 'rows' => 1]) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('text', 'Phone', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('phone', $value = $res['phone'], ['class' => 'form-control', 'rows' => 1]) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::email('email', $value = $res['email'], ['class' => 'form-control', 'placeholder' => 'email']) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('ip', 'IP', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('ip', $value = $res['ip'], ['class' => 'form-control', 'rows' => 1]) !!}
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-2 col-lg-offset-5">
                                                        {!! Form::submit('Continue', ['class' => 'btn btn-sm btn-success rippler rippler-default'] ) !!}
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{Form::close()}}
                    </div>

                </section>
            </div>
        </div>

@stop