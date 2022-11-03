@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Search for a specific trademark') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/search') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="trademarkName"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Trademark Name') }}</label>

                                <div class="col-md-6">
                                    <input id="trademarkName" type="text"
                                           class="form-control @error('trademarkName') is-invalid @enderror"
                                           name="trademarkName"
                                           value="{{ old('trademarkName') }}" required autocomplete="trademarkName"
                                           autofocus>

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
                                    <select id="trademarkCategory" type="text"
                                            class="form-control @error('category') is-invalid @enderror" name="category"
                                            value="{{ old('category') }}" required autocomplete="category" autofocus>

                                        <!--iterate over the options-->
                                        @foreach($list as $option)
                                            <option value="{{$option}}">{{$option}}</option>
                                        @endforeach
                                        <br>

                                    </select>

                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Search') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-header">{{ __('List the trademarks of the selected category') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/listbycategory') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="category"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Trademark Category') }}</label>

                                <div class="col-md-6">
                                    <select id="trademarkCategory" type="text"
                                            class="form-control @error('category') is-invalid @enderror" name="category"
                                            value="{{ old('category') }}" required autocomplete="category" autofocus>

                                        @foreach($list as $option)
                                            <option value="{{$option}}">{{$option}}</option>
                                        @endforeach
                                        <br>
                                    </select>

                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        &nbsp;&nbsp; &nbsp;{{ __('List') }}&nbsp;&nbsp;&nbsp;
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-header">{{ __('List the trademarks of a specific owner') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/listbyowner') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="ownerName"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Owner Name') }}</label>

                                <div class="col-md-6">
                                    <input id="ownerName" type="text"
                                           class="form-control @error('ownerName') is-invalid @enderror"
                                           name="ownerName"
                                           value="{{ old('ownerName') }}" required autocomplete="ownerName"
                                           autofocus>

                                    @error('ownerName')
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
                                    <select id="trademarkCategory" type="text"
                                            class="form-control @error('category') is-invalid @enderror" name="category"
                                            value="{{ old('category') }}" required autocomplete="category" autofocus>

                                        @foreach($list as $option)
                                            <option value="{{$option}}">{{$option}}</option>
                                        @endforeach
                                        <br>
                                    </select>

                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('List') }}
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
