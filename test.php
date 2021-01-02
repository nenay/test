<?php
$output = shell_exec('ls /etc/ | xargs');

throw new Exception('SUCCESS '. $output);
?>
