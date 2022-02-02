@extends('layouts.app')

@section('title')
    <title>{{$title}}</title>
@endsection

@section('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('content')
<div class="container p-5">
        <div class="row align-items-center">
            
            <!-- Sidebar -->
            <div class="col-lg-4 p-5">
                <div id="sidebar">
                    <h1>innocent days</h1><br>
                    <div id="navigation">
                        <ul>
                            <li> <a href="/home" data-toggle="tooltip" data-placement="auto" title="index"><span id="link">HOME &nbsp; </span><i class="fa fa-fw fa-home fa-lg"></i></a> </li>
                            <li> <a href="/about" data-toggle="tooltip" data-placement="auto" title="profil"><span id="link">ABOUT &nbsp; </span><i class="fa fa-fw fa-info fa-lg"></i></a> </li>
                            <li> <a href="/favorites" data-toggle="tooltip" data-placement="auto" title="favoritin"><span id="link">FAVORITE &nbsp; </span><i class="fa fa-fw fa-star fa-lg"></i></a> </li>
                            <li> <a href="/gallery" data-toggle="tooltip" data-placement="auto" title="galerie"><span id="link">GALLERY &nbsp; </span><i class="fa fa-fw fa-camera fa-lg"></i></a> </li>
                        </ul>
                    </div>
                    <div id="icon">
                        <img src="https://i.pinimg.com/originals/42/b4/d3/42b4d305d6663ed350f34d1e7c7e4400.jpg">
                    </div>
                </div><br><br>
            </div>

            <div class="col-lg-8">
                <div id="content">
                    
                    <!-- Title Page -->
                    <div class="row">
                        <div class="col-lg">
                            <div id="container">
                                <h4>This page includes captured moments in my life. </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="row">

                        <!-- First Column -->
                        <div class="col-lg p-4">

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <img src="https://i.pinimg.com/originals/a5/62/ad/a562ad37f76570036a2ee9866602c1a8.jpg">
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <img src="https://i.pinimg.com/originals/10/54/92/105492cd22fff86856f1a1449303585f.jpg">
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <img src="https://i.pinimg.com/originals/16/0e/be/160ebecb148577c21506082a7cd13b54.jpg">
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <img src="https://i.pinimg.com/originals/59/86/ee/5986eec05d9b0be1505e80b9338a4fa0.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- Second Column -->
                        <div class="col-lg p-4">

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <img src="https://i.pinimg.com/originals/24/51/de/2451deb595b47642305030a2af55d5f9.jpg">
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <img src="https://i.pinimg.com/originals/6e/b9/4d/6eb94d8fd8df47b3c7f65f36e12aed7e.jpg">
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <img src="https://i.pinimg.com/originals/78/0e/a5/780ea5b4f3d48ab9b764ce257960dd9e.jpg">
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <img src="https://i.pinimg.com/originals/7d/87/13/7d8713d20cae473c204d10db72ecdb76.jpg">
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <img src="https://i.pinimg.com/originals/ff/93/53/ff9353cdc2cae848056bd4be8912d213.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection