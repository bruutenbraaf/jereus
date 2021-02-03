<?php
/*
Template Name: Veelgestelde vragen
*/
get_header(); ?>

<?php if (get_field('omslagfoto_pagina')) { ?>
    <div class="categorie_omslag" style="background:url('<?php the_field('omslagfoto_pagina'); ?>'); background-position: <?php the_field('foto_positie_pagina'); ?>;">

    </div>
<?php } ?>
<div class="container the_content">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-md-12">

                    <?php the_content(); ?>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</div>
<?php if (have_rows('veelgestelde_vragen')) : ?>
    <div class="container faq-content">
        <div class="row">
            <?php while (have_rows('veelgestelde_vragen')) : the_row(); ?>
                <div class="col-md-6 ">
                    <h2><?php the_sub_field('onderwerp'); ?></h2>
                    <?php if (have_rows('veelgestelde_vragen_items')) : ?>
                        <?php while (have_rows('veelgestelde_vragen_items')) : the_row(); ?>
                            <div class="faq">
                                <h3><?php the_sub_field('titel'); ?>
                                    <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7 7L13 1" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </h3>
                                <p><?php the_sub_field('antwoord'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>