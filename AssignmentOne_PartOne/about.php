<?php
    require_once "ClassAutoLoad.php";
        $OBJ_Layout->headers($conf);
        $OBJ_Layout->logo($conf);
        $OBJ_Layout->navigation();
        $OBJ_Layout->banner();
        $OBJ_Contents->about_cnt();
        $OBJ_Layout->footer($conf);