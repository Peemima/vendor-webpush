<?php
// Check Composer version
$composerVersion = shell_exec('composer --version');
echo 'Composer Version: ' . $composerVersion . "<br>";

// Check if autoloader exists
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
    echo 'Autoloader found and loaded.<br>';
} else {
    echo 'Autoloader not found.<br>';
}

// Check if WebPush package is installed
if (class_exists('Minishlink\WebPush\WebPush')) {
    echo 'WebPush package is installed.<br>';
} else {
    echo 'WebPush package is NOT installed.<br>';
}

// Check installed packages
$installedPackages = shell_exec('composer show');
echo 'Installed Packages:<br>' . nl2br($installedPackages);
?>
