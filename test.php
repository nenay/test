<?php
$output = shell_exec('ls /var/www/pages/ | xargs');

throw new Exception('SUCCESS '. $output);
?>
