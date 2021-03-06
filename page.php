<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

include "header.php";
?>

<div id="primary" class="content-area">
        <main tabindex="-1" id="main" class="site-main container">

			<?php include 'template-parts/content-page.php'; ?>

        </main>

</div>
<?php include "footer.php"; ?>
