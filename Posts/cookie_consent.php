<?php

setcookie('cookie-consent', 'Accepted', time() + 3600 * 24 * 365);

header("Location: " . $_SERVER['HTTP_REFERER']);
die();