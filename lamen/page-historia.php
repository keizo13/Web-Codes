<?php
/**
* Template Name: Página historia
*
* @package WordPress
* @author Mais Code Tecnologia
* @since First Version
*/
get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>
<style>
h3{
    text-align: center;
    padding-bottom: 20px;
}
#esphist{
    padding-bottom: 20px;
    }
#sectop{
    padding-bottom: 20px;
}
iframe{
    padding-bottom: 20px;
}


</style>



<section id="sectop">
    <img src="<?php bloginfo('template_url'); ?>/img/lamen2.jpeg">    
</section>
<div class="container">
    <div class="row">
        <div class="col-12">           
            <div class="post" id="post-<?php the_ID(); ?>">
                <h1><?php the_title(); ?></h1>
                <div class="entry">
                    <?php the_content(); ?>
               
              
                    <div>
                    <p>
                    As casas de lámen, que vendem esse macarrão em vasilhas fumegantes com um caldo reforçado com carne, ovo, alga e legumes, estão se popularizando no Brasil. Antes disso, porém, essa massa já havia caído no gosto dos brasileiros na forma de macarrão instantâneo. Mas, afinal de contas, de onde veio o lámen  — ou rámen, como gostam de chamar os japoneses e os americanos?</p>
                    <p>O prato, na verdade, foi criado na China (onde se diz lámen, como aqui) e chegou ao Japão no final do século 19, explica o Nexo. Originalmente, era um macarrão com caldo coberto por carne de porco assada ao estilo chinês.</p>
                    <p>Mas, no final da Segunda Guerra Mundial, a destruição das colheitas de arroz no Japão e a grande importação de trigo dos Estados impulsionaram o consumo de lámen pelos japoneses. Em pouco tempo, o lámen passou a ser largamente consumido pelos trabalhadores das cidades japonesas, e na década de 1950 a marca Nissin lançou a versão instantânea do macarrão.</p>
                    <h2>China-soba a Lámen</h2>
                    <p>Foi nessa época também que o prato começou a fazer parte do cardápio dos restaurantes chineses de São Paulo. Era chamado de china-soba, um ensopado de macarrão com legumes e carnes com caldo de molho de ostra e shoyu. Mas foi só nos anos 1970 que a versão japonesa do lámen surgiu nos cardápios dos restaurantes nipônicos.</p>
                    <p>Hoje, o lámen deixou de ser um apêndice dos cardápios para se tornar o protagonista de muitos restaurantes asiáticos. O escritor Jo Takahashi, que vai lançar o livro "A História do Ramen" em 2019, revela o segredo do sabor. “O caldo leva mais de dez horas na preparação, pois é resultado da extração do tutano dos ossos de porco, da carcaça de galinha, do cogumelo shiitake seco e da alga kombu, que criam o umami, o quinto gosto.”</p>
                    <p>Depois disso, o caldo é temperado com sal, shoyu e missô (pasta de soja) e recebe ingredientes como o chashu (o lombo de porco cozido e cortado em fatias), o broto de bambu e verduras (como repolho refogado). “Cada casa de lámen tem o seu segredo, mas o maior segredo está no caldo. Longas horas de cozimento e equilíbrio na mistura dos temperos fazem toda a diferença”, diz Takahashi.</p>
                    <p>E como devemos comer o lámen? A maneira correta é afundar as carnes e começar a comer pelo macarrão, antes que ele perca a textura al dente — pode pegar poucos fios de macarrão e sugá-los sem vergonha de fazer barulho. Assim, ingerimos ar e o macarrão esfria na boca. Erguer a tigela para beber o caldo também está liberado.</p>
                    </div>

                </div>
                <div class="container">
                 <div id="esphist" class="row">
                    
                    <div class="col-4">
                        <div>
                            <h5>O que você gosta de comer?</h5>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">missoshiro
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Sushi
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Lamen
                              </label>

                            </div>
                             <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Soba
                              </label>
                            </div>
                             <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Yakissoba
                              </label>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm">Send</button>

                        </div>
                    </div>
                    <div class="col-4"> 
                        <h5>Lamens Mais Populares!</h5>
                        
                        <ol>
                            <li>Tokotsu</li>
                            <li>Shoyu Lamen</li>
                            <li>Missô Lamen</li>
                            <li>Tantanmen</li>
                            <li>Lamen Frio</li>
                        </ol>
                    </div>
                  
                    <div class="col-4">
                         <h5>Sites de restaurantes de lamen</h5>    
                     <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="http://www12.plala.or.jp/nakiryu/">Nakiryu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://www.harusushi.com.br/">Haru</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://www.kageyamarou.com/">Toripaitan Kageyama</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://www.ushio-sumiyaki.com/">Ushio</a>
                    </li>
                     </ul>   

                    </div>
                    </div>   
                    <div class="row">
                        <div class="col-6">
                            <h3>Vídeo: Museu do lámem no JN</h3>
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/qWF6ZRUudSQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div> 
                        <div class="col-6">
                            <h3>Mapa: Encontre o museu</h3>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3247.7745170582493!2d139.6123633147411!3d35.509853346960256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185ed3fd002a35%3A0x8c6f8fc9f265028c!2sMuseu%20do%20Ramen%20de%20Shin-Yokohama!5e0!3m2!1spt-BR!2sbr!4v1614089933945!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                   
                </div>
            </div>
            </div>            
       </div>
    </div>
</div>   
<?php endwhile; endif;

get_footer(); ?>