    <footer id="footer">
    
        <div class="container">
        
            <?php if ( is_active_sidebar('bottom-sidebar-area') ) : ?>
            
                <!-- FOOTER WIDGET BEGINS -->
                
                    <section class="row widget">
                        <?php dynamic_sidebar('bottom-sidebar-area') ?>
                    </section>
                    
                <!-- FOOTER WIDGET END -->
                
            <?php endif; ?>
    
             <div class="row copyright" >
               
                <div class="span6" >
                
                    <p>
                        <?php if (suevafree_setting('suevafree_copyright_text')): ?>
                           <?php echo esc_html(suevafree_setting('suevafree_copyright_text')); ?>
                        <?php else: ?>
                          <?php _e('Copyright','suevafree'); ?> <?php echo get_bloginfo("name"); ?> <?php echo date("Y"); ?> 
                        <?php endif; ?> 
                        | <?php _e('Theme by','suevafree'); ?> <a href="<?php echo esc_url('https://www.themeinprogress.com/'); ?>" target="_blank">Theme in Progress</a> |
                        <a href="<?php echo esc_url( 'http://wordpress.org/'); ?>" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_s' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
        
                    </p>
                    
                </div>
                
                <div class="span6" >
                
                    <!-- start social -->
                    
                    <div class="socials">
                    
                        <?php do_action('suevafree_socials'); ?>
                   
                    </div>
                    
                    <!-- end social -->
    
                </div>
                
            </div>
            
        </div>
        
    </footer>
    
</div>

    <?php if ( (!suevafree_setting('suevafree_view_back_to_top') ) || ( suevafree_setting('suevafree_view_back_to_top') == "on" ) ): ?>
    
        <div id="back-to-top"> <i class="icon icon-chevron-up"></i> </div>
	
    <?php endif; ?>
    

<?php wp_footer() ?>   

</body>

</html>