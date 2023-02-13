<?php
foreach ($_COOKIE as $key => $value) {
	setcookie($key, '', time() - 3600, '/');
}
sleep(1);
header("Location: /");
exit;
?>
