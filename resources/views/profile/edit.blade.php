<x-app-layout>


    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>FoodSHare</title>

        <link href="css/style.css" rel="stylesheet" />
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://getbootstrap.com/docs/4.3/getting-started/download/">
        <link href="{{ asset('messages-style.css') }}" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">

        <link href="{{ asset('css/partners.css') }}" rel="stylesheet">


        <link href="css/responsive.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://fontawesome.com/icons/link?f=classic&s=solid">
    </head>

    <body id="section_1">


        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" class="logo img-fluid" alt="Kind Heart Charity">
                    <span>
                        FoodSHare
                        <small>Non-profit Organization</small>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ url('/#ourStory') }}">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ url('/#becomeVol') }}">Volunteer</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ url('contact-us') }}">Contact</a>
                        </li>
                        @if (auth()->check())
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="margin-top: 10px">
                                    {{-- <img  src="{{asset('images/profile-uesr.png')}}" alt="" style="width: 100px;"> --}}
                                    <svg viewBox="-1.6 -1.6 19.20 19.20" xmlns="http://www.w3.org/2000/svg"
                                        fill="#000000" style="width:30px">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="m 8 1 c -1.65625 0 -3 1.34375 -3 3 s 1.34375 3 3 3 s 3 -1.34375 3 -3 s -1.34375 -3 -3 -3 z m -1.5 7 c -2.492188 0 -4.5 2.007812 -4.5 4.5 v 0.5 c 0 1.109375 0.890625 2 2 2 h 8 c 1.109375 0 2 -0.890625 2 -2 v -0.5 c 0 -2.492188 -2.007812 -4.5 -4.5 -4.5 z m 0 0"
                                                fill="#5bc1ac"></path>
                                        </g>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('profile') }}">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{url('dashboard')}}">Your donations</a></li>
                                    <li><a class="dropdown-item" href="#">Chat</a></li>
                                    <li><a class="dropdown-item nav-link custom-btn custom-border-btn btn"
                                            style="height: 40px; width:120px; margin:0 15px 15px 15px"
                                            href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </div>
                        @else
                            <li class="nav-item ms-3">
                                <a class="nav-link custom-btn custom-border-btn btn"
                                    href="{{ url('login') }}">Login</a>
                            </li>
                        @endif



                    </ul>
                </div>
            </div>
        </nav>







        {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}
        {{-- @extends('layout.master') --}}
        {{-- @section('content') --}}
        <br><br><br>
        <div class="py-12 container">
            <div class="max-w-7xl mx-auto row">
                <div class="col-md-6" > <!-- This div will take up 6 columns (half the width) on medium-sized screens and larger -->
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" style="height: 417px !important;">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>
                <div class="col-md-6"> <!-- This div will take up 6 columns (half the width) on medium-sized screens and larger -->
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>
                <div class="col-md-12"> <!-- This div will take up 12 columns (full width) on medium-sized screens and larger -->
                    <hr>
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 mb-4">
                        <img src="{{ asset('images/logo.png') }}" class="logo img-fluid" alt="">
                        <a class="navbar-brand">
                            <span>
                                FoodSHare
                                <small>Non-profit Organization</small>
                            </span>
                        </a>
                        <br><br><br>
                        <h5 style="color: white">You can help turn hunger <br> into hope!</h5>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <h5 class="site-footer-title mb-3">Quick Links</h5>

                        <ul class="footer-menu d-flex flex-column">
                            <li class="footer-menu-item"><a href="#ourStory" class="footer-menu-link">Our Story</a>
                            </li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <h5 class="site-footer-title mb-3">Volunteer now</h5>

                        <ul class="footer-menu">

                            <li class="footer-menu-item"><a href="{{ url('/#becomeVol') }}"
                                    class="footer-menu-link">Become a volunteer <br>
                                    Partner with us
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 col-12 mx-auto">
                        <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                        <p class="text-white d-flex mb-2">
                            <i class="bi-telephone me-2"></i>

                            <a href="tel: 305-240-9671" class="site-footer-link">
                                +962 7 9987 6142
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                donate@gmail.com
                            </a>
                        </p>

                        <p class="text-white d-flex mt-3">
                            <i class="bi-geo-alt me-2"></i>
                            Irbid, Jordan
                        </p>

                        <a href="{{ url('contact-us') }}" class="custom-btn btn mt-3">Contact Us</a>
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-7 col-12">
                            <p class="copyright-text ">Copyright © 2036 <a href="#">FoodSHare</a>
                            </p>
                        </div>

                        <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-linkedin"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href=" class="social-icon-link bi-youtube"></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->

        {{-- <script src="{{ asset('js/session-messages.js') }}"></script> --}}
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/counter.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/donation.js') }}"></script>
        {{-- <script src="{{ asset('js/partners.js') }}"></script> --}}

        <script>
            $(document).ready(function() {
                // Check if the success message is present
                var successMessage = $('#vola_message');

                if (successMessage.length) {
                    // Hide the success message after 5 seconds
                    setTimeout(function() {
                        successMessage.fadeOut('slow');
                    }, 5000);
                }
            });
        </script>

    </body>

    </html>

    {{-- @endsection --}}
</x-app-layout>
