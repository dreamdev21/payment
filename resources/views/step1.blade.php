<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- Core CSS -->
        <link href="css/project.css" rel="stylesheet">

        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    </head>
    <body>
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

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id = "box2" class="container">

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <span class="card-title">Image Upload</span>
                                        </div>
                                        <div class="card-content">
                                            {{Form::open(['url' => '/step1', 'files' => true])}}

                                            {{Form::label('user_photo', 'User Photo',['class' => 'control-label'])}}
                                            {{Form::file('user_photo')}}
                                            {{Form::submit('Save', ['class' => 'btn btn-success'])}}

                                            {{--{{Form::close()}}--}}
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
                                                        {!! Form::text('text', $value = null, ['class' => 'form-control', 'rows' => 1]) !!}
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


        <!-- Main vendor Scripts-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- START Page Custom Script-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="js/jquery.gmap.min.js"></script>
        <script src="js/jquery.rippler.min.js"></script>
        <script src="js/jquery.swipebox.min.js"></script>
        <!-- END Page Custom Script-->

        <!-- App Main-->
        <script src="js/app.js"></script>
        <script src="js/step1.js"></script>
        <!-- END Scripts-->
    </body>
</html>
