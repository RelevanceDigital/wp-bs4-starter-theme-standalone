<div class="block-demo-block-1 my-5">
    <div class="block-title text-center">
        <h2>Demo Block 1</h2>
    </div>
	<?php
	$i = 0;
	while ( $i < 3 ) :

		$order = ( $i % 2 == 0 ) ? '' : 'order-md-1';
		?>
        <div class="row my-5">
            <div class="col-md-6 mb-3 mb-md-0 <?php echo $order; ?>">
                <img data-src="https://via.placeholder.com/1920x600.png?text=Some+Huge+Image" data-sizes="auto"
                     data-parent-fit="cover"
                     class="position-relative position-lg-absolute imagecontainer-img-cover lazyload" alt="">
            </div>
            <div class="col-md-6">
                <p>
                    Amet augue potenti nisi. Scelerisque pharetra laoreet hendrerit ipsum laoreet sociis donec lobortis
                    scelerisque. Maecenas ac conubia eget. Consectetur pretium, platea diam. Enim viverra id platea.
                    Adipiscing laoreet mi natoque aliquet. Habitasse vivamus a ipsum ad. Hac integer nunc tristique? Sed
                    nisl vitae phasellus conubia quis amet netus luctus felis tempor sociosqu curabitur. Iaculis dolor
                    mattis torquent habitant massa nec. Fringilla sed facilisi maecenas tristique vulputate laoreet.
                    Aptent, pretium pharetra suscipit donec erat tempus. Primis inceptos cum hendrerit cubilia vehicula
                    nascetur dis. Rhoncus fames nulla id sagittis congue magna morbi, hac nibh maecenas.
                </p>
            </div>
        </div>
		<?php $i ++; endwhile; ?>
</div>

