@extends('layouts.main-layout')
@section('content')

    <a class="btn btn-secondary" href="{{ route('postcard.create') }}">CREATE POSTCARD</a>
    
    <postcard-components></postcard-components>
@endsection