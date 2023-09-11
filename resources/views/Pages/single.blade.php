@if (session('success'))
    <div id="vola_message" class="alert alert-primary">{{ session('success') }}</div>
@endif
@extends('Layout.master')
@section('content')


    <main>

        <section class="news-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <img src="{{ asset('images/single.jpg') }}"
                                    class="news-image img-fluid col-lg-12" >

                                <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        You can help turn hunger into hope!
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mx-auto mt-4 mt-lg-0">
                        <div class="news-block-info">


                                <div class="news-block-title mb-2">
                                    <h4>{{ $singleDonation->name }}</h4>
                                </div>

                                <div class="news-block-body">
                                    <p>{{ $singleDonation->description }}</p>
                                </div>

                                <h5 class="mb-3">{{ $singleDonation->price }} JOD</h5>

                            </div>
                    </div>

                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="plans"><img src="{{ asset($singleDonation->image) }}" style="height: 45px; width: 45px;"><br>
                            <h6 class="pt-2"><a href="{{ route('things.show', ['id' => $singleDonation->id]) }}" target="_blank"><span style="color:#5c5c5c;"><strong>Food Donation </strong></span></a></h6>
                        </div>
                        {{-- Auth()->user()->id --}}
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="plans"><img src="{{ asset($singleDonation->image) }}" style="height: 45px; width: 45px;"><br>
                            <h6 class="pt-2"><a href="{{ route('money.show', ['id' => $singleDonation->id]) }}" target="_blank"><span style="color:#5c5c5c;"><strong>Money Donation </strong></span></a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
