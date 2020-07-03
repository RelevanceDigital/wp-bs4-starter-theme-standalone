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
 * @package _s
 */

include "header.php";
?>

    <div id="primary" class="content-area">
        <main tabindex="-1" id="main" class="site-main container">

	        <?php include "template-parts/blocks/instructions.php"; ?>

			<?php include "template-parts/blocks/demo-block-1.php"; ?>

			<?php include "template-parts/blocks/demo-block-2.php"; ?>

        </main>
    </div>

<?php include "footer.php";
