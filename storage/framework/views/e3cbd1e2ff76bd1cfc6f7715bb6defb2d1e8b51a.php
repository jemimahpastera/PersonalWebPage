

<?php $__env->startSection('title'); ?>
    <title><?php echo e($title); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>
                /* Font */
                @import  url('https://fonts.googleapis.com/css2?family=Jost:ital@0;1&family=Playfair+Display:ital,wght@1,500&family=Poppins&display=swap');

/* Scrollbar */
::-webkit-scrollbar {
    border: 28px solid #f9fafa;
    width: 28px;
}
::-webkit-scrollbar-track { background-color: #f9fafa; }
::-webkit-scrollbar-thumb {
    background: #6498A6; 
    border: 10px solid #f9fafa;
    border-radius: 48px;
}
::-webkit-scrollbar-thumb:hover { background-color: #1C4E63; }

/* Body */
body {
    background-color: #f9fafa;
    color: #2C3739;
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    letter-spacing: 1px;
    line-height: 24px;
    text-align: center;
}

/* Link */
a {
    color: #6498A6;
    transition: color .5s linear;
}

/* Hovers */
a:hover, .fa:hover {
    color: #2C3739;
    cursor: url(https://static.tumblr.com/p7wg3p9/EWnmn8ip5/tinyhover.png), auto !important;
    font-weight: 700;
    text-decoration: none;
}

/* Cursor */
body, a, html { cursor: url(https://static.tumblr.com/p7wg3p9/o3jmn8igq/tiny.png), auto !important; }

/* Headings */
h1, h4 { color: #1C4E63; }
h1 {
    font-family: 'Playfair Display', serif;
    letter-spacing: 10px;
}
h4 {
    letter-spacing: 2px;
    line-height: 28px;
}
h4, quote { font-size: 16px; }
quote {
    color: #6498A6;
    font-family: 'Jost', sans-serif;
    font-style: italic;
    letter-spacing: 3px;
    line-height: 32px;
}
h6, ch {
    color: #6498A6;
    letter-spacing: 2px;
    text-transform: uppercase;
}
h6 { padding: 0px !important; }

/* List */
li {
    list-style-type: none;
    padding: 10px;
}

/* Icons */
.fa { color: #6498A6; }

/* Tooltip */
.arrow { display: none !important; }
.tooltip.show { opacity: 1; }
.tooltip-inner {
    background-color: #fefefe;
    border: 2px solid #ecedef;
    border-radius: 5px;
    color: #6498A6;
    font-family: 'Poppins', sans-serif;
    font-size: 10px;
    letter-spacing: 2px;
    opacity: 1;
    padding: 8px;
}

/* Container */
#container {
    background-color: #fefefe;
    border-radius: 5px;
    box-shadow: 3px 3px 7px #ecedef;
    height: 100%;
    width: 100%;
}
#container p, h4, quote, h6 { 
    margin-bottom: 0px;
    padding: 20px; 
}
#container img {
    border-radius: 5px;
    width: 100%;
}
#container span {
    background-color: #6498A6;
    border-radius: 5px;
    color: #fefefe;
    padding: 7px;
}
#container .fa { line-height: 50px; }

#content { margin-top: 35px; }

/* Navigation  */
#navigation {
    font-size: 16px;
    line-height: 30px;
}
#navigation li {
    display: inline;
    line-height: 10px;
    padding: 20px;
}
#navigation .fa { display: none; }
#sidebar {
    position: relative;
    text-align: center;
    top: 120px;
    z-index: 9;
}
#icon {
    background-color: transparent;
    border: 1px solid #2C3739;
    border-radius: 50%;
    float: right;
    height: 100px;
    left: 45%;
    margin-top: -250px;
    padding: 7px;
    position: absolute;
    width: 100px;
}
#icon img {
    border-radius: 50%;
    width: 100%;
}

/* Responsive Design */
@media  screen and (max-width: 992px) { #icon { left: 41%; } }
@media  screen and (max-width: 768px) {
    #icon {
        left: 38%;
        margin-top: -280px;
    }
}
@media  screen and (max-width: 550px) { #icon { margin-top: -280px; } }
@media  screen and (max-width: 490px) { #icon { margin-top: -327px; } }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container p-5">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div id="content">

                    <div class="row">
                        <div class="col-lg">
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
                            </div>
                        </div>
                    </div><br><br><br><br><br>

                    <div class="row">
                        <div class="col-lg-6 p-4">

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <h4>Welcome to My Personal Homepage.</h4>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <p>
                                            <quote>〝 A painting that cuts off daily life<br>
                                                When will it be thought of as a masterpiece?<br>
                                                If you think such a landscape is a fantasy<br>
                                                You see, to the sky where the everyday life begins to shine 〞</quote></p>
                                    </div>
                                </div>
                            </div><br>

                        </div>
            
                        <div class="col-lg-6 p-4">

                            <div class="row">
                                <div class="col-lg">
                                    <div id="container">
                                        <br><h6>Currently</h6>
                                        <div style="text-align: justify; padding: 20px; line-height: 22px;">
                                            <li><ch>Reading:</ch>&nbsp; There’s Someone Inside Your House <i>by Stephanie Perkins</i> </li>
                                            <li><ch>Watching:</ch>&nbsp; Black School Rules <i>(NTV Series | 2019)</i> & Dekke Furoba de Mattemasu <i>(2021)</i></li>
                                            <li><ch>Listening:</ch>&nbsp; Mr. Perfectly Fine <i>by Taylor Swift</i></li>
                                            <li><ch>Studying:</ch>&nbsp; Codes and Japanese Language </li>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\PasteraPersonalWebPage\resources\views/pages/home.blade.php ENDPATH**/ ?>