<?php
drupal_add_css(drupal_get_path('theme', 'ncsulib_foundation').'/styles/core/custom/home.css', array('weight' => 998, 'group' => 101));
drupal_add_css(drupal_get_path('theme', 'ncsulib_foundation').'/styles/typeahead.css', array('weight' => 999, 'group' => 101));
drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/home-artbox.js');
drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/availability-data.js');
drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/home-tracking-events.js');
drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/vendor/trln_autosuggest.min.js');
drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/vendor/trln_autocomplete.js');
drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/books-media-tab-autosuggest.js');
drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/home-search-tabs-logging.js');
drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/typeahead.bundle.min.js');
drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/vendor/foundation/foundation.interchange.js', array('scope'=>'footer'));
//drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/handlebars-v1.3.0.js', array('scope'=>'footer'));
//drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/quicksearch-typeahead.js', array('scope'=>'footer'));
?>

<!--.page -->
<div role="document" class="page" id="content">
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
                        <h2>More Research Tools:</h2>
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
                                    <li><h2>Technology</h2></li>
                                    <li><a href="/cdm/" id="ql_cdm" class="styled">Create Digital Media</a></li>
                                    <li><a href="/spaces/makerspace/" class="styled" id="ql_makersace">Makerspace</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><h2>Studying</h2></li>
                                    <li><a href="/reservearoom/" class="styled" id="ql_reservearoom">Reserve a Room</a></li>
                                    <li><a href="/groupfinder/" class="styled" id="ql_group_finder">GroupFinder</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><h2>Courses</h2></li>
                                    <li><a href="/course" class="styled" id="ql_searchtools">Course Tools</a></li>
                                    <li><a href="//reserves.lib.ncsu.edu/" class="styled" id="ql_course_reserves">Course Reserves</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- artbox stub-->
                <div id="home-artbox">
                    <?php include_once 'block--nivo_slider.tpl.php'; ?>
                </div>

            </section> <!-- /top row -->

            <!-- middle row -->
            <section id="tier-two">
                <div id="available-links">
                    <h2>Available Now</h2>
                    <ul>
                        <li><a href="/reservearoom/" id="al_reservearoom">Reserve a Room</a></li>
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
                                    <span class="item"><a href="/reservearoom" id="al_hill_study_rooms">Study Rooms</a> </span>
                                    <span class="item-count count" id="hill-study"></span>
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
                                    <span class="item"><a href="/reservearoom" id="al_hunt_study_rooms">Study Rooms</a> </span>
                                    <span class="item-count count" id="hunt-study"></span>
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
            <section id="tier-three">

                <div id="story-1">
                    <div class="story-photo">
                        <a href="/huntlibrary/" id="story-1-photo">
                            <img src="/sites/all/themes/ncsulib_foundation/images/hunt_at_night_767x550.jpg" title="&copy; Jeff Goldberg/ESTO" alt="The James B. Hunt Jr. Library" width="100%">
                        </a>
                    </div>
                    <h2>
                        <a href="/huntlibrary/" id="story-1-heading">James B. Hunt Jr. Library</a>
                    </h2>

                    <ul class="hunt-list">
                        <li><a href="/huntlibrary/#storify" class="story-1-link">Hunt Library on Storify</a></li>
                        <li><a href="/huntlibrary/inthenews" class="story-1-link">In the News</a></li>
                        <li><a href="/huntlibrary/bookBot" class="story-1-link">bookBot</a></li>
                        <li><a href="/huntlibrary/namingopportunities" class="story-1-link">Help support Hunt</a></li>
                        <li><a href="http://www.ncsu.edu/huntlibrary/" class="story-1-link">Think and Do</a></li>
                    </ul>
                </div>

                <div id="story-2">
                    <div class="story-photo">
                        <a href="/proposed-hours-2014" id="story-2-photo">
                         <img src="/sites/default/files/homepage-hours-change.jpg" alt="Possible changes in hours for the D. H. Hill and Hunt Libraries, Fall 2014" width="100%" />
                     </a>
                 </div>
                 <h2><a href="/proposed-hours-2014" id="story-2-heading">Possible Changes To Hours</a></h2>
                 <p>Budget reductions are requiring the Libraries to propose changes to the overnight hours at the D. H. Hill and Hunt Libraries.</p>
                 <p><a href="https://www.lib.ncsu.edu/proposed-hours-2014" class="story-2-link">See the proposed new hours and learn more about the reductions to library staff and cuts to the Libraries’ collections budget.</a></p>
             </div>

             <div id="happenings">
                <div id="home-news">
                    <div class="happenings-photo">
                        <a href="/news/" class="news-link"><img src="/sites/default/files/news-front.jpg" alt="Library News" width="100%" /></a>
                    </div>
                    <div class="happenings-content">
                        <h2><a href="/news/" class="news-link">News</a></h2>
                        <p>Technology, innovative spaces, new library resources, and more…</p>
                    </div>
                </div>
                <div id="home-events">
                    <div class="happenings-photo">
                        <a href="/events/" class="events-link"><img src="/sites/default/files/events-front.jpg" alt="Library Happenings" width="100%" /></a>
                    </div>
                    <div class="happenings-content">
                        <h2><a href="/events/" class="events-link">Events</a></h2>
                        <p>Speaker series’, book discussions, campus and community events...</p>
                    </div>
                </div>
                <div id="home-exhibits">
                    <div class="happenings-photo">
                        <a href="/exhibits/" class="exhibits-link"><img src="/sites/all/themes/ncsulib_foundation/images/exhibits-front.jpg" alt="Library Exhibits" width="100%" /></a>
                    </div>
                    <div class="happenings-content">
                        <h2><a href="/exhibits/" class="exhibits-link">Exhibits</a></h2>
                        <p>Featured collections, visiting exhibits, digital immersion experiences…</p>
                    </div>
                </div>
            </div>

        </section> <!-- /bottom row -->

    </div> <!--/.main region -->
</main> <!--/.main-->
</div> <!--/.page -->
