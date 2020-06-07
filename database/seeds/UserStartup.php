<?php

use Illuminate\Database\Seeder;
use App\User;
class UserStartup extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('marketersRoot2020!');

        User::create([
            'name' => 'Root',
            'email' => 'root@johnkespitia.com',
            'password' => $password,
            'rol_id' => 1,
            'business_id'=>null
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@johnkespitia.com',
            'password' => $password,
            'rol_id' => 2,
            'business_id'=>null
        ]);
        
        User::create([
            'name' => 'Agent',
            'email' => 'agent@johnkespitia.com',
            'password' => $password,
            'rol_id' => 3,
            'business_id'=>null
        ]);
    }
}
