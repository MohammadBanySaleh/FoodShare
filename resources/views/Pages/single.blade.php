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
                                <img src="{{ asset($singleDonation->image) }}" class="news-image img-fluid col-lg-12"
                                    style="max-height: 400px">

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
                            </div><br>
                            
                            <div class="news-block-body">
                                <p>{{ $singleDonation->description }}</p>
                            </div>

                            @if ($singleDonation->category_id == 2)
                                <span style="color: red">* In food donation, we approve at least 5 meals.</span><br><br>
                            @endif
                            <h5 class="mb-3">{{ $singleDonation->price }} JOD</h5>

                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <a href="{{ route('things.show', ['id' => $singleDonation->id]) }}">
                                    <div class="plans"><img src="{{ asset('images/fooddonate.png') }}"
                                            style="height: 45px; width: 45px;"><br>
                                        <h6 class="pt-2"><a
                                                href="{{ route('things.show', ['id' => $singleDonation->id]) }}"><span
                                                    style="color:#5c5c5c;"><strong>Food Donation
                                                    </strong></span></a></h6>
                                    </div>
                                </a>

                                {{-- Auth()->user()->id --}}
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <a href="{{ route('money.show', ['id' => $singleDonation->id]) }}">
                                    <div class="plans"><img src="{{ asset('images/moneydonate.png') }}"
                                            style="height: 45px; width: 45px;"><br>
                                        <h6 class="pt-2"><a
                                                href="{{ route('money.show', ['id' => $singleDonation->id]) }}"><span
                                                    style="color:#5c5c5c;"><strong>Money Donation
                                                    </strong></span></a></h6>
                                    </div>
                                </a>
                            </div>


                        </div>
                    </div>



                </div>
                <br><br>

            </div>
        </section>

    </main>
@endsection
