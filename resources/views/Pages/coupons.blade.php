@if (session('success'))
    <div id="vola_message" class="alert alert-primary">{{ session('success') }}</div>
@endif
@extends('Layout.master')
@section('content')
<ul>
    <a href="{{ url('/') }}">Home /</a>
    <a href="{{ URL::current() }}">
      {{-- @php $categoryNameDisplayed = false; @endphp
    
      @foreach ($donations as $donation)
          @if (!$categoryNameDisplayed)
              {{ $donation->category->name }}
              @php $categoryNameDisplayed = true; @endphp
          @endif
      @endforeach  --}}
    </a>
    </ul>
    <main>

        <section class="news-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <img src="{{ asset($singleDonation->image) }}"
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
                    {{-- <div class="col-12 col-md-6 col-sm-12 col-xs-12"> --}}
                        <div class="plans"><img src="{{ asset('images/moneydonate.png') }}" style="height: 45px; width: 45px;"><br>
                            <h6 class="pt-2"><a href="{{ route('money.show', ['id' => $singleDonation->id]) }}" target="_blank"><span style="color:#5c5c5c;"><strong>Donate</strong></span></a></h6>
                        </div>
                    {{-- </div> --}}
                </div>
            </div>
        </section>

    </main>

@endsection
