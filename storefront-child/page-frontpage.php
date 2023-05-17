<?php get_header() ?>
   

  <div class="box">
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>


        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?php the_field("image1")?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?php the_field("image2")?>" class="d-block w-100" alt="...">
            </div>
        </div>
        </div>

        <div class="clothcontainer">

            <div class="clothbox">
                <a href="http://webshopeasv.local/butik/">
                    <img id="cloth" src="<?php the_field("clothingimage1")?>" alt="..."> 
                    <p class="clothpara"><?php the_field("clothpara1")?></p>
                </a>
            </div>

            <div class="clothbox">
                <a href="http://webshopeasv.local/butik/?wpf_filter_cat_0=16&wpf_fbv=1">
                    <img id="cloth" src="<?php the_field("clothingimage2")?>" alt="...">
                    <p class="clothpara"><?php the_field("clothpara2")?></p>
                </a>
            </div>

            <div class="clothbox">
                <a href="http://webshopeasv.local/butik/?wpf_filter_cat_0=18&wpf_fbv=1">
                    <img id="cloth" src="<?php the_field("clothingimage3")?>" alt="...">
                    <p class="clothpara"><?php the_field("clothpara3")?></p>
                </a>
            </div>

            <div class="clothbox">
                <a href="http://webshopeasv.local/butik/?wpf_filter_cat_0=19&wpf_fbv=1">
                    <img id="cloth" src="<?php the_field("clothingimage4")?>" alt="...">
                    <p class="clothpara"><?php the_field("clothpara4")?></p>
                </a>
            </div>

        </div>




        <div class="sektionmiljo">
            <img id="miljobillede" src="<?php the_field("miljobillede")?>" alt="...">
        </div>



<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img id="miljoprodukt" src="<?php the_field("miljobillede1")?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img id="miljoprodukt" src="<?php the_field("miljobillede2")?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img id="miljoprodukt" src="<?php the_field("miljobillede3")?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img id="miljoprodukt" src="<?php the_field("miljobillede4")?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img id="miljoprodukt" src="<?php the_field("miljobillede5")?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<?php the_content() ?>
    <?php endwhile; ?>
    <?php else: ?>
        <p>Sorry, we did not find any content</p>
    <?php endif; ?>
</div>


<?php get_footer() ?>