@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Q & A') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5>
                            1- How to register new trademarks?
                        </h5>

                        <p>
                            A trademark name should be unique within the same category. However, the same trademark name
                            can be used for a different category.
                        </p>
                        <br>
                        <h5>
                            2- How can I register a new trademark?
                        </h5>

                        <p>
                            You have to create an account or log in if you already have an account. Then at the homepage,
                            click "Register a New Trademark."
                            You will be asked to fill a form to provide some details. Only registered users can register,
                            Once you submit the form, you will be redirected
                            to the homepage again. At the home page, you will get a message at the top stating whether your
                            registration was successful or not.

                        </p>
                        <br>
                        <h5>
                            3- How do I search for a trademark?
                        </h5>

                        <p>
                            You do not need to log in to search for trademarks. At the home page, click "Search the
                            Database."
                            You will be asked to provide the name of the trademark and select the category, as multiple
                            trademarks can exist
                            but within different categories. You can also choose to list the names of all the trademarks
                            within a given category.
                            Once you submit your preference, you will be redirected to a new page showing the results of
                            your query.
                        </p>

                            <br>
                            <h5>
                                4- Where can a registered user find a list of their trademarks?
                            </h5>

                            <p>
                                At the top right corner of the homepage,
                                there are two options, the "Q & A" page and the  "My Trademarks" page.
                            </p>

                    </div>
                </div>
                <form method="get" action="{{url('/')}}" enctype="multipart/form-data">
                    @csrf
                    <button style="background:green; color:white; padding: 5px 5px;" type="submit" class="button button1">
                    <span> Back to Homepage</span>
                    </button>
                </form>
            </div>

        </div>
    </div>
@endsection
