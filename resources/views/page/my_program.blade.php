@extends('userpage')
@section('title')
{{ucfirst(Auth::user()->username)}}'s Programs
@endsection

@section('content')
<div class="col-sm-8 text-left"> 
	<h1>My Programs</h1>
	

	
</div>

@endsection
