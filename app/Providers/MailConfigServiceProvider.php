<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Config;

class MailConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      if (\Schema::hasTable('notifysettings')) {
          $mail = DB::table('notifysettings')->first();
          if ($mail) //checking if table is not empty
          {
              $config = array(
                  'driver'     => $mail->mail_driver,
                  'host'       => $mail->mail_host,
                  'port'       => $mail->mail_port,
                  'from'       => array('address' => $mail->mail_from_address, 'name' => $mail->mail_from_name),
                  'encryption' => $mail->mail_encryption,
                  'username'   => $mail->mail_username,
                  'password'   => $mail->mail_password,
              );
              Config::set('mail', $config);
          }
      }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
