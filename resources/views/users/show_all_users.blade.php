@extends('main')

@section('content')
	<ul class="small-block-grid-3">
		@foreach($storage as $user)
			<li>
				<a href="{{ action('MainController@specificUser', [$user->id]) }}">{{ $user->email }}</a>
				<p>{{ $user->name }}</p>
			</li>
		@endforeach
	</ul>
@stop

@section('side')
	<ul class="accordion" data-accordion>
		<li class="accordion-navigation">
			<a href="#panel1a"><strong>Manipulation</strong></a>
				<div id="panel1a" class="content active">
					<a href="{{ action('MainController@index') }}">Back to main Page</p>
			    </div>
		</li>

	</ul>
@stop