<?php
/**
* Template Name: Página Login
*
* @package WordPress
* @author Mais Code Tecnologia
* @since First Version
*/
get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>
<style type="text/css">
    button a{
      color: white;
    }  
    #topol{
        padding-top: 20px;

    }
    #botl{
        padding-bottom: 50px;
    }

</style>

<div class="container">
    <div class="row">
        <div class="col-12">           
            <div class="post" id="post-<?php the_ID(); ?>">
                <h1><?php the_title(); ?></h1>
                <div class="entry">
                    <?php the_content(); ?>
               <div id="topol" class="form-group">
                  <label for="usr">Name:</label>
                  <input type="text" class="form-control" id="usr">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd">
                </div>
                <div id="botl">
                    <button type="button" class="btn btn-success"><a href="https://dev.maiscode.com.br/lamen/">Login</a></button>
                    <button type="button" class="btn btn-warning"><a href="https://dev.maiscode.com.br/lamen/?page_id=44">Cadastre-se</a></button>
                </div>
                </div>
            </div>            
       </div>
    </div>
</div>   
<?php endwhile; endif;

get_footer(); ?>