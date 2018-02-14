<?php

function slagle_edit_request()
{
    $to = 'nic.winn@uthsc.edu';
    $cc = 'cmooney@uthsc.edu';
    $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


    echo "<div class='row gutter'>
            <ul class='button-group even-3'>
                <li>
                    <a class='button expand fa fa-edit'
                        style='font-size: 1.5rem'
                        href='mailto:" . $to . "?subject=Slagle - " . $pagename . " (edit request)&cc=" . $cc . "&body=Edits for: " . $actual_link . "'>
                        &nbsp;Edit Page
                    </a>
                </li>
                <li>
                    <a class='button expand fa fa-eye'
                        style='font-size: 1.5rem'
                        href='http://slagledentalmeeting.com/" . basename($_SERVER['PHP_SELF']) . "'
                        target='_blank'>
                        &nbsp;Production View
                    </a>
                </li>
                <li>
                    <a class='button expand fa fa-edit'
                        style='font-size: 1.5rem'
                        href='mailto:" . $to . "?subject=Slagle - Menu" . $pagename . " (edit request)&cc=" . $cc . "&body=Current Menu:
%0D
&bull; " . $GLOBALS['menu_1'] . "%0A
&bull; " . $GLOBALS['menu_2'] . "%0A
      &bull; " . $GLOBALS['menu_2_a'] . "%0A
      &bull; " . $GLOBALS['menu_2_b'] . "%0A
      &bull; " . $GLOBALS['menu_2_c'] . "%0A
&bull; " . $GLOBALS['menu_3'] . "%0A
      &bull; " . $GLOBALS['menu_3_a'] . "%0A
      &bull; " . $GLOBALS['menu_3_b'] . "%0A
      &bull; " . htmlspecialchars($GLOBALS['menu_3_c']) . "%0A
      &bull; " . $GLOBALS['menu_3_d'] . "%0A
      &bull; " . $GLOBALS['menu_3_e'] . "%0A
      &bull; " . htmlspecialchars($GLOBALS['menu_3_f']) . "%0A
&bull; " . $GLOBALS['menu_4'] . "%0A
&bull; " . $GLOBALS['menu_5'] . "%0A
&bull; " . $GLOBALS['menu_6'] . "%0A
                        '>
                        &nbsp;Edit Menu
                    </a>
                </li>
              </ul>
          </div>";
}

if ($_SERVER['SERVER_NAME'] == 'slagledentalmeeting.uthsc.edu') {
    slagle_edit_request();
} else {
    echo '';
}

?>
<footer class="row header-footer-box footer-box">
    <div class="large-12 columns">
        <p>&copy; <?php echo date("Y") ?> William F. Slagle Dental Meeting&emsp;&bull;&emsp;
            <a href="http://www.facebook.com/228909720561308" style="color: #3b5998;">
                <i class="fa fa-facebook-square fa-lg"></i>
            </a>
        </p>
    </div>
</footer>
</div><!--end wrapper-->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>