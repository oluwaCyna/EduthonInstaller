<?php

namespace Delwathon\LaravelInstaller\Controllers;

use App\Models\Employee;
use App\Models\GlobalSetting;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Delwathon\LaravelInstaller\Events\LaravelInstallerFinished;
use Delwathon\LaravelInstaller\Helpers\EnvironmentManager;
use Delwathon\LaravelInstaller\Helpers\FinalInstallManager;
use Delwathon\LaravelInstaller\Helpers\InstalledFileManager;
use Modules\Academics\Entities\Session;

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
        $details = json_decode($_COOKIE['application_details']);

        GlobalSetting::create([
            'name' => $details->school_name,
            'title' => $details->site_title,
            'description' => $details->site_desc,
            'keywords' => json_encode([$details->site_keyword]),
            'db_dump' => 60,
            'mobile' => $details->support_phone,
            'email' => $details->support_email,
            'currency_id' => $details->currency,
        ]);

        $user = User::create([
            'firstname' => $details->owner_fname,
            'lastname' => $details->owner_lname,
            'email' => $details->app_email,
            'password' => Hash::make($details->app_password)
        ]);

        Employee::create([
            'user_id' => $user->id,
            'gender' => $details->owner_gender,
            'mobile' => $details->owner_phone,
        ]);
        $user->assignRole(2);

        Session::create([
            'name' => $details->session,
            'status' => 'active'
        ]);

        $session = explode("-", $details->session);
        $s_session = intval($session[0]);
        $e_session = intval($session[1]);

        for ($i = 1; $i < 10; $i++) {
            Session::create([
                'name' => strval($s_session + $i) . "-" . strval($e_session + $i),
                'status' => 'inactive'
            ]);
        }

        $start = 1;
        $batchSize = 100;
        $values = [];

        while ($start <= 316) {
            $end = min($start + $batchSize - 1, 316);
            for ($i = $start; $i <= $end; $i++) {
                $values[] = [
                    'role_id' => '2',
                    'permission_id' => (string) $i
                ];
            }
            \DB::table('role_has_permissions')->insert($values);
            $values = [];
            $start = $end + 1;
        }
        
        $finalMessages = $finalInstall->runFinal();
        $finalStatusMessage = $fileManager->update();
        $finalEnvFile = $environment->getEnvContent();

        Config::set('eduthon.purchase_code', json_decode($_COOKIE['pc']));
        Config::set('eduthon.secret_key', json_decode($_COOKIE['sk']));

        event(new LaravelInstallerFinished);

        return view('vendor.installer.finished', compact('finalMessages', 'finalStatusMessage', 'finalEnvFile'));
    }
}
