<?php

namespace DesignPatterns\Structural\Adapter\RealWorld;

/**
 * The Target interface represents the interface that your application's classes
 * already follow.
 */
interface NotificationInterface
{
    public function send(string $title, string $message);
}