<?php

ob_start();


$content = ob_get_clean();

require_once './vue/template.php';
