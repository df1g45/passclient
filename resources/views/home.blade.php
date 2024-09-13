@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Timeline</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if(Auth::user()->token)
                    @if($tweets->count())
                    @foreach($tweets as $tweet)
                    <div
                        class="media mb-3">
                        <img
                            src="https://placehold.it/64x64"
                            class="mr-3"
                            alt="Generic placehold image" />
                        <div class="media-body">
                            <h5 class="mt-0">{{ $tweet->user->name }}</h5>
                            <p>
                                {{ $tweet->body }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    @else
                    Please <a href="{{url('/auth/passport')}}">authorize with Passport</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection