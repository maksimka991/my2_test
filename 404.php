 <?php  get_header();  ?>
        
        <div class="content pull-left">
        	
  not

  <?php   
    if ( function_exists( 'add_theme_support' ) )
    the_post_thumbnail( array(250,9999), array('class' => 'img-polaroid') ); 
?>
				</div>
        		<div class="text">
        			<p>
                        <!-- вивести скорочену статтю  або цититу -->
            <?php  the_excerpt() ?>
             <!-- вивести повну статтю  або скорочену через тег море-->
                <?php //the_content(); ?>

                     </p>
                     <br><br> <br>
 
        			
        			<a href="<?php the_permalink(); ?>" class="btn btn-success">Читать полностью</a>
        		</div>
        	</div>
                
        	 
        <!-- вызвать ссылки на Следующую и Предыдущую страницы.  -->
        <div class="navigation">
            <?php posts_nav_link(); ?>
        </div>

        <!-- якщо пост незнайдено  -->
         

       
 
    </div>
        	 
         
        	</div>
        	
        	 
        	
        	 
        	
        </div>
        
<?php  get_sidebar();  ?>

<?php  get_footer ();  ?>
        
       