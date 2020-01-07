<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title><?php  wp_title('|', true, 'right'); bloginfo('name'); ?></title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400,500,600,700">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/swiper.css">
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	</head>
  <body id="<?php $slug = $post->post_name; echo $slug; ?>">
		<div class="wrap">
			<main>
				<div id="home" class="home-wrap">
					<nav class="navbar clearfix">
						<a class="logo" href="<?php echo esc_url(home_url('/')); ?>"></a>
						<div class="navbar-toggle">
							<span class="navbar-toggle-icon"><i class="fas fa-bars"></i></span>
						</div>
						<div class="modal-overlay"></div>
						<div class="navbar-modal">
							<div id="close">
								<i class="fas fa-times"></i>
							</div>
							<ul class="navbar-nav">
								<li class="nav-item">
									<div class="nav-link">
										<a href="<?php echo esc_url(home_url('/')); ?>service">事業内容</a>
									</div>
								</li>
								<li class="nav-item">
									<div class="nav-link">
										<a href="<?php echo esc_url(home_url('/')); ?>company">会社概要</a>
									</div>
								</li>
								<li class="nav-item">
									<div class="nav-link">
										<a href="<?php echo esc_url(home_url('/')); ?>recruit">採用情報</a>
									</div>
								</li>
								<li class="nav-item">
									<div class="nav-link">
										<a href="<?php echo esc_url(home_url('/')); ?>access">アクセス</a>
									</div>
								</li>
								<li class="nav-item">
									<div class="nav-link">
										<a href="<?php echo esc_url(home_url('/')); ?>contact">お問い合わせ</a>
									</div>
								</li>
							</ul>
						</div><!-- end of .navbar-modal -->
						<div class="navbar-right">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="<?php echo esc_url(home_url('/')); ?>service">
										<div class="nav-link">
											<p class="nav-en">service</p>
											<p class="nav-ja">事業内容</p>
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo esc_url(home_url('/')); ?>company">
										<div class="nav-link">
											<p class="nav-en">company</p>
											<p class="nav-ja">会社概要</p>
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo esc_url(home_url('/')); ?>recruit">
										<div class="nav-link">
											<p class="nav-en">recruit</p>
											<p class="nav-ja">採用情報</p>
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo esc_url(home_url('/')); ?>access">
										<div class="nav-link">
											<p class="nav-en">access</p>
											<p class="nav-ja">アクセス</p>
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo esc_url(home_url('/')); ?>contact">
										<div class="nav-link">
											<p class="nav-en">contact</p>
											<p class="nav-ja">お問い合わせ</p>
										</div>
									</a>
								</li>
							</ul>
						</div><!-- end of .navbar-right -->
					</nav><!-- end of .navbar -->
					<div class="home-caption">
						<h1><?php the_field('english_title'); ?></h1>
						<p class="home-paragraph"><?php the_title(); ?></p>
						<div class="scroll-icon link" id="scroll-icon">
							<a>
								<span>SCROLL</span>
							</a>
						</div>
					</div>
				</div><!--end of #home -->
				<div id="scrollTo"></div>
<!-- end of header.php -->
