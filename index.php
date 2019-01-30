<!DOCTYPE html>
<html class="no-js">
	<head>
		<title>Treinaweb</title>

		<?php wp_head(); ?>
	</head>
	<body>
		<h2>Bem Vindos ao primeiro tema</h2>

		<?php while (have_posts()) : the_post(); ?>

			<div style="border: 1px solid black">
				<h3><?= get_the_title(); ?></h3>
				<p><?= get_the_excerpt(); ?></p>
				<?= 'Meu valor de teste' ?>
				<?php the_date(); ?>
				<?php the_time(); ?>
				<?php the_category(); ?>
				<?php the_tags(); ?> <br>
				<a href="#"><?php the_permalink(); ?></a>
			</div>

		<?php endwhile; ?>

		<?php wp_footer(); ?>
	</body>
</html>