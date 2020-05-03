<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$id			 = uniqid( 'slider-' );
$indicators	 = $activeClass = "";
$i			 = 0;
$icon		 = '';
$class = $data['settings']['extra']['class'];
$mordan_style = $data['settings']['extra']['modern_style'];
$modern_style_class = '';
$modern_style_wrap_class = '';
if(($mordan_style != '') && $mordan_style == 'yes'){
  $modern_style_class = 'xs-classic-box-slider';
  $modern_style_wrap_class = 'xs-classic-box-slider-wrap';
}
?>

<?php if ( isset( $data[ 'slides' ] ) ): ?>


	<!-- Carousel -->
	<div id="main-slide" class="carousel slide <?php echo isset($class) && $class != 'default' ? $class : ''; echo ' '.$modern_style_wrap_class;   ?>" data-ride="carousel">

		<!-- Carousel inner -->
		<div class="carousel-inner">

			<?php
			foreach ( $data[ 'slides' ] as $slide ):
				$activeClass = ($i < 1) ? ('active') : (' ');
				?>
			<div class="item <?php echo esc_attr( $activeClass ); ?>" style="background-image:url(<?php echo esc_url( $slide[ 'src' ] ); ?>)">
					<div class="container">
						<div class="slider-content <?php echo isset($slide['extra']['slider_align']) ? $slide['extra']['slider_align'] : 'text-left';echo ' '. esc_attr($modern_style_class); ?>">
							<div class="col-md-12">
                                <?php

                                //  Check Modern box

                                if(($mordan_style != '') && $mordan_style == 'yes') {

                                     if ($slide['extra']['slider_subtitle'] != ''): ?>
                                        <h3 class="slide-sub-title animated3"><?php echo bizipress_kses($slide['extra']['slider_subtitle']); ?></h3>
                                    <?php endif; ?>
                                    <h2 class="slide-title title-light animated3"><?php echo esc_html($slide['title']); ?></h2>
                                  <?php

                                }else{
                                    ?>
                                    <h2 class="slide-title title-light animated3"><?php echo esc_html($slide['title']); ?></h2>
                                    <?php if ($slide['extra']['slider_subtitle'] != ''): ?>
                                        <h3 class="slide-sub-title animated3"><?php echo bizipress_kses($slide['extra']['slider_subtitle']); ?></h3>
                                    <?php endif;
                                }

								if ( $slide[ 'extra' ][ 'slider_desc' ] != '' ): ?>
								<p class="slider-description lead animated3"><?php echo bizipress_kses( $slide[ 'extra' ][ 'slider_desc' ] ); ?></p>
										<?php endif; ?>
								<p class="animated3">
									<?php
									foreach ( $slide[ 'extra' ][ 'button_settings' ] as $btn ):

										if ( $btn[ 'icon' ] != '' ) {
											$icon_position	 = $btn[ 'icon_position' ];
											$icon			 = '<i class="' . $icon_position . ' ' . $btn[ 'icon' ] . '"></i>';
										}
										?>
										<a target="<?php echo esc_html( $btn[ 'target' ] ); ?>" href="<?php echo esc_url( $btn[ 'link' ] ); ?>" class="slider <?php bizipress_theme_button_class( $btn[ 'style' ] ); ?>"> <?php echo wp_kses( $icon, bizipress_allowed_html() ); ?> <?php echo wp_kses_post( $btn[ 'label' ] ); ?></a>
									<?php endforeach; ?>

								</p>        
							</div><!-- Col end -->
						</div><!-- Slider content end -->
					</div><!--Container end -->
				</div><!--/ Carousel item 1 end -->
				<?php
				$indicators .= '<li data-target="#main-slide" data-slide-to="' . $i . '" class="' . $activeClass . '"></li>';
				$i++;
				?>
			<?php endforeach; ?>
		</div><!-- Carousel inner end-->

		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php echo wp_kses( $indicators, bizipress_allowed_html() ); ?>
		</ol>

		<!-- Controls -->
		<a class="left main-slide carousel-control" href="#main-slide" data-slide="prev">
			<span><i class="fa fa-angle-left"></i></span>
		</a>
		<a class="right main-slide carousel-control" href="#main-slide" data-slide="next">
			<span><i class="fa fa-angle-right"></i></span>
		</a>
	</div><!--/ Carousel end --> 




	<script>
		//slider js
		jQuery( document ).ready( function ( $ ) {

			$( '#main-slide' ).carousel( {
				pause: true,
				interval: 100000,
			} );
		} );
	</script>

<?php endif; ?>