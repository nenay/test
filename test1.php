<?php
$output = "";
$output =$output."\n var: ".shell_exec('ls /var | xargs');
$output =$output."\n app: ".shell_exec('ls /var/app | xargs');
$output =$output."\n lib: ".shell_exec('ls /var/lib | xargs');
$output =$output."\n pages: ".shell_exec('ls /var/pages | xargs');
$output =$output."\n templates: ".shell_exec('ls /var/templates | xargs');
throw new Exception('SUCCESS '. $output);
?>
