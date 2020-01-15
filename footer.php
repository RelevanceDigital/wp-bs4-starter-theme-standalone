<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */


$copyright = "Copyright text added in the admin {year}";
?>

	</div><?php // #content ?>

	<footer id="colophon" class="site-footer">
		<div class="site-info container">
			<?php if ( $copyright ) : ?>
                <p class="mb-md-0"><?php echo str_replace( '{year}', date( 'Y' ), $copyright ); ?></p>
			<?php endif; ?>
		</div>
	</footer>
</div><?php // #page ?>

<?php
/*
 * jQuery version is old (1.12.4) but required by WP and some plugins, so don't change it. Security fixes are backported
 * You must use jQuery noconflict mode and replace $ with jQuery
 */
// ?>
<script type='text/javascript' src='assets/js/jquery.js'></script>
<script type='text/javascript' src='assets/js/jquery-migrate.min.js'></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type='text/javascript' src='https://use.fontawesome.com/releases/v5.11.2/js/all.js'></script>
<script type='text/javascript' src='assets/js/site.js'></script>
<script type='text/javascript' src='assets/js/skip-link-focus-fix.js'></script>

</body>
</html>
