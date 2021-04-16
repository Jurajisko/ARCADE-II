
<nav class="navigation has-text-grey" role="navigation" aria-label="main navigation">

    @if (Route::has('login'))
        <div class="hidden fixed top-0 left-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

	@guest
		<h1 class="title">
			som neprihlaseny
		</h1>
	@endguest

	@auth
		{{-- LOGGED In USER --}}
		<a href="/users/{{ auth()->user()->id }}">
			@<strong>{{ auth()->user()->name }}</strong>
		</a>

		{{-- LOGOUT LINK --}}
		<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
			logout
		</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST">
			@csrf
		</form>

	@endauth

    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>

</nav>    



{{--
        
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

    --}}