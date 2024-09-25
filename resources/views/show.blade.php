@extends('layouts.app')

@section('content')

@if (Session::has('delete'))
        <div class="alert alert-danger text-center fs-1">Deleted</div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>Hello  {{ Auth::user()->name }}, i hope you have a good day.</h1>

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-center text-info mt-3">YOUR REQUEST NUMBER <span>{{$drive->id}}</span></h1>
    <div class="container col-md-7">

        <div class="card" style="width:100%;">
            <div class="card-body text-center">
              <h5 class="card-title text-center fs-5">Name : {{$drive->name}}</h5>
              <h6 class="card-subtitle my-2 text-muted fs-5">{{$drive->number}}</h6>
              <h6 class="card-subtitle my-2 text-muted fs-5">{{$drive->email}}</h6>
              <p class="card-text fs-5">Message : {{$drive->message}}</p>
              <a class="btn btn-outline-info fs-5" href="{{route('admin')}}" >Back</a>
            </div>
          </div>
    </div>
@endsection
