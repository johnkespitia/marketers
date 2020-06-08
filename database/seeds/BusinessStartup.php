<?php

use Illuminate\Database\Seeder;
use App\Business;
class BusinessStartup extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Business::create([
            'name' => 'StartupBuseiness',
            'email' => 'startup@johnkespitia.com',
            'address'=>'88 ',
            'coordinates'=>'99 ',
            'phone'=>'3214356688',
            'whatsapp'=>'+573214356688',
            'description'=>'nothing',
            'website'=>'http://nothing.com',

        ]);
    }
}
