 <?php  get_header();  ?>
        
        <div class="content pull-left">
        	
<form role="search" method="get" id="searchform" class="form-search" >
    <div class="input-append">
        <input type="text" value="" name="s" id="s" class="search-query" />
        <button type="submit" class="btn">Искать</button>
    </div>
</form>

<?php the_search_query() ?>

  <!-- проверить есть ли у вас пост;  -->
        <?php if(have_posts()) : ?>
        <!-- выполнять the_post(), пока у вас есть  пост в стеке;  -->
        <!-- отобразить пост;  -->
        <?php while(have_posts()) : the_post(); ?>

        	<div class="post">
        		<h1><a href=" <?php the_permalink(); ?>"> <?php the_title(); ?></a> <span><i class="icon-comment"></i> 
                <a href="#">
                 <?php comments_popup_link( '0  ;', '1  ;', '% ') ?>

                </a></span></h1>
        		<div class="image">
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
        	<hr />
        	
         
        	</div>
        	
        	<hr />
        	
        	<div class="pagination">
		        <ul>
			        <li><a href="#">Назад</a></li>
			        <li><a href="#">1</a></li>
			        <li><a href="#">2</a></li>
			        <li><a href="#">3</a></li>
			        <li><a href="#">4</a></li>
			        <li><a href="#">Вперед</a></li>
		        </ul>
	        </div>
        	
        </div>
        
<?php  get_sidebar();  ?>

<?php  get_footer ();  ?>
        
       