<?php
$pagename = 'Evaluation';
include("template-top.php");
?>

    <div class="row">
        <div class="small-12 columns schedule gutter">
            <!--===============Conetnt Area (begin)===============-->
            <h1><?php echo $pagename; ?></h1>

            <div class="row">
                <div class="large-7 columns">
                    <p>We appreciate your feedback!</p>

                    <p>The William F. Slagle Dental Meeting evaluation form will be available throughout the meeting and will remain open for the few weeks after for completion.</p>
                    <?php
                    $link = '';
                    $class = 'disabled';
                    $title = 'Inactive. Only available March 6, 2015 - April 6, 2015';
                    if (
                        (mktime() > strtotime("march 6, 2015")) &&
                        (mktime() < strtotime("april 7, 2015"))
                    ) {
                        $link = 'href="https://uthsc.co1.qualtrics.com/SE/?SID=SV_b1LUGfIHeNeACcB"';
                        $class = '';
                        $title = 'Submit today and be eligible for the prize drawing!';
                    }
                    ?>
                    <a <?php echo $link; ?> class="button radius expand <?php echo $class; ?>" title="<?php echo $title; ?>"><strong>2016 Evaluation Form</strong><br/> Available March 4 - April 6</a>
                    <p>The winner will be chosen at random and will receive a <strong>FREE</strong> registration for the 2017 meeting!</p>
                </div>
                <div class="large-5 columns">
                    <img src="images/evaluation.jpg" alt="Attendee taking evaluation" style="padding-bottom:2em;"/>

                </div>
            </div>
            <!--===============Conetnt Area (end)===============-->
        </div>
    </div>
<?php include("template-bottom.php"); ?>