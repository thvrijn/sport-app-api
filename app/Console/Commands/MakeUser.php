<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Exception;

class MakeUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $name = $this->ask('Enter a name');
            $email = $this->ask('Enter a email');
            $password = $this->secret('Enter a password');

            $user = new User([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
            ]);

            $user->save();

            $this->info('User has been successfully made!');
        } catch (\Exception) {
            $this->warn('Something when wrong or user already exist.');
        }
    }
}
