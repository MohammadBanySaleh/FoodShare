{{-- التبرع العيني --}}

@extends('Layout.master')
@section('content')
    <main>

        <section class="donate-section">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mx-auto">
                        <form class="custom-form donate-form" action="{{ route('other.store') }}" method="post" role="form">
                            @csrf
                            @method('post')
                            <h3 class="mb-4">Make a donation</h3>

                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-2 mb-3">Contents</h5>
                                </div>

                                <div class="col-lg-12 col-12 form-check-group">
                                    <div class="input-group">
                           

                                        <textarea type="text" class="form-control" placeholder="Describe what you have" aria-label="Username"
                                            aria-describedby="basic-addon1" name="description"></textarea>
                                    </div>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>

                                <div class="col-lg-12 col-12">
                                    <h5 class="mt-1">Personal Info</h5>
                                </div>

                                <div class="col-lg-6 col-12 mt-2">
                                    <label id="basic-addon1">Phone</label>
                                    <input type="text" name="donation-phone" id="donation-phone" class="form-control"
                                        placeholder="">
                                    @if ($errors->has('donation-phone'))
                                        <span class="text-danger">{{ $errors->first('donation-phone') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-12 mt-2">
                                    <label id="basic-addon1">Address</label>
                                    <input type="text" name="donation-address" id="donation-address" class="form-control"
                                        placeholder="">
                                    @if ($errors->has('donation-address'))
                                        <span class="text-danger">{{ $errors->first('donation-address') }}</span>
                                    @endif
                                </div>


                                <button type="submit" class="form-control mt-4" name="submit">Submit Donation</button>
                            </div>
                    </div>
                    </form>
                </div>

            </div>
            </div>
        </section>
    </main>
@endsection
