

<!-- rychle vytvorenie  
	
	b:extends -->
@extends('layouts.master')

<!-- rychle vytvorenie  b:section -->
	@section('content')

	<!-- rychle vytvorenie  b:include -->
		@include('posts.article', [ 'type' => 'full' ])
		@include('comments.index')
				

	@endsection