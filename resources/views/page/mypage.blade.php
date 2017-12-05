@extends('userpage')
@section('title')
{{ucfirst(Auth::user()->username)}}'s Page
@endsection

@section('content')
<div class="col-sm-8 text-left"> 
	<h1>My Programs: You subscribed {{$count_program}} program</h1>
	@if(!isset($program))
	<div>You don't subscribe program</div>
	@else
	@foreach($program as $p)
	<h3><a href="{{ route('show_program_detail',$p->id) }}">Title : {{ $p->title}}</a></h3>
	<h4>
		Level : @if($p->level == 1 ){{ "Light" }}
		@elseif($p->level == 2 ){{ "Medium" }}
		@elseif($p->level == 3 ){{ "Hard" }}
		@endif
	</h4>

		<p>Coach : |@foreach($coach as $c)

		@if($p->id == $c->id_program)<a href="{{ route('info_coach',$c->id) }}"> {{ $c->fullname }} |</a>@endif

		@endforeach

	</p>
	<div align="center">
		<img src="{{$p->image}}" alt="Image">
	</div>
	<hr>

	{{-- 	<div><a href="{{ route('start_program',$p->id) }}">Start Program</a></div><hr> --}}

	@endforeach
	<div class="row">{{ $program->appends(Request::all())->links() }}</div>
	@endif
	
</div>

@endsection
