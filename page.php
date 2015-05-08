<?php  get_header(  ) ;?>
        <div class="content pull-left">
        	
        	<ul class="breadcrumb">
		       
                       <?php  the_breadcrumb() ?>
	        </ul>
        	
              <?php if(have_posts()) : ?>
        <!-- выполнять the_post(), пока у вас есть  пост в стеке;  -->
        <!-- отобразить пост;  -->
        <?php while(have_posts()) : the_post(); ?>  
        <br/>
        	<div class="post">
        		<h1> <a href="<?php the_permalink() ?>"> <?php the_title( $before = '', $after = '', $echo = true ) ?></a> </h1>
        		<div class="text">
        			<p>  <?php the_content( ) ?></p>
        			
        			 
        			
        		</div>
        		


                        
        	 
        		
        		 
        		
        	</div>
        	
        	<hr />
                <?php endwhile; ?>
        <!-- вызвать ссылки на Следующую и Предыдущую страницы.  -->
        <div class="navigation">
            <?php posts_nav_link(); ?>
        </div>

        <!-- якщо пост незнайдено  -->
        <?php else : ?>

        <div class="post">
            <h2><?php _e('Not Found'); ?></h2>
        </div>

        <?php endif; ?>
              
                
        	
        </div>
        
        
        <?php get_sidebar(  ); ?>
        <?php get_footer(  ) ?>