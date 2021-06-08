<main>
	<section class="sezione_titolo">
		<div class="row interno_grande">
			<div class="col-md-12" data-aos="fade" data-aos-delay="500">
				<h1 class="medio">
					<?php the_title(); ?>
				</h1>
				<p class="sottotitolo">
					<?php 
						$meta = get_post_meta( get_the_ID(), 'sottotitolo' );
						if( !empty($meta) ) {
							echo $meta[0];
						}
					?>
				</p>
			</div>
		</div>
	</section>
	<?php the_content(); ?>
</main>