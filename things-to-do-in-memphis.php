<?php
$pagename ='Things To Do In Memphis';
include("template-top.php");
?>

	<div class="row">
        <div class="small-12 columns schedule gutter">
<!--===============Conetnt Area (begin)===============-->
            <h1><?php echo $pagename;?></h1>
                <div class="row">
                    <div class="small-12 large-7 columns">
                         <h2></h2>
                            <p>The William F. Slagle Dental Meeting is being held for the 20th consecutive year in our home city of Memphis, Tennessee.  The University of Tennessee College of Dentistry and Dental Alumni Association welcome you.  We hope you will take advantage of the wide variety of attractions Memphis has to offer, such as art galleries, antique shops, fine restaurants, historic sites, and of course, the music.  Memphis is known for the blues, but you will find music for all tastes. For tourist information, visit <a href="http://www.memphistravel.com">www.memphistravel.com</a> or <a href="http://www.gomemphis.com">www.gomemphis.com</a>.</p>

                    </div>
                    <div class="small-12 large-5 columns">
                        <?php include("random10memphis_pics.php"); ?>
                        <br style="clear:both;" />
                    </div>
                </div>
<!--===============Conetnt Area (end)===============-->
            </div>
        </div>
			<?php include("template-bottom.php"); ?>