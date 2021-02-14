<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
		<script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="flex-center position-ref">
            <div class="content">
				<div class="title">
					<a href="/">{{config('app.name')}}</a>
				</div>

				<div>
					<a href="/clientes" class="btn btn-info">Clientes</a>
				</div>		
				@include('inc.messages')
				@yield('content')
			</div>
		</div>
    </body>
</html>
