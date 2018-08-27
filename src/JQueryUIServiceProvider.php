<?php


namespace Mouf\Javascript\JQueryUI;

use Mouf\Html\Utils\WebLibraryManager\WebLibrary;
use Psr\Container\ContainerInterface;
use TheCodingMachine\Funky\Annotations\Factory;
use TheCodingMachine\Funky\Annotations\Tag;
use TheCodingMachine\Funky\ServiceProvider;

class JQueryUIServiceProvider extends ServiceProvider
{
    /**
     * @Factory(name="jQueryFileTreeWebLibrary", tags={@Tag(name="webLibraries", priority=-10.0)})
     */
    public static function createWebLibrary(ContainerInterface $container): WebLibrary
    {
        return new WebLibrary(array('vendor/mouf/javascript.jquery.jquery-ui/js/jquery-ui-1.10.2.custom.min.js'),
            array('vendor/mouf/javascript.jquery.jquery-ui/css/ui-lightness/jquery-ui-1.10.2.custom.min.css'),
            $container->get('root_url'));
    }
}
