@extends('master')
@section('title')
{{ucfirst(Auth::user()->username)}}'s Page
@endsection

@section('content')


<div class="jumbotron">
	<div class="container text-center">
		<h1>@if(Auth::check())
			{{ucfirst(Auth::user()->username)}}'s Page
		@endif</h1>      
		<p>My Programs</p>
	</div>
</div>
<div class="container-fluid bg-3 text-center">
	<div class="row">
		<div class="col-sm-3">
			<a href="#">Title</a>
			<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
			<p>Some text..</p>
			<a href="" src="">Read more >> </a>
		</div>
		<div class="col-sm-3"> 
			<p>Some text..</p>
			<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
		</div>
		<div class="col-sm-3"> 
			<p>Some text..</p>
			<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
		</div>
		<div class="col-sm-3">
			<p>Some text..</p>
			<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
		</div>
	</div>
</div><br>

<div class="container-fluid bg-3 text-center">    
	<div class="row">
		<div class="col-sm-3">
			<p>Some text..</p>
			<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
		</div>
		<div class="col-sm-3"> 
			<p>Some text..</p>
			<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
		</div>
		<div class="col-sm-3"> 
			<p>Some text..</p>
			<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
		</div>
		<div class="col-sm-3">
			<p>Some text..</p>
			<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
		</div>
	</div>
</div><br><br>
@endsection
