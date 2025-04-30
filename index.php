<?php get_header(); ?>

<div class="mainright">
	<header class="header-sp">
		<?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
		<<?php echo $html_tag; ?> class="header__title">
			<a href="<?php echo esc_url(home_url()); ?>">
				<span class="header__title-main">Serene</span>
				<span class="header__title-sub">Wedding</span>
			</a>
		</<?php echo $html_tag; ?>>
		<!-- ハンバーガーメニューボタンのHTML構造を配置してください -->
		<div class="hamburger-menu">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<!-- ハンバーガーメニュー内に表示する3つのナビゲーションを表示するHTML構造を配置してください -->
		<nav id="hamburger-navigation">
			<?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
			<<?php echo $html_tag; ?> class="header__title">
				<a href="<?php echo esc_url(home_url()); ?>">
					<span class="header__title-main">Serene</span>
					<span class="header__title-sub">Wedding</span>
				</a>
			</<?php echo $html_tag; ?>>
			<hr class="header__hr header__hr-sp">
			<ul class="sections">
				<li class="hamburger-menu-section">
					<a href="#pickup">Pickup</a>
				</li>
				<li class="hamburger-menu-section">
					<a href="#plan">Plan</a>
				</li>
				<li class="hamburger-menu-section">
					<a href="#feature">Feature</a>
				</li>
				<li class="hamburger-menu-section">
					<a href="#gallery">Gallery</a>
				</li>
				<li class="hamburger-menu-section header__item-contact">
					<a href="#contact">Contact</a>
				</li>
				<li class="hamburger-menu-section">
					<ul class="sns-list">
						<li class="insta"><a href="https://www.instagram.com/"><img src="<?php echo get_template_directory_uri() ?>/img/instagram.png" alt=""></a></li>
						<li class="facebook"><a href="https://www.facebook.com/?locale=ja_JP"><img src="<?php echo get_template_directory_uri() ?>/img/Group66.png" alt=""></a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	<div class="mainvisual">
		<video width="100%" autoplay muted loop playsinline src="<?php echo get_template_directory_uri() ?>/img/mainvisual.mp4" alt="movie">
	</div>

	<section id="message" class="wrapper message">
		<h2>
			<div class="h2__line"></div>
			<p class="message__title"><span>穏やかな自然の中で、</span><span>二人だけの特別な瞬間を。</span></p>
		</h2>
		<p class="message__text">
			心地よい風と美しい景色に囲まれながら、<br>
			<span>深い愛を誓うお二人へ、</span><span>一生に残るリゾートウエディングを叶えます。</span>
		</p>
	</section>

	<section id="pickup" class="pickup content-section">
		<h2 class="section__title">
			<p class="section__title-main">Pickup</p>
			<p class="section__title-sub">おすすめ情報</p>
		</h2>

		<?php
		$args = array(
			'post_type' => 'pickup',
			'posts_per_page' => 5,
		);
		$query = new WP_Query($args);
		?>

		<div class="swiper">
			<div class="swiper-wrapper">
				<?php if ($query->have_posts()): ?>
					<?php while ($query->have_posts()): $query->the_post(); ?>
						<div class="swiper-slide">
							<a href="#">
								<?php if (has_post_thumbnail()): ?>
									<figure>
										<?php the_post_thumbnail(); ?>
									</figure>
								<?php endif; ?>
								<div class="pickup__slide-text">
									<div class="pickup__slide-title"><?php the_title(); ?></div>
									<div class="pickup__slide-description"><?php the_content(); ?></div>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>
		</div>
	</section>

	<section id="plan" class="plan content-section">
		<div class="wrapper">
			<h2 class="section__title">
				<p class="section__title-main">Plan</p>
				<p class="section__title-sub">プラン</p>
			</h2>
			<div class="plan__tab">
				<p class="tab-button active" data-target="tab1"><span>四季の</span><span>ウエディング</span></p>
				<p class="tab-button" data-target="tab2"><span>海辺の</span><span>ウエディング</span></p>
				<p class="tab-button" data-target="tab3"><span>深緑の</span><span>ウエディング</span></p>
			</div><!-- plan__tab -->
			<div id="tab1" class="tab-content active">
				<div class="plan__tab-img">
					<img src="<?php echo get_template_directory_uri() ?>/img/plan1.jpg" alt="shiki">
				</div>
				<div class="plan__tab-description">
					<p class="plan__tab-head"><span>四季折々の美しさを存分に味わう、</span><span>心温まるウエディング</span></p>
					<div class="plan__tab-text">
						<p>
							四季の移ろいを、お二人の人生最高の日に。<br>
							私たちがご提案する「四季のウエディング」は、自然の恵みと季節の魅力を存分に活かしたプランです。
						</p>
						<p>
							春夏秋冬、大切なお二人にぴったりの季節をお選びください。心を込めて、その季節ならではの装飾、お料理、お衣装をコーディネートいたします。<br>
							さらに、各地の伝統行事や季節の風物詩にちなんだ特別なイベントもご提案。<br>
							忘れられない思い出となる、世界にたった一つのウエディングフォトを、私たちと一緒に創り上げましょう。
						</p>
					</div><!-- plan__tab-text -->
				</div><!-- plan__tab-description -->
				<a href="#" class="plan__btn">プラン詳細はこちら</a>
			</div>
			<div id="tab2" class="tab-content">
				<div class="plan__tab-img">
					<img src="<?php echo get_template_directory_uri() ?>/img/plan2.jpg" alt="umibe">
				</div>
				<div class="plan__tab-description">
					<p class="plan__tab-head"><span>波音と共に誓う、</span><span>幻想的なビーチウエディング</span></p>
					<div class="plan__tab-text">
						<p>
							青く輝く海と白い砂浜を舞台に、お二人だけの特別な瞬間を演出するプランです。<br>
							barefoot(裸足)スタイルやトロピカルな装飾で、リラックスした雰囲気の中、自然と一体となったウエディングを。潮風に髪をなびかせ、砂浜に足跡を残しながら、心温まる時間をお過ごしください。海の青さと空の広さが、新たな人生の門出を祝福します。
						</p>
						<p>
							貝殻やヒトデをあしらったデコレーション、パステルカラーの花々が彩るアーチ、そしてココナッツの香りが漂う中で、まるで楽園のような空間が広がります。<br>
							海辺ならではの開放感と、忘れられない思い出をご提供します。
						</p>
					</div>
				</div>
				<a href="#" class="plan__btn">プラン詳細はこちら</a>
			</div>
			<div id="tab3" class="tab-content">
				<div class="plan__tab-img">
					<img src="<?php echo get_template_directory_uri() ?>/img/plan3.jpg" alt="shinryoku">
				</div>
				<div class="plan__tab-description">
					<p class="plan__tab-head"><span>木漏れ日に祝福される、</span><span>ナチュラルウエディング</span></p>
					<div class="plan__tab-text">
						<p>
							深緑に包まれた森の中で、まるおとぎ話の主人公になったかのような夢のような一日を過ごせるプランです。
						</p>
						<p>
							新緑の香りと小鳥のさえずりに包まれて、自然の中で愛を誓います。木々の間から差し込む柔らかな光が、二人の門出を優しく照らすでしょう。<br>
							緑豊かな森の中で、静寂と活気が共存する不思議な空間を体験してください。苔むした石畳や、清らかな小川のせせらぎが、お二人の物語に深みを添えます。<br>
							森の妖精に見守られているかのような、幻想的で忘れられない一日をお約束します。
						</p>
					</div>
				</div>
				<a href="#" class="plan__btn">プラン詳細はこちら</a>
			</div>
		</div>
	</section><!-- plan -->

	<section id="feature" class="feature content-section">
		<div class="wrapper">
			<h2 class="section__title">
				<p class="section__title-main">Feature</p>
				<p class="section__title-sub">Serene Weddingの特徴</p>
			</h2>
			<div class="feature__list">
				<div class="feature__item">
					<div class="feature__item-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/feature1.jpg" alt="feature1">
					</div><!-- feature__item-img -->
					<div class="feature__item-text">
						<h3 class="feature__item-title">お二人の時間を大切にする撮影プラン</h3>
						<p class="feature__item-description">
							貸切のプライベートロケーションを用意し、余裕のあるスケジュールで撮影を行います。<br>
							出会いや思い出を反映したストーリー性のある撮影や、自然な愛情表現を捉える瞬間を大切にします。
						</p>
					</div><!-- feature__item-text -->
				</div><!-- feature__item -->
				<div class="feature__item">
					<div class="feature__item-img-reverse">
						<img src="<?php echo get_template_directory_uri() ?>/img/feature2.jpg" alt="feature2">
					</div>
					<div class="feature__item-text-reverse">
						<h3 class="feature__item-title">季節ごとの自然の美しさを満喫</h3>
						<p class="feature__item-description">
							春には桜並木や新緑の森、夏には青い海と白い砂浜、秋には紅葉の美しい風景、冬には幻想的な雪景色など、四季折々の魅力的な背景で思い出に残る写真を撮影します。
						</p>
					</div>

				</div>
				<div class="feature__item">
					<div class="feature__item-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/feature3.jpg" alt="feature3">
					</div>
					<div class="feature__item-text">
						<h3 class="feature__item-title">特別な空間での思い出作り</h3>
						<p class="feature__item-description">
							プライベートビーチや貸切の森林など、非日常的な環境で撮影を行います。<br>
							また、花畑や満天の星空など、その時期でしか見られない絶景での撮影も行っています。
						</p>
					</div>
				</div><!-- feature__item -->
			</div><!-- feature__list -->
		</div>
	</section><!-- feature -->

	<section id="gallery" class="gallery content-section">
		<div class="wrapper">
			<h2 class="section__title">
				<p class="section__title-main">Gallery</p>
				<p class="section__title-sub">ギャラリー</p>
			</h2>
			<div class="flex-container">
				<?php
				$args = array(
					'post_type' => 'gallery',
					'post_per_page' => -1
				);
				$the_query = new WP_Query($args);
				$counter = 0;
				if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post();
						$counter++;
						// 1～4番目
						if ($counter == 1) echo '<div class="row1">';
						if ($counter >= 1 && $counter <= 4): ?>
							<div class="flex-item">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
									alt="<?php the_title(); ?>"
									class="thumbnail"
									data-fullsrc="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">
							</div>
						<?php
							if ($counter == 4) echo '</div>'; // 4番目でrowを閉じる
						endif;
						// 5～7番目
						if ($counter == 5) echo '<div class="row2">';
						if ($counter >= 5 && $counter <= 7):
						?>
							<div class="flex-item">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
									alt="<?php the_title(); ?>"
									class="thumbnail"
									data-fullsrc="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">
							</div>
						<?php
							if ($counter == 7) echo '</div>'; // 7番目でrowを閉じる
						endif;
						// 8～10番目
						if ($counter == 8) echo '<div class="row3">';
						if ($counter >= 8 && $counter <= 10):
						?>
							<div class="flex-item">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
									alt="<?php the_title(); ?>"
									class="thumbnail"
									data-fullsrc="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">
							</div>
				<?php
							if ($counter == 10) echo '</div>'; // 10番目でrowを閉じる
						endif;
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div><!-- flex-container -->
			<div id="myModal" class="modal-background">
				<div class="modal-content">
					<img id="modal-img" src="" alt="">
					<a id="closeModalBtn" class="closeModalBtn">
						<img src="<?php echo get_template_directory_uri() ?>/img/close.png">
					</a>
				</div>
			</div><!-- modal-background -->
		</div>

	</section>

	<?php get_footer(); ?>