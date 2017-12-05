@extends('userpage')
@section('title')
My Blog
@endsection
@section('content')

<div class="col-sm-8 text-left"> 
	<h1>My Blog</h1>

	<form action="{{ route('post_blog') }}" method = "POST">
		{{csrf_field()}}
		<div class="form-group">
			<label class="control-label">Title</label><br>			
			<input type="text" class="form-control" name="title" id="title" placeholder="Enter your Blog's Title" required="" value="">
			
		</div>

		<div class="form-group">
			<label for="content">Content:</label>
			<textarea class="form-control" rows="5" name="content" id="content"></textarea>
		</div>

		<div class="form-group">            
			<input name="Submit" type="submit" value="Post" class="btn btn-primary">
		</div>

	</form>
	<hr>

	@if(!isset($blog))
	{{"You have no posts"}}
	@else
	<h1>Recent post:</h1>
	<hr>
	@foreach($blog as $post)
	<div>
		<h2>Title: {{$post->title}}</h2>
		<h4>Content: {{$post->content}} </h4>
		<p>Date Post : {{$post->created_at}}</p>
		<hr>
	</div>
	@endforeach
	<div class="row">{{ $blog->appends(Request::all())->links() }}</div>
	@endif
	
</div>

@endsection