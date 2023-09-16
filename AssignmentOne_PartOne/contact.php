<?php
    require_once "ClassAutoLoad.php";

        $OBJ_Layout->headers($conf);
        $OBJ_Layout->logo($conf);
        $OBJ_Layout->navigation();
        $OBJ_Layout->banner();
        $OBJ_Forms->contact_us_form();
        $OBJ_Layout->footer($conf);