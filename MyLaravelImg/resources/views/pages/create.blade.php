@extends('layouts.main-layout')
@section('content')

    <h2>CREATE POSTCARD</h2>

    <form 
        action="{{ route('postcard.store') }}" 
        method="POST"
        enctype="multipart/form-data">

        @method('POST')
        @csrf

        <label for="sender">Sender</label><br>
        <input type="text" name="sender"><br> 
        <label for="text">Text</label><br>
        <input type="text" name="text"><br> 
        <label for="address">Address</label><br>
        <input type="text" name="address"><br><br>
        <input type="file" name="img"><br>
        <br>
        <input type="submit" value="CREATE">
    </form>
@endsection