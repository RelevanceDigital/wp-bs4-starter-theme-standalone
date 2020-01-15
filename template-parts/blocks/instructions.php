<div class="block-instructions my-5">
    <div class="block-title text-center">
        <h2>WP BS Standalone Starter Template</h2>
    </div>

    <div class="block-content row justify-content-center">
        <div class="col-md-8">
            <p>This starter template is intended for use with the <a
                        href="https://github.com/RelevanceDigital/wp-bs4-starter-theme" target="_blank">WordPress
                    Bootstrap
                    Starter Theme</a>. It uses the same content and folder structure as the WordPress starter, but
                WordPress
                is not required for it to run. Frontend developers can use it with dummy content and then pass it to a
                backend developer to convert into a WordPress theme with minimal effort.</p>
            <h2>Some Things To Remember</h2>
            <p><strong>Use Bootstrap!</strong> The framework contains everything needed to scafold a site, so don't
                reinvent the wheel by rewriting things that already exist. <br>You can see how changes affect Bootstrap
                elements by checking the <a href="bootstrap.php">Bootstrap test page</a>.</p>
            <p><strong>Build with utility classes.</strong> Bootstrap is a utility class based framework. Try and write
                your SASS in the same way by creating small reusable classes rather than writing specific styling for
                every content element.</p>
            <p><strong>Mobile First!</strong> Bootstrap is a mobile first framework. Don't style the desktop first and
                then add media queries for smaller screens. The styling for small screens should be the default and
                anything additional for desktop should be wrapped in a media query (Use the Bootstrap mixins).</p>
            <p><strong>Don't undo global styles.</strong> Content will be added by end users who expect unordered lists
                to have bullet
                points. If you want to remove them in a specific area then use the bootstrap class
                <code>list-unstyled</code> or create a similar class for your use case.</p>
            <h3>WordPress Specific Quirks</h3>
            <p>The blocks you create here will be converted into reusable blocks for the Gutenberg editor. This adds
                some complexity that doesn't exist when creating a normal HTML page.</p>
            <p>The Gutenberg editor comes with a bunch of core blocks. Since we don't have control over the output of
                blocks that we don't code ourselves, <strong>the main content area of the site must be wrapped in
                    a container</strong>.<br> Each block must also be valid HTML, so we cannot break the container and
                open it
                again to create a section that is as wide as the browser.</p>
            <p>For this reason, we have a class named <code>alignfull</code> which will stretch content to the width of
                the browser by breaking it out of the container with negative margins. <br>Use this on a wrapping
                element if you need a block to be full-width. (See demo block 2 below for an example.)</p>
        </div>
    </div>
</div>