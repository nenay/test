<?php
$output = "";
$output =$output."\n var: ".shell_exec('ls /var | xargs');
throw new Exception('SUCCESS '. $output);
?>
