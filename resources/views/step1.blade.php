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
                        <div class="container">

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <span class="card-title">Step1</span>
                                        </div>
                                        <div class="card-content">
                                            <div class="form-horizontal">
                                                <fieldset class="last-child">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Category</label>
                                                        <div class="col-sm-10">
                                                            <select name="account" class="form-control m-b">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">City</label>
                                                        <div class="col-sm-10">
                                                            <select name="account" class="form-control m-b">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Address</label>
                                                        <div class="col-sm-10">
                                                            <select name="account" class="form-control m-b">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Zip code</label>
                                                        <div class="col-sm-10">
                                                            <select name="account" class="form-control m-b">
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <fieldset>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">District</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-rounded">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Map Position</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-rounded">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Title</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-rounded">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Description</label>
                                                        <div class="col-sm-10">
                                                            <textarea class="form-control" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="container">

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <span class="card-title">Image Upload</span>
                                        </div>
                                        <div class="card-content">
                                            <div class="form-group">
                                                {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
                                                <div class="col-lg-10">
                                                    {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


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
