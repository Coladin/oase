<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Oase
 * @subpackage Oase
 */

get_header();
?>

    <main id="site-content" role="main">


        <div class="flex bg-gray-200">
            <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">Home</div>
            <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">Wohnungsbeispiel</div>
            <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">Detailierte Beschreibung</div>
            <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">3D Visualisierung</div>
        </div>

        <p class="text-center mt-12">
            Moderne & bezahlbare, barrierefreie Neubau-Seniorenwohnungen im Erstbezug PROVISIONSFREI vom Bauherr<br>
            Direkt am RE-Bahnhof Nauen, verkehrstechnisch sehr gut gelegen<br>
            Professionelle ambulante Pflege vor Ort, Ärtzte sowie Fisiotherapie im Haus<br>
            Rezeption 24 h / medizinische Notfallbereitschaft 24 h / eigene security 24 h<br>
            Vom Friseur über SPA / Physiotherapie bis zur eigenen gesunden & preiswerten Kantine - alles vor Ort
        </p>

        <p class="px-6 border text-red-600 text-center mt-12">Eine unverbindliche<span class="px-20">WOHNUNGSBEWERBUNG</span>ausfüllen !</p>

        <div class="flex bg-gray-200 mt-8">
            <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">Anmelden, um als erster wichtige Neuigkeiten zu erhalten</div>
            <div class="flex-1 text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">Einem Freund per E-Mail empfehlen</div>
        </div>
        <?php

        if ( have_posts() ) {

            $i = 0;

            while ( have_posts() ) {
                $i++;
                if ( $i > 1 ) {
                    echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
                }
                the_post();

                get_template_part( 'template-parts/content', get_post_type() );

            }
        } elseif ( is_search() ) {
            ?>

            <div class="no-search-results-form section-inner thin">

                <?php
                get_search_form(
                    array(
                        'label' => __( 'search again', 'twentytwenty' ),
                    )
                );
                ?>

            </div><!-- .no-search-results -->

            <?php
        }
        ?>

        <?php get_template_part( 'template-parts/pagination' ); ?>

    </main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
