@extends('main')

@section('content')
	{!! Form::open() !!}

		{!! Form::label('type_id', 'Type') !!}
		{!! Form::select('type_id', $tp) !!}

		{!! Form::label('faction_id', 'Faction') !!}
		{!! Form::select('faction_id', $fc) !!}

		{!! Form::label('cost', 'Cost') !!}
		{!! Form::text('cost') !!}

		{!! Form::label('title', 'Title') !!}
		{!! Form::text('title') !!}

		{!! Form::label('description', 'Description') !!}
		{!! Form::textarea('description') !!}

		{!! Form::submit('Create Card') !!}
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
					<a href="{{ action('MainController@cards') }}">Back to all Cards</p>
			    </div>
		</li>
	</ul>
@stop