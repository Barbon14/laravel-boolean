@extends('layouts.main-layout')

@section('content')

    <form 
    enctype="multipart/form-data" 
    action="" 
    method="POST">

        @method('POST')
        @csrf

        <label for="sender">Sender</label> <br>
        <input type="text" name="sender"> <br>

        <label for="address">Address</label> <br>
        <input type="text" name="address"> <br>

        <label for="text">Text</label> <br>
        <textarea name="text" cols="30" rows="10"></textarea> <br>
        
        <label for="image">Image</label> <br>
        <input type="file" name="image"> <br>

        <br>
        <input type="submit" value="Create">

    </form>

    <a href="{{ route('home') }}">BACK</a>
@endsection