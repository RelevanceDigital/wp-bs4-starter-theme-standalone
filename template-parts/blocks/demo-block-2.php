<div class="block-demo-block-1 alignfull my-5">
    <div class="container">
        <div class="block-title text-center">
            <h2>Demo Block 2 - Full Width Image</h2>
            <p>The image breaks out of the container to fill the width of the screen.</p>
            <p>Use the class <code>alignfull</code> on the block wrapper to break out of the container.<br>
            This is required as the page content needs to be wrapped in a container to prevent the output of the core editor blocks being the width of the page.<br>
            Each block must be valid HTML so it's not possible to break the container and then open it up again.<br>
            So use <code>alignfull</code> to make the block full width and then add a container within if needed.</p>
        </div>
    </div>
    <div class="demo-full-width-image">
        <img data-src="https://via.placeholder.com/1920x1200.png?text=Some+Huge+Image+Using+object-fit:+'cover'+With+A+Fixed+Height+Wrapper" data-sizes="auto"
             data-parent-fit="cover"
             class="position-relative position-lg-absolute imagecontainer-img-cover lazyload" alt="">
    </div>
</div>

<?php //Don't add styles here, this is just an example. ?>
<style>
    .demo-full-width-image {
        height: 35rem;
    }
</style>