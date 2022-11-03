@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Fill your trademark information') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/registerTrademark')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="trademarkName"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Trademark Name') }}</label>

                                <div class="col-md-6">
                                    <input id="trademarkName" type="text"
                                           class="form-control @error('trademarkName') is-invalid @enderror" name="trademarkName"
                                           value="{{ old('trademarkName') }}" required autocomplete="trademarkName" autofocus>

                                    @error('trademarkName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Trademark Category') }}</label>

                                <div class="col-md-6">
                                    <input id="trademarkCategory" type="text"
                                           class="form-control @error('category') is-invalid @enderror" name="category"
                                           value="{{ old('category') }}" required autocomplete="category" autofocus>

                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="expiration"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Expiration Date') }}</label>

                                <div class="col-md-6">
                                    <input id="expiration" type="date"
                                           class="form-control @error('expiration') is-invalid @enderror"
                                           name="expiration" value="{{ old('expiration') }}" required
                                           autocomplete="expiration">

                                    @error('expiration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="ownerInfo"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Owner Information') }}</label>

                                <div class="col-md-6">
                                    <input id="ownerInfo" type="text"
                                           class="form-control @error('ownerInfo') is-invalid @enderror" name="ownerInfo"
                                           value="{{ old('ownerInfo') }}" required autocomplete="ownerInfo" autofocus>

                                    @error('ownerInfo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="trademarkInfo"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Trademark Information') }}</label>

                                <div class="col-md-6">
                                    <input id="trademarkInfo" type="text"
                                           class="form-control @error('trademarkInfo') is-invalid @enderror" name="trademarkInfo"
                                           value="{{ old('trademarkInfo') }}" required autocomplete="trademarkInfo" autofocus>

                                    @error('trademarkInfo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
