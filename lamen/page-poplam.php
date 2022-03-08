<?php
/**
* Template Name: Página Popular lamen
*
* @package WordPress
* @author Mais Code Tecnologia
* @since First Version
*/

get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">
    <div class="row">
        <div class="col-12">           
            <div class="post" id="post-<?php the_ID(); ?>">
                <h1><?php the_title(); ?></h1>
                <div class="entry">
                    <?php the_content(); ?>
                <h1>Qual brasileiro nunca comeu lamen?</h1>
                <p>Temos certeza que essa pergunta é muito complicada de ser respondida. Tendo em vista, que esse alimento é um dos mais famosos no nosso país. Conhecido como miojo, o Nissin Chicken Ramen, foi o primeiro lámen instantâneo existente no mercado. Lançado pela Nissin Alimentos em 1958, ele fez com que o nome lámen descarta-se o termo china soba das ruas.</p>
                 </div>
                  <img src="<?php bloginfo('template_url'); ?>/img/naruto.jpg"> 
            </div>
            <div style="padding-top: 20px" class="row">
                <div class="col-4">
                    <h5>De onde vêm o Lámen?</h5>
                    <p>Primeiramente, o Lámen vem da China.  Embora tenha sido incorporado à culinária japonesa há um bom tempo, ele é um prato chinês. A fim de entender melhor como isso aconteceu, é importante olharmos para a história.

                    Segundo fontes históricas, o primeiro japonês a provar o prato foi certamente Mitsukuni Tokugawa, um grande senhor feudal, em 1665. Apesar disso, não foi nesse período que Lámen se popularizou no Japão.</p>
                    <a style="color: blue" href="https://dev.maiscode.com.br/lamen/?page_id=19">Veja mais sobre a história do lamen!</a>
                </div>
                <div class="col-4">
                    <h5>Como se estabeleceu no Japão?</h5>
                    <p>Primeiramente, em 1872,  quando se iniciou a Era Meiji, ocorreu a abertura dos portos japoneses e, consequentemente, o comércio exterior ganhou força. Essa mudança de cenário, proporcionou a instauração do primeiro bairro chinês no Japão, o Chuukagai, na cidade do porto Yokohama, no ano de 1872.

                    Além disso, foi nesse bairro que nasceram os primeiros restaurantes chineses em território japonês. Eles foram fundamentais para popularização do lámen, que ficou conhecido como “chuuka soba” ou “china soba”.

                    Por fim, mais tarde, em 1899, ocorreu um tratado entre os dois países. No qual, facilitou a locomoção desses povos. E proporcionou que os chineses vendessem o china soba em barracas de rua.</p>
                </div>
                <div class="col-4">
                    <h5>Bateu aquela fome, e agora? Como faço o lámen?</h5>
                    <p>A principio, para o preparo, utilize os elementos do seu desejo, adicione água e alguns temperos como cebola, alho, gengibre e até aqueles tabletes de sabor industrializado. Logo após, ferva e tire a primeira espuma produzida. Por último, deixe cozinhar por umas cinco horas.

                    Em seguida, ocorre o preparo do macarrão. Há três tipos que podem ser utilizados, o kansômen (desidratado), o namamen (fresco), e o instant ramen (instantâneo). O primeiro é o mais comum para o preparo em casa, ele dura um bom tempo quando conservado. Em segundo lugar, o fresco é mais visto em restaurantes onde a tendência é ele ser consumido mais rápido.</p>
                    
                </div>
                
            </div>
            <section>
                <h3>Gostou do site?</h3>
                <div class="form-group">
                  <label for="comment">Deixe seu comentário:</label>
                  <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                 <button class="btn btn-danger" data-toggle="collapse" data-target="#myDIV" style="width:20%">Enviar!</button>
            </section>
            </div>            
       </div>
    </div>
</div>   
<?php endwhile; endif;

get_footer(); ?>