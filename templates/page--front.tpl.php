<?php
    drupal_add_css(drupal_get_path('theme', 'ncsulib_foundation').'/styles/core/custom/home.css', array('weight' => 998, 'group' => 101));
    drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/availability-data.js');
    drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/home-artbox.js');
    drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/search-tabs.js');
    drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/articles.js');
    drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/home-tracking-events.js');
    drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/vendor/trln_autosuggest.js');
    drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/vendor/trln_autocomplete.js');
    drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/books-media-tab-autosuggest.js');
    drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/home-search-tabs-logging.js');
    drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/vendor/foundation/foundation.interchange.js', array('scope'=>'footer'));
?>

<!--.page -->
<div role="document" class="page" id="content">
    <?php if (!empty($page['featured'])): ?>
        <!--/.featured -->
        <section class="l-featured">
            <div class="medium-12 columns">
                <?php print render($page['featured']); ?>
            </div>
        </section>
        <!--/.l-featured -->
    <?php endif; ?>
    <main role="main" class="row l-main">
        <div class="<?php print $main_grid; ?> main columns" id="main-content">
            <!-- top row -->
            <section id="tier-one">
                <div id="search-options">
                    <div id="home-search">
                        <?php
                            include DRUPAL_ROOT.'/'.$GLOBALS['theme_path'].'/templates/includes/partials/home-search-mobile.html';
                            include DRUPAL_ROOT.'/'.$GLOBALS['theme_path'].'/templates/includes/partials/home-search_tabs-desktop.html';
                        ?>
                    </div>
                    <div id="research-tools">
                        <h3>More Research Tools:</h3>
                        <ul>
                            <li><a href="/databases/" id="rt_databases">Databases</a></li>
                            <li><a href="/journals/" id="rt_journals">Journal Titles</a></li>
                            <li><a href="/citationbuilder" id="rt_citation_builder">Citation Builder</a></li>
                        </ul>
                    </div>

                    <div id="home-quicklinks">
                        <ul id="quicklinks">
                            <li>
                                <ul>
                                    <li><h3>Technology</h3></li>
                                    <li><a href="/services/digital-media-production/" id="ql_cdm">Digital Media Production</a></li>
                                    <li><a href="/services/makerspace/" id="ql_makersace">Makerspace</a></li>
                                    <li><a href="/do/visualization" id="ql_viz">Visualization</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><h3>Studying</h3></li>
                                    <li><a href="https://rooms.lib.ncsu.edu/" id="ql_reservearoom">Reserve a Room</a></li>
				    <li><a href="/techlending">Borrow Technology</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><h3>Courses</h3></li>
                                    <li><a href="/course" id="ql_searchtools">Course Tools</a></li>
                                    <li><a href="//reserves.lib.ncsu.edu/auth/" id="ql_course_reserves">Course Reserves</a></li>
                                    <li><a href="/textbookservice/" id="ql_textbooks">Textbooks</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- artbox stub-->
                <div id="home-artbox">
                    <?php include_once 'block--nivo_slider.tpl.php'; ?>

                    <div id="home-social">
                        <h3>Follow Us</h3>
                        <ul id="social-icons" class="unstyle-list">
                            <li><a href="https://www.facebook.com/ncsulibraries"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a href="https://twitter.com/ncsulibraries"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a href="http://instagram.com/ncsulibraries"><i class="fa fa-instagram"></i> Instagram</a></li>
                        </ul>
                    </div>
                </div>

            </section> <!-- /top row -->

            <!-- middle row -->
            <section id="tier-two">
                <div id="available-links">
                    <h3>Available Now</h3>
                    <ul>
                        <li><a href="https://rooms.lib.ncsu.edu" id="al_reservearoom">Reserve a Room</a></li>
                        <li><a href="/techlending/" id="al_techlending">Borrow Technology</a></li>
                    </ul>
                </div>

                <!-- availability tabs stub -->
                <div id="availability">
                    <dl class="tabs vertical" data-tab>
                        <dd class="active"><a href="#panel-hill">D. H. Hill Library</a></dd>
                        <dd><a href="#panel-hunt">James B. Hunt Jr. Library</a></dd>
                    </dl>
                    <div class="tabs-content vertical">
                        <div class="content active" id="panel-hill">
                            <ul>
                                <li>
                                    <span class="item"><a href="https://rooms.lib.ncsu.edu/" id="al_hill_study_rooms">Study Rooms</a> </span>
                                    <span class="item-count count" id="hill-study"><?= spaces_homepage_data('hill'); ?></span>
                                </li>
                                <li>
                                    <span class="item"><a href="/techlending/laptops-netbooks" id="al_hill_laptops">Laptops</a> </span>
                                    <span class="item-count count" id="hill-laptops"></span>
                                </li>
                                <li>
                                    <span class="item"><a href="/techlending/tablets-and-ipods" id="al_hill_tablets">Tablets</a> </span>
                                    <span class="item-count count" id="hill-tablets"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="content" id="panel-hunt">
                            <ul>

                                <li>
                                    <span class="item"><a href="https://rooms.lib.ncsu.edu/" id="al_hunt_study_rooms">Study Rooms</a> </span>
                                    <span class="item-count count" id="hunt-study"><?= spaces_homepage_data('hunt'); ?></span>
                                </li>
                                <li>
                                    <span class="item"><a href="/techlending/laptops-netbooks" id="al_hunt_laptops">Laptops</a> </span>
                                    <span class="item-count count" id="hunt-laptops"></span>
                                </li>
                                <li>
                                    <span class="item"><a href="/techlending/tablets-and-ipods" id="al_hunt_tablets">Tablets</a> </span>
                                    <span class="item-count count" id="hunt-tablets"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>

            <!-- bottom row -->
            <section id="tier-three" class="row">
                    <div id="hunt-feature" class="medium-4 columns">
                        <h3 class="sec-label">The James B. Hunt Jr. Library</h3>
                        <a href="/huntlibrary">
                            <img src="/sites/all/themes/ncsulib_foundation/images/homepage/hunt-homepage.jpg" width="100%" />
                            <div id="hunt-content">
                                <h2>The Library of the Future</h2>
                                <p>The Hunt Library gives NC State faculty and students a decisive competitive advantage as they tackle society's grand challenges. The building's technology-rich, collaborative spaces provide a platform for NC State’s world-class research and teaching.<span class="styled white"></span></p>
                            </div>
                        </a>
                    </div>

                <div class="medium-4 columns" id="home-news">
                    <h3 class="sec-label">News <span class="pipe">|</span> <a href="//lib.ncsu.edu/news">all news</a></h3>
                    <div id="home-news-content">
                        <?php
                            $block = module_invoke('views', 'block_view', 'News-block_5');
                            print render($block['content']);
                        ?>
                    </div>
                </div>

                <div class="medium-4 columns">
                    <div id="home-events">
                        <h3 class="sec-label">Events &amp; Exhibits <span class="pipe">|</span> <a href="/events">all events</a></h3>
                        <?php
                            $block2 = module_invoke('views', 'block_view', 'upcoming_events-block_9');
                            print render($block2['content']);
                        ?>
                    </div>
                </div>

            </section> <!-- /bottom row -->

        </div> <!--/.main region -->
    </main> <!--/.main-->
</div> <!--/.page -->

<section id="library-stories">
    <div id="library-stories-wrapper" class="row">
        <div class="medium-12 columns">
            <?php
                $block2 = module_invoke('views', 'block_view', 'capture_and_promote-block_9');
                print render($block2['content']);
            ?>
        </div>
    </div>
</section>
<!-- /.above-footer -->
