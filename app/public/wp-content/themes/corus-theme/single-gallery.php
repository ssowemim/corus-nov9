<?php get_header(); ?>

<div class="container"> 
<div class="wrapper">
	  <h2>Gallery for <?= the_title( '', '', false ) ?><h2>
</div>

    <div class="fancy-slider hidden" id="slider-view">

        <?php
		    while ( have_posts() ) : the_post();
			    $imageUno = get_field('image_uno');
			    $imageDos = get_field('image_dos');
                $imageTres = get_field('image_tres');
        ?>

        <div><img src="<?php echo esc_url($imageUno['url']); ?>" alt="<?php echo esc_attr($imageUno['alt']); ?>" height="200px"/></div>
        <div><img src="<?php echo esc_url($imageDos['url']); ?>" alt="<?php echo esc_attr($imageDos['alt']); ?>" height="200px"/></div>
        <div><img src="<?php echo esc_url($imageTres['url']); ?>" alt="<?php echo esc_attr($imageTres['alt']); ?>" height="200px"/></div>

        <?php endwhile; ?>

    </div>

    <div class="gallery-single" id="slider-view2">

        <?php
		    while ( have_posts() ) : the_post();
			    $imageUno = get_field('image_uno');
			    $imageDos = get_field('image_dos');
                $imageTres = get_field('image_tres');
        ?>

        <div><img src="<?php echo esc_url($imageUno['url']); ?>" alt="<?php echo esc_attr($imageUno['alt']); ?>" height="200px"/></div>
        <div><img src="<?php echo esc_url($imageDos['url']); ?>" alt="<?php echo esc_attr($imageDos['alt']); ?>" height="200px"/></div>
        <div><img src="<?php echo esc_url($imageTres['url']); ?>" alt="<?php echo esc_attr($imageTres['alt']); ?>" height="200px"/></div>

        <?php endwhile; ?>

    </div>

    <button class="btn btn-dark">Switch</button>
</div>

<?php get_footer(); ?>