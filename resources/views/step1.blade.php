
@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <section class="section">

                    <div class="page-header text-center">
                        <div class="container">
                            <h1>Welcome to our service!</h1>
                            <br>
                            <button id = "showstep" class="btn btn-sm btn-success rippler rippler-default btn-lg" onclick="showstep1()">Continue</button>
                        </div>
                    </div>
                    <div id = "step1" class="container" style="visibility: hidden;">
                        {!! Form::open(['url' => '/step1/create', 'class' => 'form-horizontal']) !!}
                        {!! csrf_field() !!}
                        <div id = "box1" class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <span class="card-title">Step1</span>
                                        </div>
                                        <div class="card-content">

                                                <fieldset class="last-child">
                                                    <div class="form-group">
                                                        {!! Form::label('select', 'Category', ['class' => 'col-lg-2 control-label'] )  !!}
                                                        <div class="col-lg-10">
                                                            {!!  Form::select('category', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('select', 'City', ['class' => 'col-lg-2 control-label'] )  !!}
                                                        <div class="col-lg-10">
                                                            {!!  Form::select('city', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('select', 'Address', ['class' => 'col-lg-2 control-label'] )  !!}
                                                        <div class="col-lg-10">
                                                            {!!  Form::select('address', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('select', 'Zipcode', ['class' => 'col-lg-2 control-label'] )  !!}
                                                        <div class="col-lg-10">
                                                            {!!  Form::select('zipcode', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!}
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <fieldset>
                                                    <div class="form-group">
                                                        {!! Form::label('text', 'District', ['class' => 'col-lg-2 control-label']) !!}
                                                        <div class="col-lg-10">
                                                            {!! Form::text('district', $value = null, ['class' => 'form-control', 'rows' => 1]) !!}
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-group">
                                                        {!! Form::label('text', 'Map Position', ['class' => 'col-lg-2 control-label']) !!}
                                                        <div class="col-lg-10">
                                                            {!! Form::text('mapposition', $value = null, ['class' => 'form-control', 'rows' => 1]) !!}
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-group">
                                                        {!! Form::label('text', 'Title', ['class' => 'col-lg-2 control-label']) !!}
                                                        <div class="col-lg-10">
                                                            {!! Form::text('title', $value = null, ['class' => 'form-control', 'rows' => 1]) !!}
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <!-- Text Area -->
                                                    <div class="form-group">
                                                        {!! Form::label('textarea', 'Description', ['class' => 'col-lg-2 control-label']) !!}
                                                        <div class="col-lg-10">
                                                            {!! Form::textarea('description', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            {{--{!! Form::close() !!}--}}
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
                                            <span class="card-title">Step1</span>
                                        </div>
                                        <div class="card-content">

                                            <fieldset class="last-child">




                                                <form action="{{ route('ajaxImageUpload') }}" enctype="multipart/form-data" method="POST">


                                                    <div class="alert alert-danger print-error-msg" style="display:none">

                                                        <ul></ul>

                                                    </div>


                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                                                    <div class="form-group">

                                                        <label>Alt Title:</label>

                                                        <input type="text" name="title" class="form-control" placeholder="Add Title">

                                                    </div>


                                                    <div class="form-group">

                                                        <label>Image:</label>

                                                        <input type="file" name="image" id="profile-img" class="form-control">

                                                    </div>

                                                    <div class="form-group">

                                                        <label>Preview:</label>

                                                        <img src="" id="profile-img-tag" width="200px"  />

                                                    </div>


                                                    <div class="form-group">

                                                        <button class="btn btn-success upload-image" type="submit">Upload Image</button>

                                                    </div>


                                                </form>
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
{{--                                                {!! Form::open(['url' => '/step1/create', 'class' => 'form-horizontal']) !!}--}}
                                                <div class="form-group">
                                                    {!! Form::label('age', 'Age', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('age', $value = null, ['class' => 'form-control', 'rows' => 1]) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('text', 'First Name', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('firstname', $value = null, ['class' => 'form-control', 'rows' => 1]) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('text', 'Last Name', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('lastname', $value = null, ['class' => 'form-control', 'rows' => 1]) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('text', 'Phone', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('phone', $value = null, ['class' => 'form-control', 'rows' => 1]) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('ip', 'IP', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('ip', $value = null, ['class' => 'form-control', 'rows' => 1]) !!}
                                                    </div>
                                                </div>

                                            </fieldset>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id = "box4" class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <span class="card-title">Agreement</span>
                                        </div>
                                        <div class="card-content">

                                            <fieldset class="last-child">
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-4">
                                                        <div class="checkbox c-checkbox">
                                                            <label>
                                                                {!! Form::checkbox('checkbox') !!}
                                                                <span class="fa fa-check"></span>Accept Term of Use:</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-offset-2 col-lg-4">
                                                        <div class="checkbox c-checkbox">
                                                            <label>
                                                                {!! Form::checkbox('checkbox') !!}
                                                                <span class="fa fa-check"></span>Privacy Policy:</label>
                                                        </div>

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
        <script type="text/javascript">

            function readURL(input) {

                if (input.files && input.files[0]) {

                    var reader = new FileReader();



                    reader.onload = function (e) {

                        $('#profile-img-tag').attr('src', e.target.result);

                    }

                    reader.readAsDataURL(input.files[0]);

                }

            }

            $("#profile-img").change(function(){

                readURL(this);

            });

        </script>
        <script type="text/javascript">

            $("body").on("click",".upload-image",function(e){

                $(this).parents("form").ajaxForm(options);

            });


            var options = {

                complete: function(response)

                {

                    if($.isEmptyObject(response.responseJSON.error)){

                        $("input[name='title']").val('');

                        alert('Image Upload Successfully.');

                    }else{

                        printErrorMsg(response.responseJSON.error);

                    }

                }

            };


            function printErrorMsg (msg) {

                $(".print-error-msg").find("ul").html('');

                $(".print-error-msg").css('display','block');

                $.each( msg, function( key, value ) {

                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

                });

            }

        </script>
@stop
