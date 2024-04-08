<?php
/**
 * Front page template
 *
 * @package aquila
 */


get_header();

?>
 <div class="hero-section-2">
                <div class="container-2 w-container">
                    <div class="hero-content-wrap-2">
                        <h1 class="my-custom-heading">Elevate Your Online Presence with Webflow and User-centered Design</h1>
                        <div class="btn-2">
                                <div class="button-2">
                                    <div>→ Explore our projects</div>
                                </div>
                        </div>
                    </div>
                    <div class="hero-banner-image-wrap">
                        <img src="https://assets-global.website-files.com/61460fbdb4605c922e36553a/649ea3fa57bee709f4f174ca_Comment-Client.png" loading="lazy" srcset="https://assets-global.website-files.com/61460fbdb4605c922e36553a/649ea3fa57bee709f4f174ca_Comment-Client-p-500.png 500w, https://assets-global.website-files.com/61460fbdb4605c922e36553a/649ea3fa57bee709f4f174ca_Comment-Client.png 630w" sizes="(max-width: 767px) 100vw, (max-width: 1279px) 29vw, (max-width: 1439px) 301.59375px, 315px" alt="Header Comment Image" class="hero-comment-image comment-client"/>
						<img src="https://assets-global.website-files.com/61460fbdb4605c922e36553a/649ea3fa57bee709f4f1744b_Home-Design.png" loading="lazy" width="236.5" alt="Home Banner Decorative" class="home-decorate design"/>
						<img src="https://assets-global.website-files.com/61460fbdb4605c922e36553a/649ea3fa57bee709f4f17446_system-image.png" loading="lazy" width="684.5" sizes="(max-width: 479px) 92vw, (max-width: 767px) 52vw, (max-width: 991px) 53vw, (max-width: 1279px) 63vw, (max-width: 1439px) 754px, 685px" alt="Home Banner IMage" srcset="https://assets-global.website-files.com/61460fbdb4605c922e36553a/649ea3fa57bee709f4f17446_system-image-p-500.png 500w, https://assets-global.website-files.com/61460fbdb4605c922e36553a/649ea3fa57bee709f4f17446_system-image-p-800.png 800w, https://assets-global.website-files.com/61460fbdb4605c922e36553a/649ea3fa57bee709f4f17446_system-image-p-1080.png 1080w, https://assets-global.website-files.com/61460fbdb4605c922e36553a/649ea3fa57bee709f4f17446_system-image.png 1369w" class="hero-banner-image"/>
                        <img src="https://assets-global.website-files.com/61460fbdb4605c922e36553a/64a3a684fb04147ed0f5f3b2_home-banner-development.png" loading="lazy" width="303.5" sizes="(max-width: 479px) 100vw, (max-width: 991px) 23vw, (max-width: 1279px) 22vw, (max-width: 1439px) 266.796875px, 303.5px" alt="Home Decorate" srcset="https://assets-global.website-files.com/61460fbdb4605c922e36553a/64a3a684fb04147ed0f5f3b2_home-banner-development-p-500.png 500w, https://assets-global.website-files.com/61460fbdb4605c922e36553a/64a3a684fb04147ed0f5f3b2_home-banner-development.png 607w" class="home-decorate development"/>
						<img src="https://assets-global.website-files.com/61460fbdb4605c922e36553a/649ea3fa57bee709f4f1748b_Comment-VictorFlow.png" loading="lazy" srcset="https://assets-global.website-files.com/61460fbdb4605c922e36553a/649ea3fa57bee709f4f1748b_Comment-VictorFlow-p-500.png 500w, https://assets-global.website-files.com/61460fbdb4605c922e36553a/649ea3fa57bee709f4f1748b_Comment-VictorFlow.png 642w" sizes="(max-width: 767px) 100vw, (max-width: 1279px) 29vw, (max-width: 1439px) 348px, 321px" alt="Home Banner Comment Image" class="hero-comment-image comment-victor"/>
                    </div>
					<div class="hero-blur-pattern-wrap">
                    <div class="hero-blur-left-wrap">
                        <div class="hero-left-blue-blur"></div>
                        <div class="hero-left-green-blur"></div>
                    </div>
                    <div class="hero-blur-right-wrap">
                        <div class="hero-right-violet-wrap"></div>
                        <div class="hero-right-yellow-wrap"></div>
                    </div>
                </div>
             </div>
</div>
               
<div id="primary">
		<main id="main" class="site-main mt-5" role="main">
			<div class="home-page-wrap">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

					endwhile;
					?>

				<?php

				else :

					get_template_part( 'template-parts/content-none' );

				endif;
				?>
			</div>
		</main>
	</div>

<?php
get_footer();

