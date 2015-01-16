<?php
namespace Peridot\Jumpstart;

use Composer\Script\Event;

class Hook 
{
    public static function copyPeridotFile(Event $event)
    {
        $io = $event->getIO();
        $src = __DIR__ . DIRECTORY_SEPARATOR . 'peridot.php';
        $dest = getcwd() . DIRECTORY_SEPARATOR . 'peridot.php';

        $io->write("<info>Copying peridot.php file</info>");

        copy($src, $dest);
    }
}
