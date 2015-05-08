<?php  get_header(  ) ;?>
        <div class="content pull-left">
        	
        	<ul class="breadcrumb">
		        <li><a href="#">Главная</a> <span class="divider">/</span></li>
		        <li><a href="#">Спецэффекты</a> <span class="divider">/</span></li>
		        <li class="active">Заголовок статьи</li>
	        </ul>
        	
              <?php if(have_posts()) : ?>
        <!-- выполнять the_post(), пока у вас есть  пост в стеке;  -->
        <!-- отобразить пост;  -->
        <?php while(have_posts()) : the_post(); ?>  
        <br/>
        	<div class="post">
        		<h1>Заголовок новости</h1>
        		<div class="text">
        			<p>  <?php the_content( ) ?></p>
        			
        			<span class="label label-warning">Метки статьи</span>
        			<div class="meta"><i class="icon-tags"></i> <a href="#">метка</a>, 

                                <?php _e( 'Категории:'); ?> 
                                <?php the_category( ', ') ?>.</div>
        			
        		</div>
        		


                        
        		<hr />
        		
        		<h1>Комментарии <span><i class="icon-comment"></i> <a href="#">11</a></span></h1>
        		
        		 <?php comments_template( $file = '/comments.php', $separate_comments = false ) ?>
        		
        		 
        		
        		 
        		
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