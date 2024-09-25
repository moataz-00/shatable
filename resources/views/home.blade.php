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

    <h1 class="text-center text-info mt-3">YOUR REQUESTS</h1>
    <div class="container col-md-6">

        <div class="card">
            <div class="card-body">

                    <input  id="myInput" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    

                <table id="myTable" class="table table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Name</th>

                        <th class="text-center" colspan="2">ACTION</th>
                    </tr>

                    @forelse ($drives as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>


                           <td class="text-center"> <a class="btn btn-outline-danger"href="{{ route('destroy', $item->id) }}">DELETE</a></td>
                           <td class="text-center"> <a class="btn btn-outline-info"href="{{ route('show', $item->id) }}">SHOW</a></td>



                        </tr>
                    @empty
                        <h1 class="text-info">NO DATA</h1>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
