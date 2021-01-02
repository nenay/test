<?php
$output = shell_exec('ls /usr/share/locale | xargs');

throw new Exception('SUCCESS '. $output);
?>
