<?php
/**
 * The following is taken from https://github.com/juzraai/bootstrap4-test-page
 * Currently buggy with the sticky nav
 */

include "header.php";
?>
    <style>
        #typography {
            margin-top: -3rem;
        }

        .modal {
            position: relative;
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            z-index: 1;
            display: block;
        }
        .site {
            overflow-x: visible;
        }
    </style>
    <div id="primary" class="content-area">

        <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar"
                        aria-controls="my-navbar" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="my-navbar">
                    <div class="navbar-nav mr-auto">


                        <a class="nav-item nav-link" href="#typography"
                           data-toggle="tooltip" data-placement="bottom" title="Typography">
                            <span class="fa fa-paragraph mx-2"></span>
                            <span class="d-md-none">Typography</span>
                        </a>


                        <a class="nav-item nav-link" href="#images"
                           data-toggle="tooltip" data-placement="bottom" title="Images">
                            <span class="far fa-image mx-2"></span>
                            <span class="d-md-none">Images</span>
                        </a>


                        <a class="nav-item nav-link" href="#tables"
                           data-toggle="tooltip" data-placement="bottom" title="Tables">
                            <span class="fa fa-table mx-2"></span>
                            <span class="d-md-none">Tables</span>
                        </a>


                        <a class="nav-item nav-link" href="#list-groups"
                           data-toggle="tooltip" data-placement="bottom" title="List groups">
                            <span class="fa fa-list-ul mx-2"></span>
                            <span class="d-md-none">List groups</span>
                        </a>


                        <a class="nav-item nav-link" href="#buttons"
                           data-toggle="tooltip" data-placement="bottom" title="Buttons">
                            <span class="fa fa-square mx-2"></span>
                            <span class="d-md-none">Buttons</span>
                        </a>


                        <a class="nav-item nav-link" href="#jumbotrons"
                           data-toggle="tooltip" data-placement="bottom" title="Jumbotrons">
                            <span class="fa fa-bookmark mx-2"></span>
                            <span class="d-md-none">Jumbotrons</span>
                        </a>


                        <a class="nav-item nav-link" href="#cards"
                           data-toggle="tooltip" data-placement="bottom" title="Cards">
                            <span class="far fa-square mx-2"></span>
                            <span class="d-md-none">Cards</span>
                        </a>


                        <a class="nav-item nav-link" href="#forms"
                           data-toggle="tooltip" data-placement="bottom" title="Forms">
                            <span class="fas fa-pencil-alt mx-2"></span>
                            <span class="d-md-none">Forms</span>
                        </a>


                        <a class="nav-item nav-link" href="#navs"
                           data-toggle="tooltip" data-placement="bottom" title="Navs">
                            <span class="fa fa-bars mx-2"></span>
                            <span class="d-md-none">Navs</span>
                        </a>


                        <a class="nav-item nav-link" href="#badges"
                           data-toggle="tooltip" data-placement="bottom" title="Badges">
                            <span class="fa fa-tag mx-2"></span>
                            <span class="d-md-none">Badges</span>
                        </a>


                        <a class="nav-item nav-link" href="#alerts"
                           data-toggle="tooltip" data-placement="bottom" title="Alerts">
                            <span class="fa fa-exclamation-triangle mx-2"></span>
                            <span class="d-md-none">Alerts</span>
                        </a>


                        <a class="nav-item nav-link" href="#popovers"
                           data-toggle="tooltip" data-placement="bottom" title="Popovers">
                            <span class="fa fa-info-circle mx-2"></span>
                            <span class="d-md-none">Popovers</span>
                        </a>


                        <a class="nav-item nav-link" href="#progress-bars"
                           data-toggle="tooltip" data-placement="bottom" title="Progress bars">
                            <span class="fa fa-spinner mx-2"></span>
                            <span class="d-md-none">Progress bars</span>
                        </a>


                        <a class="nav-item nav-link" href="#modals"
                           data-toggle="tooltip" data-placement="bottom" title="Modals">
                            <span class="fa fa-window-restore mx-2"></span>
                            <span class="d-md-none">Modals</span>
                        </a>

                    </div>
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="https://getbootstrap.com/docs/4.4/" target="_blank"
                           data-toggle="tooltip" data-placement="bottom" title="Bootstrap documentation">
                            <span class="fa fa-book mx-2"></span>
                            <span class="d-md-none">Bootstrap documentation</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <main id="main" class="site-main">

            <section class="mb-5 pt-5" id="typography">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="fa fa-paragraph mr-1"></span>
                                Typography
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/content/typography/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Typography docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/content/code/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Code docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/utilities/colors/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Color utility docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/utilities/text/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Text utility docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row px-5">
                        <div class="col-md-6">
                            <h3 class="mt-5">Headings</h3>
                            <h1>h1. Bootstrap heading</h1>
                            <h2>h2. Bootstrap heading</h2>
                            <h3>h3. Bootstrap heading</h3>
                            <h4>h4. Bootstrap heading</h4>
                            <h5>h5. Bootstrap heading</h5>
                            <h6>h6. Bootstrap heading</h6>

                            <h3 class="mt-5">Lead</h3>
                            <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis
                                mollis, est non commodo luctus.</p>

                            <h3 class="mt-5">Styles</h3>
                            <p>You can use the mark tag to
                                <mark>highlight</mark>
                                text.
                            </p>
                            <p>
                                <del>This line of text is meant to be treated as deleted text.</del>
                            </p>
                            <p>
                                <s>This line of text is meant to be treated as no longer accurate.</s>
                            </p>
                            <p>
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                            </p>
                            <p>
                                <u>This line of text will render as underlined</u>
                            </p>
                            <p><small>This line of text is meant to be treated as fine print.</small></p>
                            <p><strong>This line rendered as bold text.</strong></p>
                            <p><em>This line rendered as italicized text.</em></p>
                            <p class="text-muted">And this is a muted text.</p>
                            <p><abbr title="Abbreviation">abbr</abbr> <abbr title="Abbreviation with initialism"
                                                                            class="initialism">abbr+init</abbr></p>

                            <h3 class="mt-5">Colors</h3>
                            <p>

                                <span class="text-primary">.text-primary</span>

                                <span class="text-secondary">.text-secondary</span>

                                <span class="text-success">.text-success</span>

                                <span class="text-danger">.text-danger</span>

                                <span class="text-warning">.text-warning</span>

                                <span class="text-info">.text-info</span>

                                <span class="text-light">.text-light</span>

                                <span class="text-dark">.text-dark</span>

                                <span class="text-white">.text-white</span>

                            </p>
                            <p>

                                <span><a href="#" class="text-primary">Primary link</a></span>

                                <span><a href="#" class="text-secondary">Secondary link</a></span>

                                <span><a href="#" class="text-success">Success link</a></span>

                                <span><a href="#" class="text-danger">Danger link</a></span>

                                <span><a href="#" class="text-warning">Warning link</a></span>

                                <span><a href="#" class="text-info">Info link</a></span>

                                <span><a href="#" class="text-light">Light link</a></span>

                                <span><a href="#" class="text-dark">Dark link</a></span>

                                <span><a href="#" class="text-white">White link</a></span>

                            </p>

                            <h3 class="mt-5">Inline code</h3>
                            <p>For example, <code>&lt;section&gt;</code> should be wrapped as inline.</p>
                            <p><var>y</var> = <var>m</var><var>x</var> + <var>b</var></p>
                            <p>To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br> To
                                edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>
                            </p>
                            <p><samp>This text is meant to be treated as sample output from a computer program.</samp>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">Displays</h3>
                            <h1 class="display-1">Display 1</h1>
                            <h1 class="display-2">Display 2</h1>
                            <h1 class="display-3">Display 3</h1>
                            <h1 class="display-4">Display 4</h1>

                            <h3 class="mt-5">Sample body</h3>
                            <p class="text-justify">
                                Lórum ipse - mint senyért - nyált <a href="javascript:void(0)">ságos iség</a>, ahol
                                beles metás, csaprozás, vermény, csaprát
                                és más meni zsorlóca kuncáskodik. Mosztag, férzet napé, fuvódás 11, törnyélés ; valamint
                                szuvegés vitancs: a dozmus drikója,
                                jultsás kelés magyarul. A szuvegés és gyarány pasztákban buggyos mendernyékről,
                                filingéjükről és pucájukról húzódik a
                                fabampa. Hűtő benne a legújabban belég mendernyék mártja is, részletesen sáskodik a
                                kétenc fríg lepkonyaival. Csétletésről
                                cigál le egy kéző lengelész csapárába rimulnia, ahol három másik szivény együtt érleti
                                spotráit. Ha a bénulás summája
                                kalkodik, úgy púdulhat, mintha az volna a sülső csoltása, hogy a szedhentes és egyes
                                tengyelét lécetse ki a pávágyokból.
                                Ez vajon vertető ölyök vagy vegítő dosna? Szalalizál bunya a felegesben olyan szellőző
                                kedő, amely farisban kevetteti
                                a nyagondos hizmusok „énemlő” lárias mizmusait?
                            </p>

                            <h3 class="mt-5">Code block</h3>
                            <pre><code>/**
 * @author John Smith &lt;john.smith@example.com&gt;
 */
package l2f.gameserver.model;

public abstract class L2Char extends L2Object {
	public static final Short ERROR = 0x0001;

	public void moveTo(int x, int y, int z) {
		_ai = null;
		log("Should not be called");
		if (1 &gt; 5) { // wtf!?
			return;
		}
	}
}</code></pre>
                        </div>
                    </div>
                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">Blockquote</h3>
                            <blockquote class="blockquote">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                        Title</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">...centered</h3>
                            <blockquote class="blockquote text-center">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                        Title</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">...on right</h3>
                            <blockquote class="blockquote text-right">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                        Title</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row px-5">
                        <div class="col-4">
                            <h3 class="mt-5">List</h3>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit
                                    <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                                <li>Eget porttitor lorem</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <h3 class="mt-5">...unstyled</h3>
                            <ul class="list-unstyled">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit
                                    <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                                <li>Eget porttitor lorem</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <h3 class="mt-5">...inline</h3>
                            <ul class="list-inline">
                                <li class="list-inline-item">Lorem ipsum</li>
                                <li class="list-inline-item">Phasellus iaculis</li>
                                <li class="list-inline-item">Nulla volutpat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">Definition list</h3>
                        </div>
                    </div>
                    <dl class="row px-5">
                        <dt class="col-sm-3">Description lists</dt>
                        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                        <dt class="col-sm-3">Euismod</dt>
                        <dd class="col-sm-9">
                            <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                            <p>Donec id elit non mi porta gravida at eget metus.</p>
                        </dd>

                        <dt class="col-sm-3">Malesuada porta</dt>
                        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                        <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                            fermentum massa justo sit amet risus.
                        </dd>

                        <dt class="col-sm-3">Nesting</dt>
                        <dd class="col-sm-9">
                            <dl class="row">
                                <dt class="col-sm-4">Nested definition list</dt>
                                <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit
                                    nunc.
                                </dd>
                            </dl>
                        </dd>
                    </dl>

                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">Background colors</h3>
                        </div>


                        <div class="col-md-4">
                            <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
                        </div>


                        <div class="col-md-4">
                            <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
                        </div>


                        <div class="col-md-4">
                            <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
                        </div>


                        <div class="col-md-4">
                            <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
                        </div>


                        <div class="col-md-4">
                            <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
                        </div>


                        <div class="col-md-4">
                            <div class="p-3 mb-2 bg-info text-white">.bg-info</div>
                        </div>


                        <div class="col-md-4">
                            <div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
                        </div>


                        <div class="col-md-4">
                            <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
                        </div>


                        <div class="col-md-4">
                            <div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
                        </div>

                    </div>
                </div>

            </section>

            <section class="mb-5 pt-5" id="images">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="far fa-image mr-1"></span>
                                Images
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/content/images/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Image docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/content/figures/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Figure docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/layout/media-object/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Media object docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">Responsive image</h3>
                            <img data-src="https://via.placeholder.com/1920x250" alt="responsive image"
                                 class="img-fluid lazyload">
                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">Thumbnail</h3>
                            <img data-src="https://via.placeholder.com/200x200" alt="thumbnail image"
                                 class="img-thumbnail lazyload">
                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">Figure</h3>
                            <figure class="figure">
                                <img data-src="https://via.placeholder.com/300x200"
                                     class="figure-img img-fluid rounded lazyload" alt="Figure">
                                <figcaption class="figure-caption">A caption for the above image.</figcaption>
                            </figure>
                        </div>
                        <div class="col-12">
                            <h3 class="mt-5">Media</h3>
                            <div class="media">
                                <img class="d-flex mr-3 lazyload" data-src="https://via.placeholder.com/64x64"
                                     alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0">Media heading</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in
                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                    fringilla. Donec lacinia congue felis in
                                    faucibus.

                                    <div class="media mt-3">
                                        <a class="d-flex pr-3" href="#">
                                            <img data-src="https://via.placeholder.com/64x64"
                                                 alt="Generic placeholder image" class="lazyload">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="mt-0">Media heading</h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                            ante sollicitudin. Cras purus odio, vestibulum in
                                            vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                            vulputate fringilla. Donec lacinia congue felis
                                            in faucibus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5 pt-5" id="tables">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="fa fa-table mr-1"></span>
                                Tables
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/content/tables/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Table docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row px-5">
                        <div class="col-md-6">
                            <h3 class="mt-5">Table</h3>
                            <table class="table table-bordered table-striped table-hover">
                                <thead class="">
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">Inversed table</h3>
                            <table class="table table-bordered table-striped table-hover table-dark">
                                <thead class="">
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row px-5">
                        <div class="col-md-6">
                            <h3 class="mt-5">Table with colors</h3>
                            <p><strong>Note: </strong> Use <code>table-*</code> classes.</p>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Column heading</th>
                                    <th>Column heading</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Default</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="table-active">
                                    <th scope="row">Active</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="table-primary">
                                    <th scope="row">Primary</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="table-secondary">
                                    <th scope="row">Secondary</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="table-success">
                                    <th scope="row">Success</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="table-danger">
                                    <th scope="row">Danger</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="table-warning">
                                    <th scope="row">Warning</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="table-info">
                                    <th scope="row">Info</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="table-light">
                                    <th scope="row">Light</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="table-dark">
                                    <th scope="row">Dark</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">Inversed table with colors</h3>
                            <p><strong>Note: </strong> Use <code>bg-*</code> and <code>text-*</code> classes.</p>
                            <table class="table table-hover table-dark">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Column heading</th>
                                    <th>Column heading</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Default</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="bg-primary ">
                                    <th scope="row">Primary</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="bg-secondary ">
                                    <th scope="row">Secondary</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="bg-success ">
                                    <th scope="row">Success</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="bg-danger ">
                                    <th scope="row">Danger</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="bg-warning text-dark">
                                    <th scope="row">Warning</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="bg-info ">
                                    <th scope="row">Info</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="bg-light text-dark">
                                    <th scope="row">Light</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                <tr class="bg-dark ">
                                    <th scope="row">Dark</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row px-5">
                        <div class="col-md-6">
                            <h3 class="mt-5">Default header</h3>
                            <table class="table ">
                                <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">Inversed header</h3>
                            <table class="table ">
                                <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row px-5">
                        <div class="col-md-6">
                            <h3 class="mt-5">Small table</h3>
                            <table class="table table-sm">
                                <thead class="">
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5 pt-5" id="list-groups">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="fa fa-list-ul mr-1"></span>
                                List groups
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/components/list-group/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="List group docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row px-5">
                        <div class="col-12">

                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">...with actions and colors</h3>
                            <div class="list-group">
                                <button type="button" class="list-group-item list-group-item-action">This is a regular
                                    list group item
                                </button>


                                <button type="button"
                                        class="list-group-item list-group-item-action list-group-item-active">
                                    This is a(n) active list group item
                                </button>


                                <button type="button"
                                        class="list-group-item list-group-item-action list-group-item-disabled">
                                    This is a(n) disabled list group item
                                </button>


                                <button type="button"
                                        class="list-group-item list-group-item-action list-group-item-primary">
                                    This is a(n) primary list group item
                                </button>


                                <button type="button"
                                        class="list-group-item list-group-item-action list-group-item-secondary">
                                    This is a(n) secondary list group item
                                </button>


                                <button type="button"
                                        class="list-group-item list-group-item-action list-group-item-success">
                                    This is a(n) success list group item
                                </button>


                                <button type="button"
                                        class="list-group-item list-group-item-action list-group-item-danger">
                                    This is a(n) danger list group item
                                </button>


                                <button type="button"
                                        class="list-group-item list-group-item-action list-group-item-warning">
                                    This is a(n) warning list group item
                                </button>


                                <button type="button"
                                        class="list-group-item list-group-item-action list-group-item-info">
                                    This is a(n) info list group item
                                </button>


                                <button type="button"
                                        class="list-group-item list-group-item-action list-group-item-light">
                                    This is a(n) light list group item
                                </button>


                                <button type="button"
                                        class="list-group-item list-group-item-action list-group-item-dark">
                                    This is a(n) dark list group item
                                </button>


                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">...with custom content</h3>
                            <div class="list-group">
                                <a href="#"
                                   class="list-group-item list-group-item-action flex-column align-items-start active">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                                        eget risus varius blandit.</p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                                <a href="#"
                                   class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                                        eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                                <a href="#"
                                   class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                                        eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5 pt-5" id="buttons">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="fa fa-square mr-1"></span>
                                Buttons
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/components/buttons/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Button docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/components/button-group/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Button group docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/components/pagination/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Pagination docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/components/dropdowns/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Dropdown docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">


                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">General buttons</h3>
                            <div class="my-1">


                                <button class="btn btn-primary">Primary</button>


                                <button class="btn btn-secondary">Secondary</button>


                                <button class="btn btn-success">Success</button>


                                <button class="btn btn-danger">Danger</button>


                                <button class="btn btn-warning">Warning</button>


                                <button class="btn btn-info">Info</button>


                                <button class="btn btn-light">Light</button>


                                <button class="btn btn-dark">Dark</button>


                                <button class="btn btn-link">Link</button>

                                <button class="btn">Default</button>
                            </div>
                            <div class="my-1">


                                <button class="btn btn-primary active">Primary</button>


                                <button class="btn btn-secondary active">Secondary</button>


                                <button class="btn btn-success active">Success</button>


                                <button class="btn btn-danger active">Danger</button>


                                <button class="btn btn-warning active">Warning</button>


                                <button class="btn btn-info active">Info</button>


                                <button class="btn btn-light active">Light</button>


                                <button class="btn btn-dark active">Dark</button>


                                <button class="btn btn-link active">Link</button>

                                <button class="btn active">Default</button>
                            </div>
                            <div class="my-1">


                                <button class="btn btn-primary" disabled>Primary</button>


                                <button class="btn btn-secondary" disabled>Secondary</button>


                                <button class="btn btn-success" disabled>Success</button>


                                <button class="btn btn-danger" disabled>Danger</button>


                                <button class="btn btn-warning" disabled>Warning</button>


                                <button class="btn btn-info" disabled>Info</button>


                                <button class="btn btn-light" disabled>Light</button>


                                <button class="btn btn-dark" disabled>Dark</button>


                                <button class="btn btn-link" disabled>Link</button>

                                <button class="btn" disabled>Default</button>
                            </div>

                            <h3 class="mt-5">Outline buttons</h3>
                            <div class="my-1">


                                <button class="btn btn-outline-primary">Primary</button>


                                <button class="btn btn-outline-secondary">Secondary</button>


                                <button class="btn btn-outline-success">Success</button>


                                <button class="btn btn-outline-danger">Danger</button>


                                <button class="btn btn-outline-warning">Warning</button>


                                <button class="btn btn-outline-info">Info</button>


                                <button class="btn btn-outline-light">Light</button>


                                <button class="btn btn-outline-dark">Dark</button>


                            </div>
                            <div class="my-1">


                                <button class="btn btn-outline-primary active">Primary</button>


                                <button class="btn btn-outline-secondary active">Secondary</button>


                                <button class="btn btn-outline-success active">Success</button>


                                <button class="btn btn-outline-danger active">Danger</button>


                                <button class="btn btn-outline-warning active">Warning</button>


                                <button class="btn btn-outline-info active">Info</button>


                                <button class="btn btn-outline-light active">Light</button>


                                <button class="btn btn-outline-dark active">Dark</button>


                            </div>
                            <div class="my-1">


                                <button class="btn btn-outline-primary" disabled>Primary</button>


                                <button class="btn btn-outline-secondary" disabled>Secondary</button>


                                <button class="btn btn-outline-success" disabled>Success</button>


                                <button class="btn btn-outline-danger" disabled>Danger</button>


                                <button class="btn btn-outline-warning" disabled>Warning</button>


                                <button class="btn btn-outline-info" disabled>Info</button>


                                <button class="btn btn-outline-light" disabled>Light</button>


                                <button class="btn btn-outline-dark" disabled>Dark</button>


                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">Sizes</h3>
                            <div class="my-1">
                                <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                <button type="button" class="btn btn-primary">Normal button</button>
                                <button type="button" class="btn btn-primary btn-sm">Small button</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">Groups and dropdown</h3>
                            <div class="btn-toolbar my-1" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-secondary">1</button>
                                    <button type="button" class="btn btn-secondary">2</button>
                                    <button type="button" class="btn btn-secondary">3</button>
                                </div>

                                <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-secondary">4</button>
                                    <button type="button" class="btn btn-secondary">5</button>

                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button"
                                                class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary">Action</button>
                                    <button type="button"
                                            class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <h6 class="dropdown-header">Dropdown header</h6>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item disabled" href="#">Disabled link</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <h3 class="mt-5">Pagination</h3>
                            <nav aria-label="Pagination example">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
					<span class="page-link">
						2
						<span class="sr-only">(current)</span>
					</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5 pt-5" id="jumbotrons">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="fa fa-bookmark mr-1"></span>
                                Jumbotrons
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/components/jumbotron/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Jumbotron docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">Default jumbotron</h3>
                            <div class="jumbotron">
                                <h1 class="display-3">Hello, world!</h1>
                                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for
                                    calling extra attention to featured content or information.</p>
                                <hr class="my-4">
                                <p>It uses utility classes for typography and spacing to space content out within the
                                    larger container.</p>
                                <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                                </p>
                            </div>

                            <h3 class="mt-5">Fluid jumbotron</h3>
                            <div class="jumbotron jumbotron-fluid">
                                <div class="container">
                                    <h1 class="display-3">Fluid jumbotron</h1>
                                    <p class="lead">This is a modified jumbotron that occupies the entire horizontal
                                        space of its parent.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5 pt-5" id="cards">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="far fa-square mr-1"></span>
                                Cards
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/components/card/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Card docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">Various types of cards</h3>
                            <div class="card-columns">
                                <div class="card">
                                    <div class="card-body">
                                        This is some text within a card block.
                                    </div>
                                </div>
                                <div class="card">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                                <div class="card p-3">
                                    <blockquote class="blockquote mb-0 card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat
                                            a ante.</p>
                                        <footer class="blockquote-footer">
                                            <small class="text-muted">
                                                Someone famous in <cite title="Source Title">Source Title</cite>
                                            </small>
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        Featured
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Featured
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        2 days ago
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img lazyload" data-src="https://via.placeholder.com/100x120"
                                         alt="Card image">
                                </div>
                                <div class="card">
                                    <img class="card-img-top lazyload" data-src="https://via.placeholder.com/100x120"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little
                                            bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                    <img class="card-img-bottom lazyload" data-src="https://via.placeholder.com/100x120"
                                         alt="Card image cap">
                                </div>
                                <div class="card">
                                    <img class="card-img-top lazyload" data-src="https://via.placeholder.com/100x120"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" href="#">Disabled</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        <ul class="nav nav-pills card-header-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" href="#">Disabled</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">Colored cards</h3>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Primary card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Secondary card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Success card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Danger card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card  bg-warning mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Warning card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Info card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card  bg-light mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Light card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Dark card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">Cards with colored borders</h3>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card border-primary mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Primary card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card border-secondary mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Secondary card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card border-success mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Success card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card border-danger mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Danger card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card border-warning mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Warning card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card border-info mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Info card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card border-light mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Light card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="card border-dark mb-3" style="max-width: 20rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h4 class="card-title">Dark card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>

            <section class="mb-5 pt-5" id="forms">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="fas fa-pencil-alt mr-1"></span>
                                Forms
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/components/forms/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Form docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/components/input-group/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Input group docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <form>
                        <div class="row px-5">
                            <div class="col-md-6">
                                <h3 class="mt-5">Text fields</h3>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Readonly input" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                           value="Readonly input as plain text">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Disabled input" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="validText">Valid input</label>
                                    <input type="text" class="form-control is-valid" id="validText" value="Valid input">
                                </div>
                                <div class="form-group">
                                    <label for="invalidText">Invalid input</label>
                                    <input type="text" class="form-control is-invalid" id="invalidText"
                                           value="Invalid input">
                                    <div class="invalid-feedback">Please provide a valid value.</div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" type="text"
                                           placeholder=".form-control-lg">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Default input">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-sm" type="text"
                                           placeholder=".form-control-sm">
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control"
                                               aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control"
                                               aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-secondary" type="button">Hate it</button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Product name"
                                               aria-label="Product name">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button">Love it</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                               aria-label="Text input with dropdown button">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <h3 class="mt-5">Layouts</h3>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Row / input 1">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Row / input 2">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Form row / input 1">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Form row / input 2">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Horizontal</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3"
                                               placeholder="form layout">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0"
                                               placeholder="Inline input 1">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Inline input 2">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <label for="inputPassword6">Password</label>
                                            <input type="password" id="inputPassword6" class="form-control mx-sm-3"
                                                   aria-describedby="passwordHelpInline">
                                            <small id="passwordHelpInline" class="text-muted">Must be 8-20 characters
                                                long.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mt-5">Selects</h3>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Example select</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Example multiple select</label>
                                    <select multiple class="form-control" id="exampleFormControlSelect2">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-lg">
                                        <option>Large select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-sm">
                                        <option>Small select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select">
                                        <option selected>Custom select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <h3 class="mt-5">Checkboxes</h3>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Option one is this and that&mdash;be sure to include why it's great
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" disabled>
                                        Option two is disabled
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Custom checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Custom checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3" disabled>
                                    <label class="custom-control-label" for="customCheck3">Disabled custom
                                        checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input is-valid" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Valid custom checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input is-invalid" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5">Invalid custom
                                        checkbox</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                               value="option1"> 1
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                               value="option2"> 2
                                    </label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                               value="option3" disabled> 3
                                    </label>
                                </div>

                                <h3 class="mt-5">Radio buttons</h3>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                               id="exampleRadios1" value="option1" checked>
                                        Option one is this and that&mdash;be sure to include why it's great
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                               id="exampleRadios2" value="option2">
                                        Option two can be something else and selecting it will deselect option one
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                               id="exampleRadios3" value="option3" disabled>
                                        Option three is disabled
                                    </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio"
                                           class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Custom radio</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio"
                                           class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Custom radio</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio"
                                           class="custom-control-input" disabled>
                                    <label class="custom-control-label" for="customRadio3">Disabled custom radio</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="customRadio"
                                           class="custom-control-input is-valid">
                                    <label class="custom-control-label" for="customRadio4">Valid radio</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio5" name="customRadio"
                                           class="custom-control-input is-invalid">
                                    <label class="custom-control-label" for="customRadio5">Invalid radio</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio1" value="option1"> 1
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio2" value="option2"> 2
                                    </label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio3" value="option3" disabled> 3
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </section>

            <section class="mb-5 pt-5" id="navs">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="fa fa-bars mr-1"></span>
                                Navs
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/components/navbar/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Navbar docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/components/navs/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Navs' docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/components/breadcrumb/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Breadcrumb docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/components/dropdowns/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Dropdown docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/components/scrollspy/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Scrollspy docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/utilities/position/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Position docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">Navbars</h3>


                            <nav class="navbar navbar-expand-lg navbar-dark bg-primary my-2">
                                <a class="navbar-brand" href="#">Brand</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbar-primary"
                                        aria-controls="navbarNavAltMarkup" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbar-primary">
                                    <div class="nav navbar-nav">
                                        <a class="nav-item nav-link active" href="#">Active</a>
                                        <a class="nav-item nav-link" href="#">Link</a>
                                        <div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                               role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                                    </div>
                                    <span class="navbar-text ml-2 mr-auto">Text</span>
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search"
                                               aria-label="Search">
                                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>


                            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary my-2">
                                <a class="navbar-brand" href="#">Brand</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbar-secondary"
                                        aria-controls="navbarNavAltMarkup" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbar-secondary">
                                    <div class="nav navbar-nav">
                                        <a class="nav-item nav-link active" href="#">Active</a>
                                        <a class="nav-item nav-link" href="#">Link</a>
                                        <div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                               role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                                    </div>
                                    <span class="navbar-text ml-2 mr-auto">Text</span>
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search"
                                               aria-label="Search">
                                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>


                            <nav class="navbar navbar-expand-lg navbar-dark bg-success my-2">
                                <a class="navbar-brand" href="#">Brand</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbar-success"
                                        aria-controls="navbarNavAltMarkup" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbar-success">
                                    <div class="nav navbar-nav">
                                        <a class="nav-item nav-link active" href="#">Active</a>
                                        <a class="nav-item nav-link" href="#">Link</a>
                                        <div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                               role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                                    </div>
                                    <span class="navbar-text ml-2 mr-auto">Text</span>
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search"
                                               aria-label="Search">
                                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>


                            <nav class="navbar navbar-expand-lg navbar-dark bg-danger my-2">
                                <a class="navbar-brand" href="#">Brand</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbar-danger"
                                        aria-controls="navbarNavAltMarkup" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbar-danger">
                                    <div class="nav navbar-nav">
                                        <a class="nav-item nav-link active" href="#">Active</a>
                                        <a class="nav-item nav-link" href="#">Link</a>
                                        <div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                               role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                                    </div>
                                    <span class="navbar-text ml-2 mr-auto">Text</span>
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search"
                                               aria-label="Search">
                                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>


                            <nav class="navbar navbar-expand-lg navbar-light bg-warning my-2">
                                <a class="navbar-brand" href="#">Brand</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbar-warning"
                                        aria-controls="navbarNavAltMarkup" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbar-warning">
                                    <div class="nav navbar-nav">
                                        <a class="nav-item nav-link active" href="#">Active</a>
                                        <a class="nav-item nav-link" href="#">Link</a>
                                        <div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                               role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                                    </div>
                                    <span class="navbar-text ml-2 mr-auto">Text</span>
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search"
                                               aria-label="Search">
                                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>


                            <nav class="navbar navbar-expand-lg navbar-dark bg-info my-2">
                                <a class="navbar-brand" href="#">Brand</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbar-info"
                                        aria-controls="navbarNavAltMarkup" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbar-info">
                                    <div class="nav navbar-nav">
                                        <a class="nav-item nav-link active" href="#">Active</a>
                                        <a class="nav-item nav-link" href="#">Link</a>
                                        <div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                               role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                                    </div>
                                    <span class="navbar-text ml-2 mr-auto">Text</span>
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search"
                                               aria-label="Search">
                                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>


                            <nav class="navbar navbar-expand-lg navbar-light bg-light my-2">
                                <a class="navbar-brand" href="#">Brand</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbar-light"
                                        aria-controls="navbarNavAltMarkup" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbar-light">
                                    <div class="nav navbar-nav">
                                        <a class="nav-item nav-link active" href="#">Active</a>
                                        <a class="nav-item nav-link" href="#">Link</a>
                                        <div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                               role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                                    </div>
                                    <span class="navbar-text ml-2 mr-auto">Text</span>
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search"
                                               aria-label="Search">
                                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>


                            <nav class="navbar navbar-expand-lg navbar-dark bg-dark my-2">
                                <a class="navbar-brand" href="#">Brand</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbar-dark"
                                        aria-controls="navbarNavAltMarkup" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbar-dark">
                                    <div class="nav navbar-nav">
                                        <a class="nav-item nav-link active" href="#">Active</a>
                                        <a class="nav-item nav-link" href="#">Link</a>
                                        <div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                               role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                                    </div>
                                    <span class="navbar-text ml-2 mr-auto">Text</span>
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search"
                                               aria-label="Search">
                                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>


                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">Tabs</h3>
                            <div class="nav nav-tabs">
                                <a class="nav-item nav-link active" href="#">Active</a>
                                <a class="nav-item nav-link" href="#">Link</a>
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <a class="nav-item nav-link disabled" href="#">Disabled</a>
                            </div>

                            <h3 class="mt-5">Pills</h3>
                            <div class="nav nav-pills">
                                <a class="nav-item nav-link active" href="#">Active</a>
                                <a class="nav-item nav-link" href="#">Link</a>
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <a class="nav-item nav-link disabled" href="#">Disabled</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">Vertical pills</h3>
                            <div class="nav nav-pills flex-column">
                                <a class="nav-item nav-link active" href="#">Active</a>
                                <a class="nav-item nav-link" href="#">Link</a>
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <a class="nav-item nav-link disabled" href="#">Disabled</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <h3 class="mt-5">Breadcrumbs</h3>
                            <nav class="breadcrumb">
                                <a class="breadcrumb-item" href="#">Home</a>
                                <a class="breadcrumb-item" href="#">Library</a>
                                <a class="breadcrumb-item" href="#">Data</a>
                                <span class="breadcrumb-item active">Bootstrap</span>
                            </nav>
                        </div>
                    </div>

                </div>
            </section>

            <section class="mb-5 pt-5" id="badges">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="fa fa-tag mr-1"></span>
                                Badges
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/components/badge/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Badge docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row px-5">
                        <div class="col-md-6">
                            <h3 class="mt-5">Contextual badges</h3>
                            <p>


                                <span class="badge badge-primary">Primary</span>


                                <span class="badge badge-secondary">Secondary</span>


                                <span class="badge badge-success">Success</span>


                                <span class="badge badge-danger">Danger</span>


                                <span class="badge badge-warning">Warning</span>


                                <span class="badge badge-info">Info</span>


                                <span class="badge badge-light">Light</span>


                                <span class="badge badge-dark">Dark</span>


                            </p>

                            <h3 class="mt-5">Pill badges</h3>
                            <p>


                                <span class="badge badge-pill badge-primary">Primary</span>


                                <span class="badge badge-pill badge-secondary">Secondary</span>


                                <span class="badge badge-pill badge-success">Success</span>


                                <span class="badge badge-pill badge-danger">Danger</span>


                                <span class="badge badge-pill badge-warning">Warning</span>


                                <span class="badge badge-pill badge-info">Info</span>


                                <span class="badge badge-pill badge-light">Light</span>


                                <span class="badge badge-pill badge-dark">Dark</span>


                            </p>

                            <h3 class="mt-5">Links</h3>
                            <p>


                                <a href="#" class="badge badge-primary">Primary</a>


                                <a href="#" class="badge badge-secondary">Secondary</a>


                                <a href="#" class="badge badge-success">Success</a>


                                <a href="#" class="badge badge-danger">Danger</a>


                                <a href="#" class="badge badge-warning">Warning</a>


                                <a href="#" class="badge badge-info">Info</a>


                                <a href="#" class="badge badge-light">Light</a>


                                <a href="#" class="badge badge-dark">Dark</a>


                            </p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">Badges in headings</h3>
                            <h1>Example heading <span class="badge badge-secondary">New</span></h1>
                            <h2>Example heading <span class="badge badge-secondary">New</span></h2>
                            <h3>Example heading <span class="badge badge-secondary">New</span></h3>
                            <h4>Example heading <span class="badge badge-secondary">New</span></h4>
                            <h5>Example heading <span class="badge badge-secondary">New</span></h5>
                            <h6>Example heading <span class="badge badge-secondary">New</span></h6>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5 pt-5" id="alerts">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="fa fa-exclamation-triangle mr-1"></span>
                                Alerts
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/components/alerts/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Alert docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">Simple alerts</h3>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-primary" role="alert">
                                .alert-primary
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-secondary" role="alert">
                                .alert-secondary
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-success" role="alert">
                                .alert-success
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-danger" role="alert">
                                .alert-danger
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-warning" role="alert">
                                .alert-warning
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-info" role="alert">
                                .alert-info
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-light" role="alert">
                                .alert-light
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-dark" role="alert">
                                .alert-dark
                            </div>
                        </div>


                    </div>
                    <div class="row px-5">
                        <div class="col-12">
                            <h3 class="mt-5">Alerts with additional content</h3>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-primary" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is
                                    going to run a bit longer so that
                                    you can see how spacing within an alert works with this kind of content. Also here
                                    is an <a href="javascript:void(0)" class="alert-link">example alert link</a>.</p>
                                <hr>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things
                                    nice and tidy.</p>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-secondary" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is
                                    going to run a bit longer so that
                                    you can see how spacing within an alert works with this kind of content. Also here
                                    is an <a href="javascript:void(0)" class="alert-link">example alert link</a>.</p>
                                <hr>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things
                                    nice and tidy.</p>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is
                                    going to run a bit longer so that
                                    you can see how spacing within an alert works with this kind of content. Also here
                                    is an <a href="javascript:void(0)" class="alert-link">example alert link</a>.</p>
                                <hr>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things
                                    nice and tidy.</p>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is
                                    going to run a bit longer so that
                                    you can see how spacing within an alert works with this kind of content. Also here
                                    is an <a href="javascript:void(0)" class="alert-link">example alert link</a>.</p>
                                <hr>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things
                                    nice and tidy.</p>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is
                                    going to run a bit longer so that
                                    you can see how spacing within an alert works with this kind of content. Also here
                                    is an <a href="javascript:void(0)" class="alert-link">example alert link</a>.</p>
                                <hr>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things
                                    nice and tidy.</p>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-info" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is
                                    going to run a bit longer so that
                                    you can see how spacing within an alert works with this kind of content. Also here
                                    is an <a href="javascript:void(0)" class="alert-link">example alert link</a>.</p>
                                <hr>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things
                                    nice and tidy.</p>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-light" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is
                                    going to run a bit longer so that
                                    you can see how spacing within an alert works with this kind of content. Also here
                                    is an <a href="javascript:void(0)" class="alert-link">example alert link</a>.</p>
                                <hr>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things
                                    nice and tidy.</p>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="alert alert-dark" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is
                                    going to run a bit longer so that
                                    you can see how spacing within an alert works with this kind of content. Also here
                                    is an <a href="javascript:void(0)" class="alert-link">example alert link</a>.</p>
                                <hr>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things
                                    nice and tidy.</p>
                            </div>
                        </div>


                    </div>
                </div>
            </section>

            <section class="mb-5 pt-5" id="popovers">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="fa fa-info-circle mr-1"></span>
                                Popovers
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/components/popovers/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Popover docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="https://getbootstrap.com/docs/4.4/components/tooltips/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Tooltip docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row px-5">
                        <div class="col-md-6">
                            <h3 class="mt-5">Popovers</h3>
                            <button type="button" class="btn btn-primary my-5" data-toggle="popover"
                                    title="Popover title"
                                    data-content="And here's some amazing content. It's very engaging. Right?"
                                    id="popover-toggler">
                                Toggle popover
                            </button>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">Tooltips</h3>
                            <button type="button" class="btn btn-primary my-5" data-toggle="tooltip"
                                    data-placement="right" title="Tooltip on right">
                                Tooltip on right
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5 pt-5" id="progress-bars">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="fa fa-spinner mr-1"></span>
                                Progress bars
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/components/progress/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Progress docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row px-5">
                        <div class="col-md-6">
                            <h3 class="mt-5">Colored progress bars</h3>
                            <div class="progress my-1">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50"
                                     aria-valuemin="0" aria-valuemax="100">Label
                                </div>
                            </div>


                            <div class="progress my-1">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Label
                                </div>
                            </div>

                            <div class="progress my-1">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%;"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Label
                                </div>
                            </div>

                            <div class="progress my-1">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Label
                                </div>
                            </div>

                            <div class="progress my-1">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Label
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <h3 class="mt-5">Striped progress bars</h3>
                            <div class="progress my-1">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%;"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Label
                                </div>
                            </div>


                            <div class="progress my-1">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                     style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Label
                                </div>
                            </div>

                            <div class="progress my-1">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                     style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Label
                                </div>
                            </div>

                            <div class="progress my-1">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                     style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Label
                                </div>
                            </div>

                            <div class="progress my-1">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                     style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Label
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-5 pt-5" id="modals">
                <div class="row bg-light py-4 mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <h2>
                                <span class="fa fa-window-restore mr-1"></span>
                                Modals
                            </h2>
                            <h2>

                                <a href="https://getbootstrap.com/docs/4.4/components/modal/" target="_blank"
                                   data-toggle="tooltip" data-placement="bottom" title="Modal docs"><span
                                            class="fa fa-book fw"></span></a>

                                <a href="#top" class="ml-3"><span class="fa fa-chevron-up fw"></span></a>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="row px-5">
                        <div class="col-12">
                            <div class="modal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Modal body text goes here.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>

<?php include "footer.php";
