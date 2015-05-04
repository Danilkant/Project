@extends('main')

@section('content')
		<h2>{{ $card->title }}</h2>
		<p>image</p>

		<h5>Card Type: </h5>
		<p>{{ $card->type }}</p>	
		<h5>Faction: </h5>
		<p>{{ $card->faction }}</p>	
		<h5>Cost: </h5>
		<p>{{ $card->cost}}</p>			
		<h5>Description: </h5>
		<strong>{{ $card->description }}</strong>
@stop

@section('side')
	<ul class="accordion" data-accordion>
		<li class="accordion-navigation">
			<a href="#panel1a"><strong>Manipulation</strong></a>
				<div id="panel1a" class="content active">
					<a href="{{ action('MainController@cards') }}">Back to all Cards</p>
			    </div>
		</li>
		<li class="accordion-navigation">
			<a href="#panel2a"><strong>Card Manipulation</strong></a>
				<div id="panel2a" class="content active">
					<a href="{{ action('MainController@deleteCurrentCard', [$card->id]) }}">Delete current Card</p>
					<a href="{{ action('MainController@updateCurrentCard', [$card->id]) }}">Update current Card</p>
			    </div>
		</li>
		
	</ul>
@stop