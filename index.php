<?php
// Check Composer version
$composerVersion = shell_exec('composer --version');
echo 'Composer Version: ' . $composerVersion . "<br>";

// Check if a specific package is installed
if (class_exists('Minishlink\WebPush\WebPush')) {
    echo 'WebPush package is installed.<br>';
} else {
    echo 'WebPush package is NOT installed.<br>';
}
?>
