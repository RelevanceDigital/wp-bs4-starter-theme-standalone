<?php
$titles = [
	"A Blog Title",
	"A Blog Title That's a Little Bit Longer Than the Average",
	"Short One",
	"An Average Length Blog Post Title",
	"Everyone Loves this Life Hack!",
    "Some Blog Posts Have Very Long Titles, so We Need to Make Sure That the Site Styling Can Fit Them In",
];

?>
<article class="clearfix col-md-4">
    <a href="/single.php">
        <img data-src="https://via.placeholder.com/500x300.png?text=Blog+Featured+Image" class="lazyload"
             alt="Logo alt text"/>
    </a>

	<?php //Titles are added by the page editor so we need to test different lengths ?>
    <header class="entry-header">
        <a href="/single.php">
            <h1 class="entry-title"><?php echo $titles[ mt_rand( 0, count( $titles ) - 1 ) ]; ?></h1>
        </a>
    </header>

	<?php //We can set the length of this text so they can all be the same size ?>
    <div class="entry-content">
        <p>Amet augue potenti nisi. Scelerisque pharetra laoreet hendrerit ipsum laoreet sociis donec lobortis
            scelerisque.</p>
    </div>

</article>