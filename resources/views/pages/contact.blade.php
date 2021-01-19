@extends('layouts.app')

@section('content')
    <section class="page_banner">
        <div class="container">
            <div class="col-xl-12 text-center">
                <h2></h2>
                <div class="breadcrumbs">
                    <a href="index.html">Acasa</a><i>|</i><span>Conctacteaza-ne</span>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection pdb90">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-5">
                    <div class="icon_box_05 ib5_left">
                        <i class="fal fa-map-marker-alt"></i>
                        <div class="ib5_inner">
                            <h3>Office Location</h3>
                            <p>
                                475/W 13th Street, Cooper <br>New York, United States
                            </p>
                            <a href="#">Find Us On Map</a>
                        </div>
                    </div>
                    <div class="icon_box_05 ib5_left">
                        <i class="fal fa-clock"></i>
                        <div class="ib5_inner">
                            <h3>Office Hours</h3>
                            <p>
                                Mon - Fri: 09:00am to 07.00pm <span>Sat - Sun: Off Day</span>
                            </p>
                            <a href="#">Get Directions</a>
                        </div>
                    </div>
                    <div class="icon_box_05 ib5_left">
                        <i class="fal fa-headset"></i>
                        <div class="ib5_inner">
                            <h3>Quick Contact</h3>
                            <p>
                                +909 797 6896 <br>info@webmail.com
                            </p>
                            <a href="#">Call Or Mail</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-6 col-lg-7 pdl45">
                    <div class="row">
                        <div class="col-xl-12 text-left">
                            <h6 class="sub_title dark_sub_title ">Get In Touch</h6>
                            <h2 class="sec_title mb45">
                                <span>Contact Form</span>
                            </h2>
                        </div>
                    </div>
                    <div class="contactForm light_form">
                        <form id="contactForm" method="post" action="#" class="row">
                            <div class="col-lg-12">
                                <div class="iconInput">
                                    <input class="required" type="text" name="con_name" id="con_name" placeholder="ENTER YOUR NAME HERE">
                                    <i class="fal fa-user"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="iconInput">
                                    <input class="required" type="text" name="con_phone" id="con_phone" placeholder="ENTER YOUR NUMBER HERE">
                                    <i class="fal fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="iconInput">
                                    <input class="required" type="text" name="con_email" id="con_email" placeholder="ENTER YOUR EMAIL HERE">
                                    <i class="fal fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="iconInput">
                                    <textarea class="required" name="con_message" id="con_message" placeholder="ENTER YOUR MESSAGE HERE"></textarea>
                                    <i class="fal fa-pencil-alt"></i>
                                </div>
                            </div>
                            <div class="col-xl-12 text-center">
                                <button href="#" class="button btn-primary"><span>Get a Quote</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
