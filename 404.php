<?php get_header(); ?>

<style>

	.not-found {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	.not-found-box {
		text-align: center;
	}

	.not-found__btn {
		margin-top: 5px;
	}

	.not-found__desc {
		margin-bottom: 15px;
		font-size: 22px;
		line-height: 1.3;
	}

	.not-found__btn:hover {
		text-decoration: underline;
	}

	.not-found__404 {
		font-size: 50px;
		font-weight: 700;
		line-height: 1;
		margin-bottom: 10px;
	}

	.main-404 {
		min-height: 500px;
		position: relative;
	}

</style>

	<main class="main-404">

		<section class="not-found">
			<div class="not-found-box _container">
				<div class="not-found__404">404</div>
				<p class="not-found__desc">Страница не найдена</p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn not-found__btn">Перейти на главную</a>
			</div>
		</section>

	</main>


<?php get_footer(); ?>