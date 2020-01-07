		</main>
			<footer>
				<div class="container">
					<?php
					  global $template;
						$temp_name = basename($template);
						echo $temp_name ;
					 ?>
					<div class="breadcrumb">
						<span><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></span>
						<?php if( is_single() ) : ?>
							<span>&nbsp;<i class="fas fa-chevron-right"></i></span>
							<span><?php the_category(' '); ?></span>
						<?php else: ?>
							<?php if($post->post_parent): ?>
								<span>&nbsp;<i class="fas fa-chevron-right"></i></span>
								<span><a href="<?php echo get_page_link($post->post_parent); ?>">
									<?php echo get_the_title($post->post_parent); ?></a></span>
							<?php endif; ?>
						<?php endif; ?>
						<span>&nbsp;<i class="fas fa-chevron-right"></i></span>
						<span><?php the_title(); ?> </span>
					</div>
					<div class="navbar-footer">
						<ul class="navbar-nav">
							<li class="nav-item">
								<div class="nav-link">
									<a href="<?php echo esc_url(home_url('/')); ?>"><p class="nav-ja">ホーム</p></a>
								</div>
							</li>
							<li class="nav-item">
								<div class="nav-link">
									<a href="<?php echo esc_url(home_url('/')); ?>service"><p class="nav-ja">事業内容</p></a>
								</div>
							</li>
							<li class="nav-item">
								<div class="nav-link">
									<a href="<?php echo esc_url(home_url('/')); ?>company"><p class="nav-ja">会社概要</p></a>
								</div>
							</li>
							<li class="nav-item">
								<div class="nav-link">
									<a href="<?php echo esc_url(home_url('/')); ?>recruit"><p class="nav-ja">採用情報</p></a>
								</div>
							</li>
							<li class="nav-item">
								<div class="nav-link">
									<a href="<?php echo esc_url(home_url('/')); ?>access"><p class="nav-ja">アクセス</p></a>
								</div>
							</li>
							<li class="nav-item">
								<div class="nav-link">
									<a href="<?php echo esc_url(home_url('/')); ?>contact"><p class="nav-ja">お問い合わせ</p></a>
								</div>
							</li>
						</ul>
					</div><!-- end of .navbar-footer -->
					<div class="footer-corp">
						<p>札幌でSEO・WEBマーケティングはおまかせ</p>
						<span class="title-logo">
							<a href="<?php echo esc_url(home_url('/')); ?>" class="link">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" />
							</a>
						</span>
						<div class="footer-content">
							<p>株式会社PLUS（プラス）</p>
							<p>〒060-0051 北海道札幌市中央南1条東2丁目2-5 SB大通東ビル3F</p>
							<p>TEL/011-211-5765　FAX/011-211-5795</p>
						</div>
						<p>&copy;PLUS, Inc. All Rights Reserved.</p>
					</div><!-- end of .footer-corp -->
				</div><!-- end of .container -->
			</footer><!-- end of .footer -->
		</div><!-- end of .wrap -->
		<?php wp_footer(); ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/corp.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/js/swiper.js"></script>
		<script>
		  var swiper = new Swiper('.swiper-container', {
				loop: true,
				slidesPerView: 1,
				spaceBetween: 10,
				initialSlide: 0,
				effect: 'coverflow',
				paginationClickable: true,
				navigation: {
				 nextEl: '.swiper-button-next',
				 prevEl: '.swiper-button-prev',
 				},
		  });
		</script>
  </body>
</html>
