@extends('main')

@section('content')
	{!! Form::open() !!}
		{!! Form::label('title', 'Title') !!}
		{!! Form::text('title') !!}

		{!! Form::label('description', 'Description') !!}
		{!! Form::textarea('description') !!}

		{!! Form::submit('Create Card') !!}
	{!! Form::close() !!}
@stop

@section('side')
	<ul class="accordion" data-accordion>
		<li class="accordion-navigation">
			<a href="#panel1a"><strong>Manipulation</strong></a>
				<div id="panel1a" class="content active">
					<a href="{{ action('MainController@cards') }}">Back to all Cards</p>
			    </div>
		</li>
	</ul>
@stop