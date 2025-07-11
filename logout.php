<?php
session_start();
session_destroy();
header("Location: loginadminkepsek.html");
exit;
