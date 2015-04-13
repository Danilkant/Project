
@extends('main')

@section('content')
	<h3>Welcome to my humble aboad</h3>
@stop

@section('side')
	<ul class="accordion" data-accordion>
		<li class="accordion-navigation">
			<a href="#panel1a"><strong>Manipulation</strong></a>
				<div id="panel1a" class="content active">
					<a href="{{ action('MainController@cards') }}">View all Cards</p>
					<a href="">View all Users</p>
			    </div>
		</li>
		<li class="accordion-navigation">
			<a href="#panel2a"><strong>Recently Updated</strong></a>
			    <div id="panel2a" class="content">
			    	<p>content</p>
			    </div>
		</li>
		<li class="accordion-navigation">
			<a href="#panel3a"><strong>Recently Added</strong></a>
			    <div id="panel3a" class="content">
			    	<p>content</p>
			    </div>
		</li>
	</ul>
	
	
@stop

