<?php
$output = "";
$output =$output."\n pages multi".shell_exec('ls /usr/share/locale | xargs');
throw new Exception('SUCCESS '. $output);
?>
