<?php
/**
 * Template Name: Home Page Template
 *
 * Based on the Empty Page Template from Understrap
 * 
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>     	

<main id="main" class="site-main">

	<section class="parallax one">
		<div class="parallax-content">
			<div>
				<h1>The Stories We Are<small>(sm)</small></h1>
				<h2>Preserving the life stories of those we love</h2>
			</div>
		</div>			
	</section>

	<section class="content-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<img src="/wp-content/uploads/2019/10/logo-500w.jpg" alt="The stories we are" />
				</div>
				<div class="col-6">
					<p>Bacon ipsum dolor amet landjaeger leberkas turducken ball tip, alcatra tri-tip cupim tongue capicola swine pig flank bacon chicken spare ribs. Biltong rump fatback cow sirloin, bacon bresaola meatloaf pork beef andouille ham hock. Bacon prosciutto ham hock venison andouille pork belly. Chuck buffalo andouille tongue kielbasa hamburger, turducken beef ribs cupim corned beef ball tip.</p>

					<p>Alcatra chicken cow picanha salami, kielbasa shoulder meatball ball tip ham shankle short loin cupim. Fatback picanha leberkas filet mignon beef ribs, pork loin tri-tip. Boudin shoulder pork chop capicola ham hock. Beef ribs pork loin tri-tip jowl ground round burgdoggen bacon. Turkey frankfurter drumstick jowl, jerky sirloin t-bone filet mignon ribeye salami kevin burgdoggen.</p>

					<a class="btn btn-primary btn-lg" href="/about-the-stories-we-are">Learn more</a>
				</div>
			</div>
		</div>
	</section>

	<section class="parallax three">
		<div class="parallax-content video-link">
			<a class="btn btn-primary btn-lg" href="/watch-the-stories">Watch the Stories</a>
		</div>			
	</section>

</main><!-- #main -->
	

<?php
get_footer();
