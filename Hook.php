<?php

namespace TestComposerDependency;

use Composer\Script\Event;

class Hook
{
    public static function invoke(Event $event)
    {
        echo 'HOOK called.' .  PHP_EOL;
    }
}