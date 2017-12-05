@extends('userpage')
@section('title')
Programs Details
@endsection

@section('content')
<div class="col-sm-8 text-left"> 

	<h3>Title : {{ $p[0]->title}}</h3>
	<h4>
		Level : @if($p[0]->level == 1 ){{ "Light" }}
		@elseif($p[0]->level == 2 ){{ "Medium" }}
		@elseif($p[0]->level == 3 ){{ "Hard" }}
		@endif
	</h4>
	<img src="{{$p[0]->image}}" alt="Image">
	<hr>

	<div>
		<h2>Actions :</h2>
		@foreach($action as $at)													
		<h4>- {{$at->content}}</h4><br>
		@endforeach

		<hr>
	</div>
	
	@if($practiced)
	<h4>Subscribed</h4>
	@else
	<h3><a href="{{ route('subscribe',$p[0]->id) }}">Subscribe now >> </a></h3>
	@endif
	<hr>

</div>

@endsection
