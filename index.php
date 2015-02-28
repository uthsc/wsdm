<?php
$pagename = 'Home';
include("template-top.php");
?>

    <div class="row" data-equalizer><!--big image and important info-->
        <div class="large-8 columns gutter">

            <div class="big-image big-image-large show-for-large-up" data-equalizer-watch>
                <div class="row">
                    <div class="large-8 medium-7 small-9 columns">
                        <img class="padded-image" src="images/celebrating-20-orange.png" width="100%" alt="celebrating 20 years"/>
                    </div>
                </div>
            </div>
            <div class="big-image hide-for-large-up" data-equalizer-watch>
                <div class="row">
                    <div class="large-8 medium-7 small-9 columns">
                        <img class="padded-image" src="images/celebrating-20-orange.png" width="100%" alt="celebrating 20 years"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="large-4 columns content-box gutter" data-equalizer-watch>
            <div class="row">
                <div class="large-12 medium-6 columns">
                    <?php
                    $info_box = '
                            <h2>Save the Date</h2>
                            <h3 class="h3-after-h2"><i class="fa fa-calendar"></i> <span class="font-date">March 6-8, 2015</span></h3>
                            <a href="registration.php" class="expand round button tiny warning">Register Here!</a>

                            ';
                    if (
                        (mktime() > strtotime("march 3, 2015")) &&
                        (mktime() < strtotime("march 4, 2015"))
                    ) {
                        $info_box = '
                                    <p style="margin-top: 20px;"><strong>Online</strong> registration closes:<br />
                                    Tuesday, March 3, 10am<br />
                                    <strong>On-site</strong> registration open:<br />
                                    Friday, March 6, 7am - 6pm<br />
                                    Saturday, March 7, 7am - 2pm<br />
                                    </p>
                                    <a href="registration.php" class="expand round button tiny warning">Register Here!</a>

                                    ';
                    }
                    if (mktime() > strtotime("march 4, 2015")) {
                        $info_box = '
                                    <p style="margin-top: 20px;"><strong>Online</strong> registration closes:<br />
                                    Tuesday, March 3, 10am<br />
                                    <strong>On-site</strong> registration open:<br />
                                    Friday, March 6, 7am - 6pm<br />
                                    Saturday, March 7, 7am - 2pm<br />
                                    </p>
                                    ';
                    }

                    echo $info_box;
                    ?>
                    <hr class="hide-for-medium"/>
                </div>
                <div class="large-12 medium-6 columns">
                    <div class="row">
                        <div class="show-for-medium"><br/></div>
                        <div class="small-2 columns">

                            <i class="fa fa-map-marker fa-5x"></i>
                        </div>
                        <div class="small-10 columns">

                            <p><strong>Hilton Memphis</strong><br/>
                                <a href="#" data-reveal-id="mapModal">939 Ridge Lake Boulevard<br/> Memphis, Tennessee 38120</a><br/>901-762-7445
                            </p>

                            <div id="mapModal" class="reveal-modal" data-reveal="data-reveal">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d816.0168084196964!2d-89.86880200000006!3d35.105032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xfe047068d613996b!2sHilton+Memphis!5e0!3m2!1sen!2sus!4v1424794919549" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                                <?php
                                if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows') !== false) {
                                    ?>
                                    <a href="bingmaps:?collection=point.35.1050219_-89.8688783_William%20F.%20Slagle%20Dental%20Meeting&lvl=10" class="button show-for-large-up">Open in Desktop App</a>

                                <?php
                                }
                                if (strpos($_SERVER['HTTP_USER_AGENT'], 'Mac') !== false) {
                                    ?>
                                    <a href="http://maps.apple.com/?q=35.1050219,-89.8688783" class="button show-for-large-up">Open in App</a>
                                <?php
                                }
                                ?>
                                <a href="http://maps.apple.com/?q=35.1050219,-89.8688783" class="button hide-for-large-up">Open in App</a>

                                <a class="close-reveal-modal">&#215;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="large-12 hide-for-medium columns">
                    <img class="padded-image" src="http://www3.hilton.com/resources/media/hi/MEMPHHF/en_US/img/shared/full_page_image_gallery/main/HH_ext01_675x359_FitToBoxSmallDimension_Center.jpg" alt="picture of the hilton hotel in memphis"/>
                </div>
                <div class="large-12 show-for-medium columns hilton-image">
                </div>
            </div>
        </div>
    </div><!--end big image and important info-->

    <div class="row gutter"><!--affiliates-->
        <div class="large-4 medium-4 small-12 columns content-box">
            <a href="http://uthsc.edu/"><img src="images/uthsc-logo-stack.png" class="affiliates" alt="uthsc logo"/></a>
        </div>
        <div class="large-4 medium-4 small-12 columns content-box">
            <a href="http://uthsc.edu/dentistry/"><img src="images/cod-seal.png" class="affiliates" alt="uthsc college of denistry seal"/></a>
        </div>
        <div class="large-4 medium-4 small-12 columns content-box">
            <a href="http://uthscalumni.com/"><img src="images/cde-alumni-logo.png" class="affiliates" alt="uthsc alumni logo"/></a>
        </div>
    </div><!--end affiliates-->
    <div id="speakers" style="height:44px;"></div>

    <div class="row gutter"><!--speakers-->
        <div class="large-12 small-12 columns heading-box">
            <h2 class="center-text">Speakers</h2>
        </div>
        <div class="large-12 columns">
            <div class="row" data-equalizer>
                <div class="large-4 medium-4 small-12 columns schedule" data-equalizer-watch>
                    <h3><strong>Friday</strong>
                        <i class="fa fa-calendar"></i><br/><span class="font-date">March&nbsp;6,&nbsp;2015</span></h3>

                    <p><strong>Darrell W. Cain, CPA</strong><br/>
                        <em>The Economy, Investments &amp; Your Financial Freedom</em><br/>
                        <em>Financial Patterns Dentists Continue to Adhere to that Amaze Us!</em></p>

                    <p><strong>John A. Svirsky, DDS, MEd</strong><br/>
                        <em>Come in and Catch it: the review that sticks</em><br/>
                        <em>Lumps, Bumps and Lesions for all Seasons</em></p>

                    <p><strong>Stanley F. Malamed, DDS</strong><br/> <em>Emergency Medicine: Back to Basics</em></p>

                    <p><strong>Ian Erwood, DDS</strong><br/>
                        <em>MDI Two Day Certification &amp; Expanded Indications Hands-On Seminar</em><br/>
                        <strong><em> (this course is a two day commitment)</em></strong></p>
                </div>
                <div class="large-4 medium-4 small-12 columns schedule" data-equalizer-watch>
                    <h3><strong>Saturday</strong>
                        <i class="fa fa-calendar"></i><br/><span class="font-date">March&nbsp;7,&nbsp;2015</span></h3>

                    <p><strong>Connie Podesta</strong><br/> Keynote Address <em>and…</em><br/>
                        <em>Life Would be Easy if it Weren't for Other People</em></p>

                    <p><strong>Harold L. Crossley, DDS, PhD</strong><br/>
                        <em>Medical &amp; Dental Implications of the Most Common Physician–Prescribed Medications!!</em>
                    </p>

                    <p><strong>John O. Burgess, DDS, MS</strong><br/>
                        <em>Current Materials &amp; Restorative Dentistry Techniques</em></p>

                    <p><strong>James F. Simon, DDS, MEd</strong><br/>
                        <em>All-Ceramic and CAD/CAM Technology (Lecture &amp; Hands-On)</em></p>
                </div>
                <div class="large-4 medium-4 small-12 columns schedule" data-equalizer-watch>
                    <h3><strong>Sunday</strong> <i class="fa fa-calendar"></i>
                        <br/><span class="font-date">March&nbsp;8,&nbsp;2015</span></h3>

                    <p><strong>Laney Kay, JD</strong><br/> <em>Blood, Spit &amp; Fears: A Painless OSHA Update</em></p>

                    <p><strong>Morris L. Robbins, DDS</strong><br/> <em>CPR Certification &amp; ReCertification</em></p>

                    <p><strong>James Ragain, Jr., DDS, MS, PhD, FICD, FACD</strong><br/>
                        <em>Chemical Dependency: A review of substance abuse, its impact on the dental practice and rehabilitation strategies</em>
                    </p>

                    <p><strong>Ronald C. Staples, DDS</strong><br/>
                        <em>Management of the Medically Compromised Dental Patient</em></p>

                    <p><strong>Jacob Shiloah, DMD</strong><br/> <em>Periodontics for the Entire Dental Team</em></p>
                </div>
            </div>
        </div>
        <div class="large-12 columns heading-box">
            <p>A total of 19 credit hours may be earned by attending the maximum number of courses (16 hours), mini-sessions (2 hours), and breakfast with faculty (1 hour).</p>
        </div>
    </div><!--end speakers-->
<?php include("template-bottom.php"); ?>