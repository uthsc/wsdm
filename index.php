<?php
$pagename = 'Home';
include("template-top.php");
$save_the_date_date = 'March&nbsp;2&#8209;4,&nbsp;2018';
$save_the_date_html = '
<br />
<a href="registration.php" class="button large" >Register Now!</a>
    <br />
    <h3 class="h3-after-h2"><i class="fa fa-calendar"></i> <span class="font-date">'.$save_the_date_date.'</span></h3>
    <br />
';
?>
    <div class="row" data-equalizer><!--big image and important info-->
        <div class="large-8 columns gutter">

            <div class="big-image big-image-large show-for-large-up" data-equalizer-watch>
                <div class="row">
                    <div class="small-10 columns small-centered text-center content-box" style="margin-top: 10%;">
                        <?php echo $save_the_date_html ?>
                    </div>
                </div>
            </div>
            <div class="big-image hide-for-large-up" data-equalizer-watch>
                <div class="row">
                    <div class="small-10 columns small-centered text-center content-box">
                        <?php echo $save_the_date_html ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="large-4 columns content-box gutter" data-equalizer-watch>
            <div class="row">
                <div class="columns">
                    <h3 class="text-center">NEW THIS YEAR!</h3>
                    <ul>
                        <li>New Online Registration System</li>
                        <li>Alumni Luncheon on Saturday</li>
                        <li>CE Slips emailed after the Meeting</li>
                    </ul>
                    <p><a href="registration.php">Register Now</a>, we want to see you at this premier educational event!</p>
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
            <a href="http://www.uthscalumni.com/s/1341/uthsc/index.aspx?sid=1341&gid=4&pgid=7026"><img src="images/cde-alumni-logo.png" class="affiliates" alt="uthsc alumni logo"/></a>
        </div>
    </div><!--end affiliates-->
    <div id="speakers" style="height:44px;"></div>

    <div class="row gutter"><!--speakers-->
        <div class="large-12 small-12 columns heading-box">
            <h2 class="center-text">2018 Featured Speakers</h2>
        </div>
        <div class="columns">
<!--            <div class="row">-->
<!--                <div class="columns schedule" data-equalizer-watch>-->
<!--                    <p style="text-align: center;margin: 1rem;">-->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        <br />-->
<!--                        -->
<!--                        -->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
                        <div class="row" data-equalizer>
                            <div class="large-4 medium-4 small-12 columns schedule" data-equalizer-watch>
<!--                                <h3><strong>Friday</strong>-->
<!--                                    <i class="fa fa-calendar"></i><br/><span class="font-date">March&nbsp;3,&nbsp;2017</span></h3>-->
                                <br />
                                <p>
                                    Charles Blair, DDS<br />
                                    Sandy Baird, MBA<br />
                                    Gerard Kugel, DMD, MS, PhD<br />
                                    John Olmsted, DDS, MS<br />
                                    Ms. Penny Reed
                                </p>
                            </div>
                            <div class="large-4 medium-4 small-12 columns schedule" data-equalizer-watch>
<!--                                <h3><strong>Saturday</strong>-->
<!--                                    <i class="fa fa-calendar"></i><br/><span class="font-date">March&nbsp;4,&nbsp;2017</span></h3>-->
                                <br />                                <p>
                                    Tom Viola, RPh, CCP<br />
                                    Mr. Gary Zelesky<br />
                                    David E. Umsted, DDS<br />
                                    David Sain, DDS<br />
                                    Cindy Saylors, MEd, RT(R)(CT)(ARRT)
                                </p>
                            </div>
                            <div class="large-4 medium-4 small-12 columns schedule" data-equalizer-watch>
<!--                                <h3><strong>Sunday</strong> <i class="fa fa-calendar"></i>-->
<!--                                    <br/><span class="font-date">March&nbsp;5,&nbsp;2017</span></h3>-->
                                <br />
                                <p>
                                    Catherine Warren, RDH, MEd<br />
                                    Lynn Russell, RDH, BSDH, MEd, EdD<br />
                                    Vinay Jain, BDS, MS, MDS<br />
                                    K. Mark Anderson, DDS<br />
                                    Beth Mobilian, RDH, BA, MEd
                                </p>
                            </div>
                        </div>
        </div>
        <div class="large-12 columns heading-box center-text">
            <p>*Speakers subject to change.</p>
        </div><div class="large-12 columns heading-box">
            <p>Stay tuned for the release of our detailed daily agenda including a list of exhibitor mini-sessions for 2018!</p>
            <p>A total of 18 credit hours may be earned by attending the maximum number of courses (15 hours), mini-sessions (2 hours), and breakfast with faculty (1 hour).</p>
        </div>
    </div><!--end speakers-->
<?php include("template-bottom.php"); ?>