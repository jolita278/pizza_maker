<?php
/**
 * Created by PhpStorm.
 * User: pauli
 * Date: 5/17/2017
 * Time: 9:49 AM
 */

namespace App\Console\Commands;

use App\Models\PMUsers;
use Illuminate\Console\Command;
use Ramsey\Uuid\Uuid;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command
     * @var string
     */
    protected $signature = 'make:admin';
    /**
     * The console command description
     * @var string
     */
    protected $description = 'Create user with administrative role';

    public function handle(){
        //$this->comment('Scanning items');
        $email = $this->ask('please provide email');
        $this->info($email);
        $name = $this->ask('please provide name');
        $this->info($name);
        $password = $this->ask('please provide password');
        $this->info($password);

        $record = PMUsers::create(array(
            'id' => Uuid::uuid4(),
            'name' => $name,
            'email' => $email,
            'password' => bcrypt( $password),
        ));

        $record->rolesConnectionData()->sync('super-admin','member');
    }
}