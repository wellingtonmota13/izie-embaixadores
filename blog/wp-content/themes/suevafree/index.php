
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Izie - Empresas</title>

    <!-- Bootstrap Core CSS -->
    <link href="inc/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="inc/css/iziestyle.css" rel="stylesheet">
    <link href="inc/css/full-width-pics.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<?php 

	get_header();
	
	if ( have_posts() ) : 
	
?>

<div class="container">

	<div class="row" id="blog" >
    
	<?php if ( ( suevafree_template('sidebar') == "left-sidebar" ) || ( suevafree_template('sidebar') == "right-sidebar" ) ) : ?>
        
        <div class="<?php echo suevafree_template('span') .' '. suevafree_template('sidebar'); ?>"> 
        	
            <div class="row"> 
        
    <?php 
	
		endif;
		
		while ( have_posts() ) : the_post(); 
		
	?>

            <div <?php post_class(); ?> >
    
				<?php do_action('suevafree_postformat'); ?>
        
                <div style="clear:both"></div>
            
            </div>
		
		<?php endwhile; else:  ?>

            <div class="pin-article <?php echo suevafree_template('span'); ?>" >
    
                <article class="article category">
                    
                    <h1> Not found </h1>
                    <p><?php _e( 'Sorry, no posts found.',"suevafree" ) ?></p>
     
                </article>
    
            </div>
	
	<?php 
	
		endif;
		
		if ( ( suevafree_template('sidebar') == "left-sidebar" ) || ( suevafree_template('sidebar') == "right-sidebar" ) ) : ?>
        
            </div>
         
         </div>
        
    <?php 
	
		endif;
		
		if ( suevafree_template('span') == "span8" ) : 
	
	?>

    <!-- HOME WIDGET -->

    <section id="sidebar" class="pin-article span4">
    
    	<div class="sidebar-box">

			<?php if ( is_active_sidebar('home_sidebar_area') ) { 
            
				dynamic_sidebar('home_sidebar_area');
            
            } else { 
                
                the_widget( 'WP_Widget_Archives','',
				array('before_widget' => '<div class="widget-box">',
					  'after_widget'  => '</div>',
					  'before_title'  => '<h4 class="title">',
					  'after_title'   => '</h4>'
				));

                the_widget( 'WP_Widget_Calendar',
				array("title"=> __('Calendar','suevafree')),
				array('before_widget' => '<div class="widget-box">',
					  'after_widget'  => '</div>',
					  'before_title'  => '<h4 class="title">',
					  'after_title'   => '</h4>'
				));

                the_widget( 'WP_Widget_Categories','',
				array('before_widget' => '<div class="widget-box">',
					  'after_widget'  => '</div>',
					  'before_title'  => '<h4 class="title">',
					  'after_title'   => '</h4>'
				));
            
             } 
			 
			 ?>

            </div>
            
        </section>

	<!--  END HOME WIDGET -->

	<?php endif;?>

    </div>
    
</div>

<?php

	get_template_part('pagination');
	get_footer(); 

?>