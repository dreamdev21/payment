
@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <section class="section">

                    <div class="page-header text-center">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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
                                                    {{--<div class="form-group">--}}
                                                        {{--<article class="page-content">--}}

                                                            {{--<!-- SECTION DEMO -->--}}
                                                            {{--<section id="section-demo">--}}
                                                                {{--<hr>--}}

                                                                {{--<!-- MAP -->--}}
                                                                {{--<div id="display-map" class="display-demo-map map-style-default">--}}
                                                                    {{--<!-- CSSMap - Italy -->--}}
                                                                    {{--<div id="map-italy" style="height: 400px;" class="cssmap-container cssmap-320">--}}
                                                                        {{--<ul class="italy cssmap">--}}
                                                                            {{--<li class="it1"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span></span><a href="#abruzzo" style="clip: rect(1px, 1px, 1px, 1px);">Abruzzo</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it2"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span></span><a href="#basilicata" style="clip: rect(1px, 1px, 1px, 1px);">Basilicata</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it3"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span><span class="s19"></span></span><a href="#calabria" style="clip: rect(1px, 1px, 1px, 1px);">Calabria</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it4"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span><span class="s25"></span><span class="s26"></span><span class="s27"></span></span><a href="#campania" style="clip: rect(1px, 1px, 1px, 1px);">Campania</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it5"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span><span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span></span><a href="#emilia-romagna" style="clip: rect(1px, 1px, 1px, 1px);">Emilia-Romagna</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it6"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span></span><a href="#friuli-venezia-giulia" style="clip: rect(1px, 1px, 1px, 1px);">Friuli-Venezia Giulia</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it7"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span><span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span></span><a href="#lazio" style="clip: rect(1px, 1px, 1px, 1px);">Lazio</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it8"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span></span><a href="#liguria" style="clip: rect(1px, 1px, 1px, 1px);">Liguria</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it9"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span><span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span><span class="s33"></span><span class="s34"></span></span><a href="#lombardia" style="clip: rect(1px, 1px, 1px, 1px);">Lombardia</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it10"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span></span><a href="#marche" style="clip: rect(1px, 1px, 1px, 1px);">Marche</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it11"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span></span><a href="#molise" style="clip: rect(1px, 1px, 1px, 1px);">Molise</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it12"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span><span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span></span><a href="#piemonte" style="clip: rect(1px, 1px, 1px, 1px);">Piemonte</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it13"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span><span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span></span><a href="#puglia" style="clip: rect(1px, 1px, 1px, 1px);">Puglia</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it14"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span></span><a href="#sardegna" style="clip: rect(1px, 1px, 1px, 1px);">Sardegna</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it15"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span><span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span><span class="s33"></span><span class="s34"></span><span class="s35"></span><span class="s36"></span><span class="s37"></span><span class="s38"></span><span class="s39"></span><span class="s40"></span><span class="s41"></span><span class="s42"></span><span class="s43"></span></span><a href="#sicilia" style="clip: rect(1px, 1px, 1px, 1px);">Sicilia</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it16"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span><span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span><span class="s33"></span><span class="s34"></span><span class="s35"></span><span class="s36"></span><span class="s37"></span><span class="s38"></span><span class="s39"></span></span><a href="#toscana" style="clip: rect(1px, 1px, 1px, 1px);">Toscana</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it17"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span></span><a href="#trentino-alto-adige" style="clip: rect(1px, 1px, 1px, 1px);">Trentino-Alto Adige</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it18"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span></span><a href="#umbria" style="clip: rect(1px, 1px, 1px, 1px);">Umbria</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it19"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span></span><a href="#valle-d-aosta" style="clip: rect(1px, 1px, 1px, 1px);">Valle d'Aosta</a><span class="bg"></span></li>--}}
                                                                            {{--<li class="it20"><span class="m"><span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span><span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span><span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span><span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span><span class="s33"></span><span class="s34"></span><span class="s35"></span></span><a href="#veneto" style="clip: rect(1px, 1px, 1px, 1px);">Veneto</a><span class="bg"></span></li>--}}
                                                                            {{--<!----}}
                                                                              {{--<li class="it21"><a href="#san-marino">San Marino</a></li>--}}
                                                                            {{---->--}}
                                                                        {{--</ul>--}}
                                                                        {{--<span class="cssmap-loader" style="left: 160px; margin-left: -36px; margin-top: -11px; top: 200px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 160px; margin-left: -36px; margin-top: -11px; top: 200px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 215px; margin-left: -40px; margin-top: -12px; top: 268px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 215px; margin-left: -40px; margin-top: -12px; top: 268px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 125px; margin-left: -35px; margin-top: -11px; top: 158px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 125px; margin-left: -35px; margin-top: -11px; top: 158px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 125px; margin-left: -35px; margin-top: -11px; top: 158px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 270px; margin-left: -40px; margin-top: -12px; top: 335px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 125px; margin-left: -35px; margin-top: -11px; top: 158px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 125px; margin-left: -35px; margin-top: -11px; top: 158px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 215px; margin-left: -40px; margin-top: -12px; top: 268px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 160px; margin-left: -36px; margin-top: -11px; top: 200px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 215px; margin-left: -40px; margin-top: -12px; top: 268px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 160px; margin-left: -36px; margin-top: -11px; top: 200px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 105px; margin-left: -31px; margin-top: -9px; top: 130px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 105px; margin-left: -31px; margin-top: -9px; top: 130px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 105px; margin-left: -31px; margin-top: -9px; top: 130px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 105px; margin-left: -31px; margin-top: -9px; top: 130px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 105px; margin-left: -31px; margin-top: -9px; top: 130px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 125px; margin-left: -35px; margin-top: -11px; top: 158px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 105px; margin-left: -31px; margin-top: -9px; top: 130px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 160px; margin-left: -36px; margin-top: -11px; top: 200px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 125px; margin-left: -35px; margin-top: -11px; top: 158px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 125px; margin-left: -35px; margin-top: -11px; top: 158px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 125px; margin-left: -35px; margin-top: -11px; top: 158px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 125px; margin-left: -35px; margin-top: -11px; top: 158px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 125px; margin-left: -35px; margin-top: -11px; top: 158px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 125px; margin-left: -35px; margin-top: -11px; top: 158px; display: none;">Loading ...</span><span class="cssmap-loader" style="left: 160px; margin-left: -36px; margin-top: -11px; top: 200px; display: none;">Loading ...</span></div>--}}
                                                                    {{--<!-- END OF THE CSSMap - Italy -->--}}
                                                                    {{--<div id="demo-form-fields" class="demo-form-fields" style="display: none;">--}}
                                                                        {{--<ul>--}}
                                                                            {{--<li><label for="demo-select">Select dropdown</label><div class="select-field"><select id="demo-select" name="demo-select" class="hidden-field"><option value="0">-- Select location</option></select></div></li>--}}
                                                                            {{--<li><label for="demo-input">Input field</label><input id="demo-input" name="demo-input" class="hidden-field" type="text"></li>--}}
                                                                        {{--</ul>--}}
                                                                    {{--</div>--}}
                                                                    {{--<div id="demo-agents" class="demo-agents-list wrapper" style="display: none;">--}}
                                                                        {{--<ul>--}}
                                                                            {{--<li id="abruzzo"><h3>Abruzzo</h3><p>Some info about Abruzzo, or list of addresses, or anything else you want to display here.</p><p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam.</p>  </li>--}}
                                                                            {{--<li id="basilicata"><h3>Basilicata</h3><p>Some info about Basilicata, or list of addresses, or anything else you want to display here.</p><p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor.</p>  </li>--}}
                                                                            {{--<li id="calabria"><h3>Calabria</h3><p>Some info about Calabria, or list of addresses, or anything else you want to display here.</p><p>Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum.</p>  </li>--}}
                                                                            {{--<li id="campania"><h3>Campania</h3><p>Some info about Campania, or list of addresses, or anything else you want to display here.</p><p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor.</p>  </li>--}}
                                                                            {{--<li id="emilia-romagna"><h3>Emilia-Romagna</h3><p>Some info about Emilia-Romagna, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>--}}
                                                                            {{--<li id="friuli-venezia-giulia"><h3>Friuli-Venezia Giulia</h3><p>Some info about Friuli-Venezia Giulia, or list of addresses, or anything else you want to display here.</p><p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor.</p>  </li>--}}
                                                                            {{--<li id="lazio"><h3>Lazio</h3><p>Some info about Lazio, or list of addresses, or anything else you want to display here.</p><p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor.</p>  </li>--}}
                                                                            {{--<li id="liguria"><h3>Liguria</h3><p>Some info about Liguria, or list of addresses, or anything else you want to display here.</p><p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor.</p>  </li>--}}
                                                                            {{--<li id="lombardia"><h3>Lombardia</h3><p>Some info about Lombardia, or list of addresses, or anything else you want to display here.</p><p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor.</p>  </li>--}}
                                                                            {{--<li id="marche"><h3>Marche</h3><p>Some info about Marche, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>--}}
                                                                            {{--<li id="molise"><h3>Molise</h3><p>Some info about Molise, or list of addresses, or anything else you want to display here.</p><p>Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut.</p>  </li>--}}
                                                                            {{--<li id="piemonte"><h3>Piemonte</h3><p>Some info about Piemonte, or list of addresses, or anything else you want to display here.</p><p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam.</p>  </li>--}}
                                                                            {{--<li id="puglia"><h3>Puglia</h3><p>Some info about Puglia, or list of addresses, or anything else you want to display here.</p><p>Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum, arcu sodales feugiat.</p>  </li>--}}
                                                                            {{--<li id="sardegna"><h3>Sardegna</h3><p>Some info about Sardegna, or list of addresses, or anything else you want to display here.</p><p>Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut.</p>  </li>--}}
                                                                            {{--<li id="sicilia"><h3>Sicilia</h3><p>Some info about Sicilia, or list of addresses, or anything else you want to display here.</p><p>Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed.</p>  </li>--}}
                                                                            {{--<li id="toscana"><h3>Toscana</h3><p>Some info about Toscana, or list of addresses, or anything else you want to display here.</p><p>Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum.</p>  </li>--}}
                                                                            {{--<li id="trentino-alto-adige"><h3>Trentino-Alto Adige</h3><p>Some info about Trentino-Alto Adige, or list of addresses, or anything else you want to display here.</p><p>Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut.</p>  </li>--}}
                                                                            {{--<li id="umbria"><h3>Umbria</h3><p>Some info about Umbria, or list of addresses, or anything else you want to display here.</p><p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam.</p>  </li>--}}
                                                                            {{--<li id="valle-d-aosta"><h3>Valle d'Aosta</h3><p>Some info about Valle d'Aosta, or list of addresses, or anything else you want to display here.</p><p>Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum, arcu sodales feugiat.</p>  </li>--}}
                                                                            {{--<li id="veneto"><h3>Veneto</h3><p>Some info about Veneto, or list of addresses, or anything else you want to display here.</p><p>Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum.</p>  </li>--}}
                                                                            {{--<li id="san-marino"><h3>San Marino</h3><p>Some info about San Marino, or list of addresses, or anything else you want to display here.</p><p>Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut.</p>  </li>--}}
                                                                        {{--</ul>--}}
                                                                    {{--</div>--}}
                                                                    {{--<div id="demo-markers" style="display: none;">--}}
                                                                        {{--<ul class="cssmap-pins">--}}
                                                                            {{--<li class="cssmap-pin" data-cssmap-coords="223,207">--}}

                                                                                {{--<div class="cssmap-tooltip-content">--}}
                                                                                    {{--Phasellus quis est sed turpis sollicitudin venenatis. Praesent eget neque eu eros interdum.--}}
                                                                                {{--</div>--}}
                                                                                {{--<a href="#" class="cssmap-marker"><img src="includes/pin.png" alt="pin" width="20" height="25"></a>--}}

                                                                            {{--</li>--}}
                                                                            {{--<li class="cssmap-pin" data-cssmap-coords="543,535">--}}

                                                                                {{--<div class="cssmap-tooltip-content">--}}
                                                                                    {{--Vivamus rutrum consectetur quis placerat neque lobortis. Nam vestibulum, arcu sodales feugiat.--}}
                                                                                {{--</div>--}}
                                                                                {{--<a href="#" class="cssmap-marker"><img src="includes/pin.png" alt="pin" width="20" height="25"></a>--}}

                                                                            {{--</li>--}}
                                                                        {{--</ul>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</section>--}}
                                                        {{--</article>--}}
                                                    {{--</div>--}}
                                                    <div class="form-group">
                                                        {!! Form::label('select', 'Category', ['class' => 'col-lg-2 control-label'] )  !!}
                                                        <div class="col-lg-10">
                                                            {!!  Form::select('category', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('select', 'City', ['class' => 'col-lg-2 control-label'] )  !!}
                                                        <div class="col-lg-10">
                                                            {!!  Form::select('city', ['abruzzo' => 'Abruzzo', 'basilicata' => 'Basilicata', 'calabria' => 'Calabria', 'campania' => 'Campania', 'emilia-romagna' => 'Emilia-Romagna', 'friuli-venezia-giulia' => 'Friuli-Venezia-Giulia', 'lazio' => 'Lazio', 'liguria' => 'Liguria', 'lombardia' => 'Lombardia', 'marche' => 'Marche', 'molise' => 'Molise', 'piemonte' => 'Piemonte', 'puglia' => 'Puglia', 'sardegna' => 'Sardegna', 'sicilia' => 'Sicilia', 'toscana' => 'Toscana', 'trentino-alto-adige' => 'Trentino-Alto-Adige', 'umbria' => 'Umbria', 'valle-d-aosta' => 'Valle-D-Aosta', 'veneto' => 'Veneto', 'san-marino' => 'San-Marino'],  'Abruzzo', ['class' => 'form-control' ]) !!}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('select', 'Address', ['class' => 'col-lg-2 control-label'] )  !!}
                                                        <div class="col-lg-10">
                                                            {!! Form::text('address', $value = null, ['class' => 'form-control', 'rows' => 1]) !!}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('select', 'Zipcode', ['class' => 'col-lg-2 control-label'] )  !!}
                                                        <div class="col-lg-10">
                                                            {!! Form::text('zipcode', $value = null, ['class' => 'form-control', 'rows' => 1]) !!}
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
{{--                                                {!! Form::open(['url' => '/step1/create', 'class' => 'form-horizontal']) !!}--}}
                                                <div class="form-group">
                                                    {!! Form::label('age', 'Age', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('age', $value = null, ['class' => 'form-control', 'rows' => 1, 'placeholder' => '23']) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('text', 'First Name', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('firstname', $value = null, ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'John']) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('text', 'Last Name', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('lastname', $value = null, ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Doe']) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('text', 'Phone', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('phone', $value = null, ['class' => 'form-control', 'rows' => 1, 'placeholder' => '1234567890']) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'johndoe@sample.com']) !!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('ip', 'IP', ['class' => 'col-lg-2 control-label']) !!}
                                                    <div class="col-lg-10">
                                                        {!! Form::text('ip', $value = $ip, ['class' => 'form-control', 'rows' => 1, 'placeholder' =>$ip,'readonly']) !!}
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
                                                    <div class="col-lg-offset-1 col-lg-3">
                                                        <div class="checkbox c-checkbox">
                                                            <label>
                                                                <input id = "accept" type="checkbox" onclick="check();">
                                                                <span class="fa fa-check"></span>Accept Term of Use</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-offset-1 col-lg-3">
                                                        <div class="checkbox c-checkbox">
                                                            <label>
                                                                <input  id = "privacy" type="checkbox" onclick="check();">
                                                                <span class="fa fa-check"></span>Privacy Policy</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-offset-1 col-lg-3">
                                                        <div class="checkbox c-checkbox">
                                                            <label>
                                                                <input  id = "age_check" type="checkbox" onclick="check();">
                                                                <span class="fa fa-check"></span>I am over 18 years old</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-2 col-lg-offset-5">
                                                        {!! Form::submit('Continue', ['class' => 'btn btn-sm btn-success rippler rippler-default','id' => 'step1_continue_btn'] ) !!}
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

        <script>
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
            $(document).on('click', '.browse', function(){
                var file = $(this).parent().parent().parent().find('.file');
                file.trigger('click');
            });
            $(document).on('change', '.file', function(){
                $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
            });
        </script>


@stop
