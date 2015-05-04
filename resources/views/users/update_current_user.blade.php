@extends('main')

@section('content')
	{!! Form::open() !!}
		{!! Form::label('id', 'Account ID') !!}
		{!! Form::text('id', "$user->id", ['readonly']) !!}

		{!! Form::label('email', 'E-Mail') !!}
		{!! Form::text('email', "$user->email") !!}

		{!! Form::label('name', 'Name') !!}
		{!! Form::textarea('name', "$user->name") !!}

		{!! Form::submit('Update User') !!}
	{!! Form::close() !!}
	
	@if ($errors->any())
		@foreach ($errors->all() as $error)
			<small class="error">{{ $error }}</small>
		@endforeach
	@endif
@stop

@section('side')
	<ul class="accordion" data-accordion>
		<li class="accordion-navigation">
			<a href="#panel1a"><strong>Manipulation</strong></a>
				<div id="panel1a" class="content active">
					<a href="{{ action('MainController@users') }}">Back to all Cards</p>
			    </div>
		</li>
	</ul>
@stop