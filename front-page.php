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
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	</head>
  <body id="index">
		<main>
			<div class="wrap">
				<div class="video-header">
					<div class="video-wrap">
						<video src="<?php echo get_template_directory_uri(); ?>/img/top.mp4" autoplay loop muted playsinline></video>
					</div>
					<div class="header-overlay">
					</div>
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
							<h1>Make everyone involved</h1>
							<h1>more<span class="logo-2"></span></h1>
							<p class="home-paragraph">かかわる全ての人をもっとプラスへ</p>
							<div class="scroll-icon link" id="scroll-icon">
								<a>
									<span>SCROLL</span>
								</a>
							</div>
						</div><!--end of .home-caption -->
					</div><!--end of #home -->
				</div><!--end of .video-header -->
				<div id="scrollTo"></div>
				<div id="top-news">
					<div class="container">
						<div class="top-title clearfix">
							<h2 class="container-title">news & topics</h2>
							<a class="news-more" href="<?php echo esc_url(home_url('/')); ?>news">more  ></a>
						</div>
						<ul class="news-list">
							<li class="news-items link">
								<a href="<?php echo esc_url(home_url('/')); ?>single">
									<div class="news-left">
										<p class="news-date">2019.03.14</p>
										<p class="news-content">コスメ情報メディアRococo（ロココ）の運用を開始しました！</p>
									</div>
									<span><i class="fas fa-chevron-right news-arrow"></i></span>
								</a>
							</li>
							<li class="news-items link">
								<a href="<?php echo esc_url(home_url('/')); ?>single">
									<div class="news-left">
										<p class="news-date">2019.02.12</p>
										<p class="news-content">転職情報メディア転職Qの運用を開始しました！</p>
									</div>
									<span><i class="fas fa-chevron-right news-arrow"></i></span>
								</a>
							</li>
							<li class="news-items link">
								<a href="<?php echo esc_url(home_url('/')); ?>single">
									<div class="news-left">
										<p class="news-date">2018.11.26</p>
										<p class="news-content">ダイエット情報メディアLilyの運用を開始しました！</p>
									</div>
								</a>
								<span><i class="fas fa-chevron-right news-arrow"></i></span>
							</li>
						</ul><!-- end of .news-list -->
					</div><!-- end of .container -->
				</div><!-- end of #news -->
				<div id="top-mission">
					<div class="container">
						<div class="top-title">
							<h2 class="container-title">mission</h2>
							<span class="title-ja">私たちの使命</span>
						</div>
						<div class="container-content">
							<p>
								私たちの使命は、テキストテキストテキストテキストテキストテキストテキストテキストテキスト
								テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
							</p>
						</div>
						<div class="mission-area">
							<ul class="mission-list">
								<li class="clearfix">
									<div class="mission-img img1">
										<p>社会の利便性</p>
										<p>の向上</p>
									</div>
									<div class="mission-1">
										<span class="mission-num">01</span>
										<span class="mission-detail">
											比較・検証・体験・取材などの手法を用いて情報を整理し、利便性の向上に貢献する。
										</span>
									</div>
								</li>
								<li class="clearfix">
									<div class="mission-img img2">
										<p>メディアの</p>
										<p>地位向上</p>
									</div>
									<div class="mission-2">
										<span class="mission-num">02</span>
										<span class="mission-detail">
											高い独自性を持つ情報を発信することでメディア価値と地位の向上に貢献する。
										</span>
									</div>
								</li>
								<li class="clearfix">
									<div class="mission-img img3">
										<p>顧客満足度</p>
										<p>NO.1</p>
									</div>
									<div class="mission-3">
										<span class="mission-num">03</span>
										<span class="mission-detail">
											顧客に、他社を上回る最善のサービスを提供し、「満足度」NO.1を目指す。
										</span>
									</div>
								</li>
							</ul>
						</div><!-- end of .mission-area -->
					</div><!-- end of .container -->
				</div><!-- end of #mission -->
				<div id="top-message">
					<div class="watermark">
						<div class="container">
							<div class="message-grid clearfix">
								<div class="message-left">
									<div class="message-logo">
										<span class="title-logo">
											<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" />
										</span>
									</div>
									<div class="message-short">
										<p>今ここにない価値を生み出し関わる全ての人をもっとPLUSへ（仮）</p>
									</div>
								</div>
								<div class="message-long">
									<p>株式会社PLUSはWEBを通して信頼性のある情報を</p>
									<p>テキストテキストテキストテキストテキストテキス</p>
									<p>テキストテキストテキストテキスト</p>
									<p>テキストテキストテキストテキストテキストテキス</p>
									<p>テキストテキスト</p>
									<p>テキストテキストテキストテキストします。</p>
								</div>
							</div><!-- end of .message-grid -->
						</div><!-- end of .container -->
					</div><!-- end of .watermark -->
				</div><!-- end of #message -->
				<div id="top-service">
					<div class="container">
						<div class="top-title">
							<h2 class="container-title">service</h2>
							<span class="title-ja">事業案内</span>
						</div>
						<div class="container-content">
							<p>
								PLUSでは、WEB広告事業を中心とした業務を執り行っています。成果報酬の広告ビジネス業界のトップクラスを
								走り続ける専門集団として、広告主や広告代理店と提携し、ウェブメディアを作成・運用しています。
							</p>
						</div>
						<a class="btn" href="<?php echo esc_url(home_url('/')); ?>service">more  ></a>
					</div><!-- end of .container -->
				</div><!-- end of #service -->
				<div id="top-recruit">
					<div class="container">
						<div class="recruit-wrap">
							<div class="top-recruit-img recruit-img link">
								<a href="<?php echo esc_url(home_url('/')); ?>recruit">
									<div class="top-title">
										<div class="img-wrap">
											<h2 class="container-title">recruit ></h2>
											<p class="container-content">採用情報</p>
										</div>
									</div>
								</a>
							</div>
							<div class="top-recruit-img company-img link">
								<a href="<?php echo esc_url(home_url('/')); ?>company">
									<div class="top-title">
										<div class="img-wrap">
											<h2 class="container-title">company ></h2>
											<p class="container-content">会社概要</p>
										</div>
									</div>
								</a>
							</div>
						</div><!-- end of .recruit-wrap -->
					</div><!-- end of .container -->
				</div><!-- end of #recruit -->
				<div id="top-value">
					<div class="value-heading">
						<div class="container">
							<div class="value-wrap">
								<h2 class="container-title">OUR VALUE</h2>
								<span class="title-ja">
									PLUSの強み
								</span>
							</div>
						</div><!-- end of .container -->
					</div><!-- end o .customer-heading -->
					<div class="value-content">
						<div class="container">
							<div class="value-title">
								<h3>なくてはならない存在へ</h3>
								<p class="container-content">
									流れが早く競合が多いテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
									テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
									テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
									テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
									テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
								</p>
							</div>
						</div><!-- end of .container -->
					</div><!-- end of .customer-content -->
				</div><!-- end of #customer -->
				<div id="top-contact">
					<div class="container">
						<div class="contact-wrap">
							<h2 class="container-title">contact</h2>
							<span class="title-ja">お問い合わせ</span>
							<p class="container-content">ご質問やご相談など、お気軽にお問い合わせください。</p>
						</div><!-- end of .contact-wrap -->
						<a class="black-btn" href="<?php echo esc_url(home_url('/')); ?>contact">お問い合わせ  ></a>
					</div><!-- end of .container -->
				</div><!-- end of #contact -->
				<div id="top-access">
					<div class="container">
						<div class="access-wrap">
							<h2 class="container-title">access map<i class="fas fa-map-marker-alt"></i></h2>
							<p class="container-content">〒060-0051</p>
							<p class="container-content">北海道札幌市中央南1条東2丁目2-5　SB大通東ビル3F</p>
							<div class="access-map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2915.106149500525!2d141.35674301547854!3d43.06023497914608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2988fcc7e481%3A0xf63ba20c60efc017!2z5qCq5byP5Lya56S-UExVUw!5e0!3m2!1sja!2sjp!4v1557476661080!5m2!1sja!2sjp" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div><!-- end of .contact-wrap -->
					</div><!-- end of .container -->
				</div><!-- end of #access -->
<?php get_footer(); ?>
