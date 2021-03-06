﻿<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="google-site-verification" content="SrYsQ03OKS8FkbNXLYtTFNB5DyNfpIcxqr_7CnGmDu4"/>
    <meta name="apple-mobile-web-app-title" content="Dental Meeting"/>
    <meta property="og:image" content="http://slagledentalmeeting.com/images/wfsdm-logo-fb2.jpg"/>
    <meta property="og:title" content="William F. Slagle Dental Meeting"/>
    <meta property="og:site_name" content="William F. Slagle Dental Meeting"/>
    <meta property="og:url" content="http://slagledentalmeeting.com"/>
    <meta property="og:description" content="The William F. Slagle Dental Meeting, formerly named the MidSouth Dental Congress, is one of The University of Tennessee College of Dentistry’s greatest traditions.  The event was implemented in 1995 as a means to promote quality care by providing the dental team with an exceptional education opportunity. In accordance with this mission, this premier meeting is committed to offering extensive continuing education courses, commercial exhibits, and additional educational programs advancing the growth and development of the dental profession."/>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-44569544-1', 'slagledentalmeeting.com');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');

    </script>
    <title><?php echo $pagename; ?> | William F. Slagle Dental Meeting</title>
    <link rel="stylesheet" href="css/uthsc.css"/>
    <link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.css"/>
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <link rel="icon" href="images/favicon.png" type="image/png"/>
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-144x144-precomposed.png"/>
    <script src="bower_components/modernizr/modernizr.js"></script>
</head>
<body>
<div id="wrapper">
    <div class="row header-footer-box"><!--header-->
        <div class="large-4 medium-4 small-2 columns">&nbsp;</div>
        <div class="large-4 medium-4 small-8 columns">
            <a href="/"><img class="wfsdm-logo" src="images/wfsdm-logo.png" alt="slagle logo"/></a>
        </div>
        <div class="large-4 medium-4 small-2 columns">&nbsp;</div>
        <div class="small-12 columns">
            <p class="formerly">formerly MidSouth Dental Congress</p>
        </div>
    </div>
    <!--end header-->
    <div class="row gutter">
<?php
$menu_1     = "Home";

$menu_2     = "About";
$menu_2_a   = "Welcome";
$menu_2_b   = "Mission Statement";
$menu_2_c   = "News";

$menu_3     = "Attend";
$menu_3_a   = "Location";
$menu_3_b   = "Things To Do In Memphis";
$menu_3_c   = "Registration and Meeting Agenda";
$menu_3_d   = "Cancellation Policy";
$menu_3_e   = "Evaluation";
$menu_3_f   = "Alumni Events and Reunion Info";

$menu_4     = "Exhibits";

$menu_5     = "Sponsors";

$menu_6     = "Continuing Education";
?>

        <div class="contain-to-grid sticky">
            <nav class="top-bar" data-topbar role="navigation">
                <ul class="title-area">
                    <li class="name"><!-- <h1><a href="#">My Site</a></h1>--> </li>
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>
                <section class="top-bar-section">
                    <ul class="left">
                        <li><a href="index.php"><i class="fa fa-home fa-2x"></i> <?php echo $menu_1 ?></a></li>
                        <li class="has-dropdown"><a href="#"><?php echo $menu_2 ?></a>
                            <ul class="dropdown">
                                <li><a href="welcome.php"><?php echo $menu_2_a ?></a></li>
                                <li><a href="mission-statement.php"><?php echo $menu_2_b ?></a></li>
                                <li><a href="news.php"><?php echo $menu_2_c ?></a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="#"><?php echo $menu_3 ?></a>
                            <ul class="dropdown">
<!--                                <li><a href="speakers-schedule.php">Speakers &amp; Schedule</a></li>-->
                                <li><a href="location.php"><?php echo $menu_3_a ?></a></li>
                                <li><a href="things-to-do-in-memphis.php"><?php echo $menu_3_b ?></a></li>
                                <li><a href="registration.php"><?php echo $menu_3_c ?></a></li>
<!--                                <li><a href="http://events.meetingzilla.com/event/evenpt_main.aspx?aid=UTCOD&ek=7D301D3B26BA486F912F0C802B4762E8_0000_0045">Speakers &amp; Schedule <i class="fa fa-external-link"></i></a></li>-->
                                <li><a href="cancellation-policy.php"><?php echo $menu_3_d ?></a></li>
                                <li><a href="evaluation.php"><?php echo $menu_3_e ?></a></li>
                                <li>
                                    <a href="http://uthscalumni.com/DentistryWeekend2017"><?php echo $menu_3_f ?>
                                        <i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </li>
                        <li><a href="exhibits.php"><?php echo $menu_4 ?></a></li>
                        <li><a href="sponsors.php"><?php echo $menu_5 ?></a></li>
                        <li><a href="continuing-education.php"><?php echo $menu_6 ?></a></li>
                    </ul>
<!--                    <ul class="right">-->
<!--                        <li class="active"><a href="registration.php"><strong>Register Now!</strong></a></li>-->
<!--                    </ul>-->
<!--                    <ul class="right">-->
<!--                        <li class="active"><a href="handouts.php"><strong>Handouts&emsp;<i class="fa fa-file-o"></i></strong></a></li>-->
<!--                    </ul>-->
                </section>
            </nav>
        </div>
    </div>