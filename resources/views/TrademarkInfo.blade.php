@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Details of the <b>{{$name}} </b> trademark
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                            </div>
                        @endif

                        <b>Category</b> : {{$info['Category']}}
                        <br><br>

                        <b> Owner Name</b> : {{$info['OwnerName']}}
                        <br><br>

                        <b>Owner Email</b> : {{$info['OwnerEmail']}}
                        <br><br>

                        <b>Registration Date</b> : {{$info['RegistrationDate']}}
                        <br><br>

                        <b>Expiration Date</b> : {{$info['ExpirationDate']}}
                        <br><br>

                        <b>Owner Information</b> : {{$info['OwnerInformation']}}
                        <br><br>

                        <b> Other Information</b> : {{$info['OtherInformation']}}


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
