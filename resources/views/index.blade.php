@extends('layouts.app')
@section('content')


@if (session()->has('message'))
        <div>
            <h2 class="bg-success">
                {{ session()->get('message') }}
            </h2>
        </div>
    @endif

    
@endsection
