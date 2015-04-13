<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Game Dev Medium</title>
    <link href="/css/foundation.css" rel="stylesheet"/>
    <link href="/css/main.css" rel="stylesheet"/>
  </head>
  <body>
  	<nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: medium">
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="{{ action('MainController@index') }}">Game Dev Medium</a></h1>
	    </li>
	  </ul>

	  <section class="top-bar-section">
	    <!-- Right Nav Section -->
	    <ul class="right">

	    </ul>

	    <!-- Left Nav Section -->
	    <ul class="left">

	    </ul>
	  </section>
	</nav>
	<div class="row">
		<div class="small-8 column">
		  	@yield('content')
		</div>
		<div class="small-4 column panel">
			@yield('side')
		</div>
	</div>

    <!-- JAVA -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="/java/foundationJavaS.js"></script>
    <script src="/java/main.js"></script>


    <script>
      $(document).foundation();
    </script>
  </body>
</html>