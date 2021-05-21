<?php
    echo "Log file"."<hr>";
    $log_message = "\nyou are dividing two numbers!";
    echo "</br>";
    $log_file = "./errors.log";
    error_log($log_message, 3, $log_file);
?>