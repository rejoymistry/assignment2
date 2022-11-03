@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> You have <b>{{$count}}</b> registered trademarks
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                            </div>
                        @endif

                        <ul>
                            @foreach($trademarks as $tm)
                                <li>{{$tm}}</li>
                            @endforeach
                            <br>
                            <br> <br>
                        </ul>
                    </div>
                </div>
                <form method="get" action="{{url('/')}}" enctype="multipart/form-data">
                    @csrf
                    <button style="background:green; color:white; padding: 5px 5px;" type="submit"
                            class="button button1">
                        <span>Back to Homepage</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
