<?php 
use App\Models\UserDonation;
?>





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
        <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">



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
                                    <li><a class="dropdown-item" href="#">Your donations</a></li>
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
            {{ __('Your Donation') }}
        </h2>
    </x-slot> --}}
    <br><br><br>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php
                    $count = DB::table('user_donations')->count();
                    @endphp

                    @if ($count > 0)
                        <div class="container">
                            {{-- <h1>Donations for {{ auth()->user()->name }}</h1> --}}
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="padding: 20px">NAME</th>
                                        <th style="padding: 20px">Description</th>
                                        <th style="padding: 20px">Price</th>
                                        <th style="padding: 20px">Quantity</th>
                                        <th style="padding: 20px">Total</th>
                                        {{-- <th style="padding: 20px">image</th> --}}
                                        <!-- Add more columns if needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    
                                    $user_id = auth()->user()->id;
                                    $test = UserDonation::where('user_id', $user_id)->get();
                                    ?>
                                    @foreach ($test as $donation)
                                        <tr>
                                            <td>{{ $donation->donation->name }}</td>
                                            <td>{{ $donation->donation->description }}</td>
                                            <td>{{ $donation->donation->price }} JOD</td>
                                            <td>{{ $donation->quantity }}</td>
                                            <td>{{ $donation->donation->price*$donation->quantity }} JOD</td>
                                            {{-- <td>{{ $donation->donation->image }}</td> --}}
                                            <!-- Add more columns if needed -->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('certificate.download') }}" style="background-color: #5bc1ac; border: none;" class="btn btn-primary">Download Your Donation</a>
                            <br><br>
                        </div>
                    @else
                    <h4 class="text-center" style="color: #5bc1ac">"You don't make anu Donation yet, consider making a contribution!"</h4 class="text-center"><br>
                    <center><a href="{{ url('/#causes') }}" style="background-color: #5bc1ac; border: none;" class="btn btn-primary">Donate Now</a></center><br>
                    @endif
                </div>
            </div>
        </div>
    </div>


    {{-- starrtt --}}
    <!-- resources/views/user/profile.blade.php -->







    {{-- endd --}}
</x-app-layout>
