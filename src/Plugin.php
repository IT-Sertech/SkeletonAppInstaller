<?php

namespace Installer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface {

    public function activate(Composer $composer, IOInterface $io) {
        $composer->getInstallationManager()->addInstaller(new Core($io, $composer));
        $composer->getInstallationManager()->addInstaller(new Modules($io, $composer));
        //$composer->getInstallationManager()->addInstaller(new Template($io, $composer));
        //shell_exec("cd ".__DIR__." && sh shell.sh");
    }

    /**
     * @inheritDoc
     */
    public function deactivate(Composer $composer, IOInterface $io) {
        // TODO: Implement deactivate() method.
    }

    /**
     * @inheritDoc
     */
    public function uninstall(Composer $composer, IOInterface $io) {
        // TODO: Implement uninstall() method.
    }

}
