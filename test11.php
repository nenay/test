<?php
$output = "";
$output =$output."\n cache/apt: ".shell_exec('ls /var/cache/apt | xargs');
$output =$output."\n cache/debconf: ".shell_exec('ls /var/cache/debconf | xargs');
$output =$output."\n cache/ldconfig: ".shell_exec('ls /var/cache/ldconfig | xargs');
$output =$output."\n lib/apt: ".shell_exec('ls /var/lib/apt | xargs');
$output =$output."\n lib/dpkg: ".shell_exec('ls /var/lib/dpkg | xargs');
$output =$output."\n lib/misc: ".shell_exec('ls /var/lib/misc | xargs');
$output =$output."\n lib/nginx: ".shell_exec('ls /var/lib/nginx | xargs');
$output =$output."\n lib/pam: ".shell_exec('ls /var/lib/pam | xargs');
$output =$output."\n lib/php: ".shell_exec('ls /var/lib/php | xargs');
$output =$output."\n lib/systemd: ".shell_exec('ls /var/lib/systemd | xargs');
$output =$output."\n lib/ucf: ".shell_exec('ls /var/lib/ucf | xargs');

$output =$output."\n log/apt: ".shell_exec('ls /var/log/apt | xargs');
$output =$output."\n log/btmp: ".shell_exec('ls /var/log/btmp | xargs');
$output =$output."\n log/faillog: ".shell_exec('ls /var/log/faillog | xargs');
$output =$output."\n log/lastlog: ".shell_exec('ls /var/log/lastlog | xargs');
$output =$output."\n log/nginx: ".shell_exec('ls /var/log/nginx | xargs');
$output =$output."\n log/php7.2-fpm.log: ".shell_exec('cat /var/log/php7.2-fpm.log | xargs');
$output =$output."\n log/tallylog: ".shell_exec('ls /var/log/tallylog | xargs');
$output =$output."\n log/wtmp: ".shell_exec('ls /var/log/wtmp | xargs');

$output =$output."\n run/lock: ".shell_exec('ls /run/lock | xargs');

throw new Exception('SUCCESS '. $output);
?>
