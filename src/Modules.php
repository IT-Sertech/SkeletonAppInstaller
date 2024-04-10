<?php

namespace Installer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class Modules extends LibraryInstaller {

    public function supports($packageType) {
        return $packageType === 'modules';
    }

    public function getInstallPath(PackageInterface $package) {
        $name = explode("/", $package->getName());
        $tmp_name = '';
        $arr = explode("_", $name[1]);
        foreach ($arr as $tmp){
            $tmp_name.=ucfirst($tmp);
        }
        return "modules/".$tmp_name."/";
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
