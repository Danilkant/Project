@extends('main')

@section('content')
	<ul class="small-block-grid-3">
		@foreach($storage as $card)
			<li>
				<a href="{{ action('MainController@specific', [$card->id]) }}">{{ $card->title }}</a>
				<p>{{ $card->description }}</p>
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
		<li class="accordion-navigation">
			<a href="#panel2a"><strong>Card Manipulation</strong></a>
				<div id="panel2a" class="content active">
					<a href="{{ action('MainController@createNewCard') }}">Create new Card</p>
			    </div>
		</li>

	</ul>
@stop