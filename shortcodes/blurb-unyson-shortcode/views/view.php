<?php if (!defined('FW')) die( 'Forbidden' ); ?>

<div class="container blurb-wrapper">
	<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>">
		<div class="blurb-front-face" style="background-color:<?php echo $atts['bg_color']; ?>; text-align:<?php echo $atts['text_align'] ?>; border:<?php echo $atts['border_size']; ?>px <?php echo $atts['border_style']; ?> <?php echo $atts['borders_color']; ?>">
			<div class="icon-area">
				<img class="img-responsive" src="<?php echo esc_attr($atts['icon']['url']) ?>" alt="" >
			</div>
			<div class="content-area" >
				<h3 style="color:<?php echo $atts['title_color'] ?>"><?php echo $atts['title']; ?></h3>
			</div>
		</div>
		
		<div class="overlay" style="background-color:<?php echo esc_attr($atts['hover_color']) ?>; text-align:<?php echo $atts['text_align'] ?>">
			<h3><?php echo $atts['description_title']; ?></h3>
			<p><?php echo $atts['description']; ?></p>
		</div>
	</a>
</div>

<?php fw_print($atts); ?>