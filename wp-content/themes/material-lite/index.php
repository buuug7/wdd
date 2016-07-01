<?php
/**
 * @version    1.0
 * @package    Material Lite
 * @author     Ghuwad Team <contact@ghuwad.com>
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.ghuwad.com
 */

get_header(); 


?>
<div class="mdl-grid site-width">
	<div id="primary" class="content-area mdl-cell mdl-cell--<?php echo material_lite__tx('site_layout', 'one-column') || !is_active_sidebar( 'primary-sidebar' ) ? '12':'9'; ?>-col-desktop mdl-cell--9-col-tablet mdl-cell--4-col-phone">
		<div id="content" class="site-content" role="main">
			
	  <!--section 1-->
      <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
          <i class="material-icons">play_circle_filled</i>
        </header>
        <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
          <div class="mdl-card__supporting-text">
            <h4>解决方案</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, itaque, cumque, maxime obcaecati reprehenderit ea dignissimos amet voluptatem id excepturi facilis
            totam veritatis maiores eveniet neque explicabo temporibus quisquam in ex ab fugiat ipsa tempore sunt corporis nostrum quam illum!
          </div>
          <div class="mdl-card__actions">
            <a href="#" class="mdl-button">了 解 更 多</a>
          </div>
        </div>
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn1">
          <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn1">
          <li class="mdl-menu__item">item1</li>
          <li class="mdl-menu__item" disabled>item2</li>
          <li class="mdl-menu__item">item3</li>
        </ul>
      </section>
      
      
            <!--section 2-->
      <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        <div class="mdl-card mdl-cell mdl-cell--12-col">
          <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
            <h4 class="mdl-cell mdl-cell--12-col">成功案例</h4>
            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
              <div class="section__circle-container__circle mdl-color--primary"></div>
            </div>
            <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
              <h5>Lorem ipsum dolor sit amet</h5>
              Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Duis nulla tempor do aute et eiusmod velit exercitation nostrud quis <a href="#">proident minim</a>.
            </div>
            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
              <div class="section__circle-container__circle mdl-color--primary"></div>
            </div>
            <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
              <h5>Lorem ipsum dolor sit amet</h5>
              Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Duis nulla tempor do aute et eiusmod velit exercitation nostrud quis <a href="#">proident minim</a>.
            </div>
            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
              <div class="section__circle-container__circle mdl-color--primary"></div>
            </div>
            <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
              <h5>Lorem ipsum dolor sit amet</h5>
              Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Duis nulla tempor do aute et eiusmod velit exercitation nostrud quis <a href="#">proident minim</a>.
            </div>
          </div>
          <div class="mdl-card__actions">
            <a href="#" class="mdl-button">了 解 更 多</a>
          </div>
        </div>
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn2">
          <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn2">
          <li class="mdl-menu__item">item1</li>
          <li class="mdl-menu__item" disabled>item2</li>
          <li class="mdl-menu__item">item3</li>
        </ul>
      </section>

      <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        <div class="mdl-card mdl-cell mdl-cell--12-col">
          <div class="mdl-card__supporting-text">
            <h4>服务支持</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, itaque, cumque, maxime obcaecati reprehenderit ea dignissimos amet voluptatem id excepturi facilis
            totam veritatis maiores eveniet neque explicabo temporibus quisquam in ex ab fugiat ipsa tempore sunt corporis nostrum quam illum!
          </div>
          <div class="mdl-card__actions">
            <a href="#" class="mdl-button">了 解 更 多</a>
          </div>
        </div>
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn3">
          <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn3">
          <li class="mdl-menu__item">item1</li>
          <li class="mdl-menu__item" disabled>item2</li>
          <li class="mdl-menu__item">item3</li>
        </ul>
      </section>
			
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-card', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php material_lite_post_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div>
	</div>
	<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>