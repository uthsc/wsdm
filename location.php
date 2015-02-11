<?php
$pagename ='Location'; //This takes care of the <title> in the template and the <h1> on this page
include("template-top.php");
?>
<div class="row">
        <div class="small-12 columns schedule gutter">
<!--===============Conetnt Area (begin)===============-->
            <h1><?php echo $pagename;?></h1>
                <div class="row">
                    <div class="medium-4 columns">
                        <div class="panel">

                            <h3>Hilton Memphis</h3>
                                <p>939 Ridge Lake Boulevard<br />
                                Memphis, Tennessee 38120<br />
                                901-762-7445</p>
                                <img src="http://www3.hilton.com/resources/media/hi/MEMPHHF/en_US/img/shared/full_page_image_gallery/main/HH_ext01_675x359_FitToBoxSmallDimension_Center.jpg" alt="picture of the hilton hotel in memphis" />
                        </div>
                    </div>
                    <div class="medium-8 columns">
                        <p>A room block is reserved for March 4, 2014 - March 8, 2015.<br />
                        Special Room Rate:  $125/night + applicable tax and fees<br />
                        Hotel Reservation Deadline:  February 2nd, 2015<br />
                        (or until the group block is sold-out, whichever comes first)<br />
                        Hotel Check-in:  3 p.m.<br />
                        Hotel Check-out:  11 a.m.</p>
                        <p>Hotel provides free shuttle service from the Memphis International Airport. See you at the Hilton Memphis in March! We hope you enjoy your stay and your group's event!</p>
                        <a href="documents/hilton-meeting-room-map.pdf">Meeting Room Map</a>
                    </div>
                    <div class="columns">
                        <h2>Directions to the Hilton Memphis</h2>
                      <p>Exit Interstate 240 at the Germantown/Poplar Avenue Exit (Exit 15/Poplar Avenue East). After you merge with Poplar Avenue East, turn left at the first traffic light. Go under the bridge and you will be on Ridgeway Loop Road. Turn left again at the second traffic light onto Ridgeway Center Parkway, which becomes Ridge Lake Blvd. The Hilton Memphis entrance will be on your left, less than 1/2 mile from the traffic light.</p>

                    </div>
                </div>

<!--===============Conetnt Area (end)===============-->
            </div>
        </div>
			<?php include("template-bottom.php"); ?>