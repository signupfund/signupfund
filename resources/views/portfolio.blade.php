@extends('layout')

@section('title','Portfolio')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">current portfolio {sign up to copy <a href="https://www.etoro.com/people/fujones/stats" target="_blank"> here}</a></div>

                <div class="card-body">


                    
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">asset breakdown</div>

                <div class="card-body">

                	<ul>
                		<img xxx>
                		

                    
                </div>
            </div>
        </div>
    </div>
</div>






	{{-- @foreach ($positions as $position)

		<div class="positionstable">

			<li>{{ $position->product_type }} {{ $position->asset_type }} {{ $position->product_name }} {{ $position->direction }}</li>

		</div>

	@endforeach

 --}}

@endsection


