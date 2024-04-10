<?php

namespace Installer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;
use React\Promise\PromiseInterface;

class Core extends LibraryInstaller {

    public function supports($packageType) {
        return $packageType === 'core';
    }

    public function getInstallPath(PackageInterface $package) {
        return "core/";
    }

    /**
     * @inheritDoc
     */
    public function download(PackageInterface $package, PackageInterface $prevPackage = null)
    {
        // TODO: Implement download() method.
    }

    /**
     * @inheritDoc
     */
    public function prepare($type, PackageInterface $package, PackageInterface $prevPackage = null)
    {
        // TODO: Implement prepare() method.
    }

    /**
     * @inheritDoc
     */
    public function cleanup($type, PackageInterface $package, PackageInterface $prevPackage = null)
    {
        // TODO: Implement cleanup() method.
    }
}
