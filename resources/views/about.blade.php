@extends('layout/main')

@section('title', 'About Calvin')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
            <h1 class="mt-3">About {{$name}}.</h1>
            </div>
        </div>
    </div>
@endsection