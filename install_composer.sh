#!/bin/sh

# Add minishlink/web-push to composer.json
composer require minishlink/web-push

# Run Composer install with verbose output and log to file
composer install -v --ignore-platform-reqs > composer_output.txt 2>&1

# Display the log file content for debugging
cat composer_output.txt
