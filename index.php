<?php
    
    function logMessage($message, $severity = 'info') {
        file_put_contents('log.txt', $severity.' ['.(date('m/d/Y h:i:s a', time())).']: '.$message."\n", FILE_APPEND);
    }
    
    logMessage('Request made..');
    
    if($_GET['hub_verify_token'] === 'my_bot_app_will_change_the_world') {
        
        logMessage('Request validated', 'success');
        echo $_GET['hub_challenge'];
        
    } else {
        logMessage('Wrong verification token', 'error');
        echo 'Error, wrong validation token';
    }
   
?>