<?php get_header() ?>


<div class="kontaktside">
        <div class="kontaktvenstre">

            <div class="kontaktboks">
                <div class="indrevenstre">
                    <img id="kontaktikon" src="<?php the_field("tlfikon")?>" alt="...">
                </div>
                <div class="indrehojre">
                    <p class="kontakttekst"><?php the_field("kontakttekst")?></p>
                    <p class="kontaktinfo"> <br> <?php the_field("tlfnummer")?></p>
                </div>
            </div>

            <div class="kontaktboks">
                <div class="indrevenstre">
                    <img id="kontaktikon" src="<?php the_field("mailikon")?>" alt="...">
                </div>
                <div class="indrehojre">
                    <p class="kontakttekst"><?php the_field("mailtekst")?></p>
                    <p class="kontaktinfo"> <br> <?php the_field("mailmail")?></p>
                </div>


            </div>

            </div>
   




        

        <div class="kontakthojre">
            <?php echo do_shortcode('[wpforms id="96"]'); ?>
        </div>

        </div>
       





<?php get_footer() ?>