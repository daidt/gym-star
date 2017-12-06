@extends('userpage')
@section('title')
Programs Details
@endsection

@section('content')
<div class="col-sm-8 text-left"> 

	<div class="well">
		<div class="media">
			<div class="media-body">
				<h3>Title : {{ $p[0]->title}}</h3>
				<h4>
					Level : @if($p[0]->level == 1 ){{ "Light" }}
					@elseif($p[0]->level == 2 ){{ "Medium" }}
					@elseif($p[0]->level == 3 ){{ "Hard" }}
					@endif
				</h4>
				<p>Coach : |@foreach($coach as $c)

					@if($p[0]->id == $c->id_program)<a href="{{ route('info_coach',$c->id) }}"> {{ $c->fullname }} |</a>@endif

					@endforeach

				</p>
				<div align="center">
					<img src="{{$p[0]->image}}" alt="Image">
				</div>
				<br>
				<a href=""><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>
				{{-- <b  style="color: blue"><span class="glyphicon glyphicon-thumbs-up"></span> Liked</b> --}}
			</div>
		</div>
	</div>
	

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
