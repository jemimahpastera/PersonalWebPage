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
                                <h4>This page contains facts about me. </h4>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="row">

                        <!-- First Column -->
                        <div class="col-lg-6 p-4">

                            <!-- First Row -->
                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <br><h6>Basic Information</h6>
                                        <div id="column">
                                            <li><span>Name</span>&nbsp; Jemimah Pastera</li>
                                            <li><span>Nickname</span>&nbsp; Jem/Jems/Emi</li>
                                            <li><span>Gender</span>&nbsp; Female</li>
                                            <li><span>Pronoun</span>&nbsp; She/Her </li>
                                            <li><span>Age</span>&nbsp; 21 years old</li>
                                            <li><span>Birthday</span>&nbsp; December 05, 1999</li>
                                            <li><span>Zodiac Sign</span>&nbsp; Sagittarius</li>
                                            <li><span>Location</span>&nbsp; Manila, Philippines</li>
                                            <li><span>Year Level</span>&nbsp; Junior College Year</li>
                                            <li><span>Program</span>&nbsp; Information Technology</li>
                                        </div>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <br><h6>Hobbies</h6>
                                        <p id="interest">reading manga, watching anime/japanese drama</p>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <br><h6>Likes</h6>
                                        <p id="interest">coffees, chocolates, dog, photography, fangirling</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- Second Column -->
                        <div class="col-lg-6 p-4">

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <br><h6>Social Media</h6>
                                        <p style="text-align: center;">
                                            <a href="facebook.com/jemimahpastera" data-toggle="tooltip" data-placement="auto" title="facebook"><i class="fa fa-fw fa-facebook fa-2x"></i></a> &nbsp;
                                            <a href="twitter.com/jemimahpastera" data-toggle="tooltip" data-placement="auto" title="twitter"><i class="fa fa-fw fa-twitter fa-2x"></i></a> &nbsp;
                                            <a href="instagram.com/jemimahpastera" data-toggle="tooltip" data-placement="auto" title="instagram"><i class="fa fa-fw fa-instagram fa-2x"></i></a> &nbsp;
                                            <a href="saishiki.tumblr.com" data-toggle="tooltip" data-placement="auto" title="tumblr"><i class="fa fa-fw fa-tumblr fa-2x"></i></a> &nbsp;
                                            <a href="pinterest.com/jemimahpastera/" data-toggle="tooltip" data-placement="auto" title="pinterest"><i class="fa fa-fw fa-pinterest fa-2x"></i></a> &nbsp;
                                            <a href="open.spotify.com/user/jmmhstyls" data-toggle="tooltip" data-placement="auto" title="spotify"><i class="fa fa-fw fa-spotify fa-2x"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <br><h6>Software Skills</h6>
                                        <div id="column">
                                            <li><div id="current" style="color: #2C3739;">Microsoft Word</div><div id="skills" style="width: 93%;"></div></li>
                                            <li><div id="current" style="color: #2C3739;">Microsoft PowerPoint</div><div id="skills" style="width: 83%;"></div></li>
                                            <li><div id="current" style="color: #2C3739;">Photoshop</div><div id="skills" style="width: 53%;"></div></li>
                                            <li><div id="current" style="color: #2C3739;">Illustrator</div><div id="skills" style="width: 67%;"></div></li>
                                        </div>
                                    </div>
                                </div>
                            </div><br>

                            <!-- Second Row -->
                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <br><h6>Programming Skills</h6>
                                        <div id="column">
                                            <li ><div id="current" style="color: #2C3739;">HTML</div><div id="skills" style="width: 100%;"></div></li>
                                            <li><div id="current" style="color: #2C3739;">CSS</div><div id="skills" style="width: 93%;"></div></li>
                                            <li><div id="current" style="color: #2C3739;">JavaScript</div><div id="skills" style="width: 30%;"></div></li>
                                            <li><div id="current" style="color: #2C3739;">SQL</div><div id="skills" style="width: 87%;"></div></li>
                                            <li><div id="current"t style="color: #2C3739;">C#</div><div id="skills" style="width: 73%;"></div></li>
                                            <li><div id="current" style="color: #2C3739;">Bootstrap</div><div id="skills" style="width: 67%;"></div></li>
                                        </div>
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