<?php
/**
 * The blog listing page
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
        <main id="main" class="site-main container">

            <div class="row">
                <?php //We include the same file 9 times here to generate some listings ?>
	            <?php $i = 0; while ($i < 9) {
		            include "template-parts/content-blog.php";
		            $i++;
	            } ?>

                <?php //Dummy pagination ?>
                <div class="col-12 my-3">
                    <ul class="page-numbers">
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="/">2</a></li>
                        <li><a class="next page-numbers" href="/">Next »</a></li>
                    </ul>
                </div>
                <?php //end pagination ?>
            </div>

        </main>
    </div>

<?php include "footer.php";
