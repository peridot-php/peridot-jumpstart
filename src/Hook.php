<?php
namespace Peridot\Jumpstart;

use Composer\Script\Event;

class Hook 
{
    public static function copyPeridotFile(Event $event)
    {
        $io = $event->getIO();
        $src = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'peridot.php';
        $dest = getcwd() . DIRECTOR_SEPARATOR . 'peridot.php';

        $io->write("Attempting to copy peridot.php file");

        copy($source, $dest);
    }
}
