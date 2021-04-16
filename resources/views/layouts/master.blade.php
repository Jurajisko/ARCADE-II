<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
	
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>

	<header class="site-header">

			@include('navigation')

		<h1 class="title logo">
			<a href="/">(ಠ_ಠ)</a>
		</h1>

	</header>


	<main id="app" class="columns is-centered">
        <section class="column is-three-fifths">
            <div>
                <example-component></example-component>
                <flash-mess text="{{ session('flash') }}"></flash-mess>
                
            </div>

            @yield('content')

        </section>
    </main>

	<!-- Scripts -->
    <script src="/js/app.js"></script>



</body>
</html>
