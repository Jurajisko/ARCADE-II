



	<section id="comments" class="section comments columns is-centered">
		<div class="is-size-5 column is-three-quarters">

			<!-- b:auth -->
			@auth
				<!-- template from >>> views/comments/create.blade.php -->
				@include('comments.create')
			@endauth

			<comment-message></comment-message>
				
			<ol class="comment-list">

				<!-- rychle vytvorenie 
					b:foreach -->
				@foreach ($post->comments as $comment)
					<li>
						<!-- rychle vytvorenie  
							b:include -->
						<!-- template from >>> views/comments/show.blade.php -->
						@include('comments.show')
						
					</li>
				@endforeach
			</ol>

		</div>
	</section>

