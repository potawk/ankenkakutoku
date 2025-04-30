<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.png')); ?>">
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Pinyon+Script&family=Zen+Old+Mincho:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="wholewrap">
	<header class="header">
		<?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
		<<?php echo $html_tag; ?> class="header__title">
			<a href="<?php echo esc_url(home_url()); ?>">
				<span class="header__title-main">Serene</span>
				<span class="header__title-sub">Wedding</span>
			</a>
		</<?php echo $html_tag; ?>>
		<hr class="header__hr">
		<nav>
			<ul class="header__items">
				<li class="header__item"><a href="#pickup" class="nav-link" data-target="pickup">Pickup</a></li>
				<li class="header__item"><a href="#plan" class="nav-link" data-target="plan">Plan</a></li>
				<li class="header__item"><a href="#feature" class="nav-link" data-target="feature">Feature</a></li>
				<li class="header__item"><a href="#gallery" class="nav-link" data-target="gallery">Gallery</a></li>
				<li class="header__item"><a href="#contact" class="header__item-contact">Contact</a></li>
				<li class="header__item">
					<ul class="sns-list">
						<li class="insta"><a href="https://www.instagram.com/"><img src="<?php echo get_template_directory_uri() ?>/img/instagram.png" alt="instagram"></a></li>
						<li class="facebook"><a href="https://www.facebook.com/?locale=ja_JP"><img src="<?php echo get_template_directory_uri() ?>/img/Group66.png" alt="facebook"></a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>