

<?php $__env->startSection('title'); ?>
    <title><?php echo e($title); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" >
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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

            <div class="col-lg">
                <div id="content">
                    
                    <!-- Title Page -->
                    <div class="row">
                        <div class="col-lg">
                            <div id="container">
                                <h4>This page is all about my favorites.</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="row">

                        <!-- First Column -->
                        <div class="col-lg p-4">

                            <div class="row">
                                <div class="col-md">
                                    <div id="container">
                                        <br><h6 style="letter-spacing: 5px;">Basic</h6><hr>
                                        <div style="padding: 13px; margin-top: -10px;">
                                            <table>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/0a/15/cd/0a15cdcbceda992dcf8fb77feedaab11.jpg"></td>
                                                    <td style="padding: 10px;">Pink and Green</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/af/e2/4a/afe24a98e1df5a2a9f2544d6e5305667.jpg"></td>
                                                    <td style="padding: 10px;">Number 7, 13, and 19</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/cb/5d/0f/cb5d0f818c05d9441b66cdd93620e851.jpg"></td>
                                                    <td style="padding: 10px;">Sunflower, and Forget-Me-Not</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/f7/60/c0/f760c092911cdd90e46d6d3efc6b1338.jpg"></td>
                                                    <td style="padding: 10px;">The world ain't all sunshine and rainbows</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md">
                                    <div id="container">
                                        <br><h6 style="letter-spacing: 5px;">Food</h6><hr>
                                        <div style="padding: 13px; margin-top: -10px;">
                                            <table>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/38/8c/d2/388cd26fb7cf9e864ba2808a48c31320.jpg"></td>
                                                    <td> Brownies, Chocolate and anything sweets</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/8e/5f/a9/8e5fa9b9cdadfcbc767e5ac92df14842.jpg"></td>
                                                    <td> Cold Coffee and Chai Tea</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/35/3a/22/353a220925abe982d99aa0b5fc9897f6.jpg"></td>
                                                    <td> Takoyaki and Cookies</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/16/0c/7e/160c7ef0b640b95672a431fc4717aacf.jpg"></td>
                                                    <td> Strawberry, Mango, and Melon</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/0e/41/0c/0e410ca6b0885819f25b575c392cfe41.jpg"></td>
                                                    <td> Chocolate Cake, Ice Cream and Mango Graham</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md">
                                    <div id="container">
                                        <br><h6 style="letter-spacing: 5px;">Places</h6><hr>
                                        <div style="padding: 13px; margin-top: -10px;">
                                            <table>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/35/54/51/3554515c342ee8a2fb37d4e0da0486a3.jpg"></td>
                                                    <td> Japan, United Kingdom</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/b2/62/4f/b2624fc47559765564a0072e86d267a1.jpg"></td>
                                                    <td> Universal Studio, Art Museum</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/cc/74/a2/cc74a251a622f344cab6e16591a2a4b9.jpg"></td>
                                                    <td> Papemelroti, Muji, and any stationery stores</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
            
                        <!-- Second Column -->
                        <div class="col-lg-6 p-4">

                            <div class="row">
                                <div class="col-md">
                                    <div id="container">
                                        <br><h6 style="letter-spacing: 5px;">Johnny's</h6><hr>
                                        <div style="padding: 13px; margin-top: -10px;">
                                            <table>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/5b/31/10/5b311046478c1e18c4f1a88dfaa4accd.jpg"></td>
                                                    <td style="padding: 10px;">平野紫耀 (Sho Hirano) and 佐藤勝利 (Shori Sato)</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/d3/26/bc/d326bc3f8cf2c0f7166079dad8e5b50d.jpg"></td>
                                                    <td style="padding: 10px;">King & Prince and Sexy Zone</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/d6/b3/0b/d6b30b2b5c99efac20f415f0b362d9ae.jpg"></td>
                                                    <td style="padding: 10px;">PAGES by Sexy Zone and POP x STEP?! by Sexy Zone</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/91/bb/83/91bb83b102a4141359861046fd3351e2.jpg"></td>
                                                    <td style="padding: 10px;">Memorial by King & Prince and イノセントデイズ (Innocent Days) by Sexy Zone</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/c6/0f/d8/c60fd85eb4dde6f19816ab18a6a0c3d7.jpg"></td>
                                                    <td style="padding: 10px;">Glass Flower by King & Prince and Twilight Sunset by Sexy Zone</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md">
                                    <div id="container">
                                        <br><h6 style="letter-spacing: 5px;">Media</h6><hr>
                                        <div style="padding: 13px; margin-top: -10px;">
                                            <table>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/21/5c/7d/215c7db738b3c90e98a850465cec7b36.jpg"></td>
                                                    <td> Studio Ghibli Films</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/06/b4/cb/06b4cb660bbfb08a438d6818fc99b409.jpg"></td>
                                                    <td> Miman Keisatsu: Midnight Runner (2020), アオハライド (Ao Haru Ride), and Orange Days (2004)</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/97/5a/a6/975aa6fe92f9dd7f1fabd4b53bc91a10.jpg"></td>
                                                    <td> Anna and the French Kiss by Stephanie Perkins</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/02/a4/66/02a466e3c9ef6aaac312c77d184845a6.jpg"></td>
                                                    <td> Cardcaptor Sakura and アオハライド (Ao Haru Ride)</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/7c/66/bd/7c66bd8c7ead5d86d34f8ea1d4827701.jpg"></td>
                                                    <td> Stephanie Perkins and Megumi Mizusawa</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/25/7c/95/257c95295bc9591cdda96e02c0aed8e0.jpg"></td>
                                                    <td> Taylor Swift and Harry Styles</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/c9/1d/27/c91d27e24075a1a845013c17ecd3f089.jpg"></td>
                                                    <td> Danielle Campbell and Lucas Grabeel</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 75px;"><img src="https://i.pinimg.com/564x/2a/45/c7/2a45c70e6fd80c3b5abbf151627e9350.jpg"></td>
                                                    <td> One Direction and 5 Seconds of Summer</td>
                                                </tr>
                                            </table>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\PasteraPersonalWebPage\resources\views/pages/favorites.blade.php ENDPATH**/ ?>