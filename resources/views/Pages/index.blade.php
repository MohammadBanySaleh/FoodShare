@extends('Layout.master')
@section('content')
    {{-- {{ auth()->user()->name; }} --}}
    <main>
        @if (session('message'))
            <div id="vola_message" class="alert alert-primary">{{ session('message') }}</div>
        @endif
        @if (session('success'))
            <div id="vola_message" class="alert alert-primary">{{ session('success') }}</div>
        @endif

        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/slide/s1.png" class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>be a Kind Heart</h1>

                                        <p>You can help turn hunger into hope!
                                        </p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images/slide/jordan-donation.jpg" class="carousel-image img-fluid"
                                        alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Non-profit</h1>

                                        <p>You can support us to grow more</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images/slide/3.jpg" class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Humanity</h1>

                                        <p>Please tell your friends about our website</p>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Welcome to FoodSHare</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="#becomeVol" class="d-block">
                                <img src="images/icons/hands.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">Become a <strong>volunteer</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="#ourStory" class="d-block">
                                <img src="images/icons/heart.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">Our<strong> Story </strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="#causes" class="d-block">
                                <img src="images/icons/receive.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">Make a <strong>Donation</strong></p>
                            </a>
                        </div>
                    </div>

                    {{-- <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="images/icons/scholarship.png" class="featured-block-image img-fluid"
                                    alt="">

                                <p class="featured-block-text"><strong>Scholarship</strong> Program</p>
                            </a>
                        </div>
                    </div> --}}

                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4" id="causes">
                        <h2>Our Programs</h2>
                    </div>
                    @foreach ($categories as $item)
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 ">
                            <div class="custom-block-wrap categorycard">
                                <img src="{{ $item->image }}" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">{{ $item->name }}</h5>

                                        <p class="description">{{ $item->description }}</p>


                                    </div>

                                    <a href="{{ route('subcategory', $item->id) }}"
                                        class="custom-btn btn categorybtn">Donate now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">

                    {{-- <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="images/group-people-volunteering-foodbank-poor-people.jpg"
                            class="custom-text-box-image img-fluid" alt="">
                    </div > --}}

                    <div class="col-lg-6 col-12 mb-lg-0" style="margin-top:5%">
                        <section class="hero hero-section container">
                            <div>
                                <video autoplay loop muted plays-inline style="width: 100%;">
                                    <source
                                        src="{{ asset('images\FoodShare_virtual_tour_FoodShare_HQ_online-video-cutter.com.mp4') }}"
                                        type="video/mp4">
                                </video>
                            </div>

                        </section>

                    </div>

                    <div class="col-lg-6 col-12" id="ourStory">
                        <div class="custom-text-box">
                            <h2 class="mb-2">Our Story</h2>

                            <h5 class="mb-3">FoodSHare, Non-Profit Organization</h5>

                            <p class="mb-0">At FoodSHare we save good quality, surplus food from going to waste. If you
                                find that you have surplus food which is still edible, consider redistributing it to people
                                in need.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="custom-text-box mb-lg-0">
                                    <h5 class="mb-3">Our Mission</h5>

                                    <p>Our mission is to ensure that everyone has access to healthy and nutritious food.</p>


                                </div>
                            </div>

                            {{-- <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                    <div class="counter-thumb">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="2009"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text">Founded</span>
                                    </div>

                                    <div class="counter-thumb mt-4">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="120"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text">B</span>
                                        </div>

                                        <span class="counter-text">Donations</span>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                </div><br><br><br>
                <div class="row">
                    <section class="section section-default mt-none mb-none">
                        <div class="container">
                            <h2 id="test5">Our <strong>Partners</strong></h2>
                            <strong>
                                <div class="row">
                                    @foreach ($partners as $item)
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="square-holder">
                                                <img class="partners_images" alt="" src="{{ $item->image }}" />
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </strong>
                        </div>
                    </section>

                </div>
            </div>
        </section>


        {{-- <section class="about-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <img src="images/portrait-volunteer-who-organized-donations-charity.jpg"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0">Sandy Chan</h2>

                            <p class="text-muted mb-lg-4 mb-md-4">Founding Partner</p>

                            <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional
                                charity theme based</p>

                            <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus</p>

                            <ul class="social-icon mt-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}

        <section class="cta-section section-padding section-bg">
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-5 col-12 ms-auto">
                        <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
                    </div>

                    <div class="col-lg-5 col-12">
                        <a href="#causes" class="me-4">Make a donation</a>

                        <a href="#becomeVol" class="custom-btn btn smoothscroll">Become a volunteer</a>
                    </div>

                </div>
            </div>
        </section>




        <section class="volunteer-section section-padding" id="becomeVol">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-4">Volunteer</h2>

                        <form class="custom-form volunteer-form mb-5 mb-lg-0" action="{{ url('save_volanteer') }}"
                            method="post" role="form">
                            @csrf
                            <h3 class="mb-4">Become a volunteer today</h3>

                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="name" id="volunteer-name" class="form-control"
                                        placeholder="Full Name" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="email" id="volunteer-email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="text" name="mobile" id="volunteer-subject" pattern="07\d{8,}"
                                        title="The mobile number should start with 07, and should be at least 10 numbers"
                                        class="form-control" placeholder="Phone number" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    {{-- <div class="input-group input-group-file">
                                        <input type="file" class="form-control" id="inputGroupFile02">

                                        <label class="input-group-text" for="inputGroupFile02">Upload your CV</label>

                                        <i class="bi-cloud-arrow-up ms-auto"></i>
                                    </div> --}}
                                    {{-- <label>Select Job</label> --}}
                                    <select name="job" class="form-control">
                                        <option value="" disabled selected>Select Job</option>
                                        @foreach ($jobs as $item)
                                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <textarea name="comments" rows="3" class="form-control" id="volunteer-message"
                                placeholder="Comment (Optional)"></textarea>

                            <button type="submit" class="form-control">Submit</button>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12">
                        <img src="images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg"
                            class="volunteer-image img-fluid" alt="">

                        <div class="custom-block-body text-center">
                            <h4 class="text-white mt-lg-3 mb-lg-3">About Volunteering</h4>

                            <p class="text-white">Volunteering can help you make friends, learn new skills, advance your
                                career, and even feel happier and healthier. Learn how to find the right volunteer
                                opportunity for you.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- <section class="testimonial-section section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="mb-lg-3">Happy customers</h2>

                        <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing
                                            kengan omeg kohm tokito charity theme</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Maria</span>,
                                            Boss</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor
                                            mauris quis metus tempor orci</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Thomas</span>,
                                            Partner</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Lorem Ipsum dolor sit amet, consectetur adipsicing
                                            kengan omeg kohm tokito charity theme</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Jane</span>,
                                            Advisor</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Sed leo nisl, posuere at molestie ac, suscipit auctor
                                            mauris quis metus tempor orci</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Bob</span>,
                                            Entreprenuer</small>
                                    </div>
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                        <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                        <img src="images/avatar/portrait-young-redhead-bearded-male.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                        <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                        <img src="images/avatar/studio-portrait-emotional-happy-funny.jpg"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}



    </main>
@endsection
