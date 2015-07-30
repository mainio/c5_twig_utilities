<?php
namespace Concrete\Package\TwigUtilities;

defined('C5_EXECUTE') or die(_("Access Denied."));

use \Mainio\C5\Twig\TwigServiceProvider;
use Core;
use Package;

class Controller extends Package
{

    protected $pkgHandle = 'twig_utilities';
    protected $appVersionRequired = '5.7.4';
    protected $pkgVersion = '0.0.1';

    public function getPackageName()
    {
        return t("Twig Utilities");
    }

    public function getPackageDescription()
    {
        return t("Utilities for twig templates.");
    }

    public function on_start()
    {
        $app = Core::getFacadeApplication();
        if ($app->bound('console')) {
            $cli = $app->make('console');
            $cli->add(new \Concrete\Package\TwigUtilities\Src\Command\ClearTwigCacheCommand());
        }
    }


}