<?php
$pagename = 'Evaluation';
include("template-top.php");
?>

    <div class="row">
        <div class="small-12 columns schedule gutter">
            <!--===============Content Area (begin)===============-->
            <h1><?php echo $pagename; ?></h1>

            <div class="row">
                <div class="large-7 columns">
                    <p>We appreciate your feedback!</p>

                    <p>The William F. Slagle Dental Meeting evaluation form will be available throughout the meeting and will remain open for the few weeks after for completion.</p>
                    <?php
                    $link = '';
                    $class = 'disabled';
                    $title = 'Inactive. Only available March 4, 2016 - April 6, 2016';
                    if (
                        (mktime() > strtotime("march 4, 2016")) &&
                        (mktime() < strtotime("april 7, 2016"))
                    ) {
                        $link = 'href="https://uthsc.co1.qualtrics.com/SE/?SID=SV_9mkie92rFvyVe3X"';
                        $class = '';
                        $title = 'Submit today and be eligible for the prize drawing!';
                    }
                    ?>
                    <a <?php echo $link; ?> class="button radius expand <?php echo $class; ?>" title="<?php echo $title; ?>"><strong>2017 Evaluation Form</strong><br/> Available March 3 - April 3 2017</a>
                    <p>The winner will be chosen at random and will receive a <strong>FREE</strong> registration for the 2018 meeting!</p>
                </div>
                <div class="large-5 columns">
                    <img src="images/evaluation.jpg" alt="Attendee taking evaluation" style="padding-bottom:2em;"/>

                </div>
            </div>
            <!--===============Content Area (end)===============-->
        </div>
    </div>
<?php include("template-bottom.php"); ?>