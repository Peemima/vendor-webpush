<?php
// Check Composer version
$composerVersion = shell_exec('composer --version');
echo 'Composer Version: ' . $composerVersion . "<br>";

// Check if WebPush package is installed
if (class_exists('Minishlink\WebPush\WebPush')) {
    echo 'WebPush package is installed.<br>';
} else {
    echo 'WebPush package is NOT installed.<br>';
}

// You can also check other dependencies similarly, for example:
// if (class_exists('Some\Other\Class')) {
//     echo 'Some other package is installed.<br>';
// } else {
//     echo 'Some other package is NOT installed.<br>';
// }
?>
