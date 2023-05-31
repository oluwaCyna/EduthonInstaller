<?php

namespace Delwathon\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;
use Delwathon\LaravelInstaller\Events\LaravelInstallerFinished;
use Delwathon\LaravelInstaller\Helpers\EnvironmentManager;
use Delwathon\LaravelInstaller\Helpers\FinalInstallManager;
use Delwathon\LaravelInstaller\Helpers\InstalledFileManager;

class FinalController extends Controller
{
    /**
     * Update installed file and display finished view.
     *
     * @param \Delwathon\LaravelInstaller\Helpers\InstalledFileManager $fileManager
     * @param \Delwathon\LaravelInstaller\Helpers\FinalInstallManager $finalInstall
     * @param \Delwathon\LaravelInstaller\Helpers\EnvironmentManager $environment
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function finish(InstalledFileManager $fileManager, FinalInstallManager $finalInstall, EnvironmentManager $environment)
    {
        $finalMessages = $finalInstall->runFinal();
        $finalStatusMessage = $fileManager->update();
        $finalEnvFile = $environment->getEnvContent();

        event(new LaravelInstallerFinished);

        return view('vendor.installer.finished', compact('finalMessages', 'finalStatusMessage', 'finalEnvFile'));
    }
}
