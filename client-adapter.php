<?php

require_once __DIR__ . './vendor/autoload.php';

use DesignPatterns\Structural\Adapter\RealWorld\{NotificationInterface, EmailNotification, SlackNotification, SlackApi};

/**
 * The client code can work with any class that follows the Target interface.
 */
function clientCode(NotificationInterface $notification)
{
    echo $notification->send("Website is down!",
        "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
        "Our website is not responding. Call admins and bring it up!");
}

echo "Client code is designed correctly and works with email notifications:\n";
$notification = new EmailNotification("developers@example.com");
clientCode($notification);
echo "\n\n";


echo "The same client code can work with other classes via adapter:\n";
$slackApi = new SlackApi("example.com", "XXXXXXXX");
$notification = new SlackNotification($slackApi, "Example.com Developers");
clientCode($notification);