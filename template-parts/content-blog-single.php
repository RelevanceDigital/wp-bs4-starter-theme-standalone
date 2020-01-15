<?php
$titles = [
	"A Blog Title",
	"A Blog Title That's Quite Long",
	"Short One",
	"Get Smart with this one weird trick!",
	"Everyone Loves this Life Hack!",
	"This is a really cool blog post that I just HAVE to totally describe in the blog title to get you interested",
];

?>
<article class="clearfix">
	<img data-src="https://via.placeholder.com/1920x600.png?text=Blog+Featured+Image" class="lazyload"
	     alt="Logo alt text"/>

	<?php //Titles are added by the page editor so we need to test different lengths ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php echo $titles[ mt_rand( 0, count( $titles ) - 1 ) ]; ?></h1>

		<?php //The following meta comes from custom functions, so we can modify the output if needed ?>
		<div class="entry-meta">
		    <span class="posted-on">Posted on
			    <a href="#" rel="bookmark">
			    <time class="entry-date published updated" datetime="2020-01-15T08:00" itemprop="datePublished">15th January 2020</time>
			    </a>
		    </span>
			<span class="byline">by
			    <span class="author vcard"><a class="url fn n" href="#">Robert Went</a></span>
		    </span>
		</div>
	</header>

	<div class="entry-content">
		<?php //The Editor output. Replace this by including some content blocks ?>
		<p>Replace this text by including some content blocks from /template-parts/blocks.</p>
	</div>

</article>