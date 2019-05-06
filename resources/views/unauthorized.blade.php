@extends('layout')

@section('title','Unauthorized')

@section('name')

<h1>Hi {{$user->name}}</h1>

@endsection

@section('content')

<h2>Unfortunately you dont have access to this page. Write to X to solve it.</h1>

@endsection