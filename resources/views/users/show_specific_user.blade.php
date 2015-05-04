@extends('main')

@section('content')
		<h3>{{ $user->email }}</h3>
			
		<h5>Account Name: </h5>
		<strong>{{ $user->name }}</strong>

		<h5>Account ID: </h5>
		<strong>{{ $user->id }}</strong>
		{!! Form::open() !!}
		<ul class="small-block-grid-4">
			@foreach($inventory as $item)
				<li class="panel">
					<small><span data-tooltip aria-haspopup="true" class="has-tip" title="{{ $item->description }}">{{ $item->title }}</span></small>
					{!! Form::select("$item->id", $list, $item->card_id) !!}
				</li>
			@endforeach
		</ul>

			{!! Form::submit('Update Inventory') !!}
		{!! Form::close() !!}

@stop

@section('side')
	<ul class="accordion" data-accordion>
		<li class="accordion-navigation">
			<a href="#panel1a"><strong>Manipulation</strong></a>
				<div id="panel1a" class="content">
					<a href="{{ action('MainController@cards') }}">Back to all Cards</p>
			    </div>
		</li>
		<li class="accordion-navigation">
			<a href="#panel2a"><strong>Card Manipulation</strong></a>
				<div id="panel2a" class="content active">
					<a href="{{ action('MainController@updateCurrentUser', [$user->id]) }}">Update current User</p>
					<a href="{{ action('MainController@deleteCurrentUser', [$user->id]) }}">Delete current User</p>
			    </div>
		</li>
		
	</ul>
@stop