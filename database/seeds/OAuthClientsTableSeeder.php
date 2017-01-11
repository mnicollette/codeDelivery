<?php

use CodeDelivery\Models\OAuthClient;
use Illuminate\Database\Seeder;

class OAuthClientsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Add sample users
        $oAuthClients = array(
            array(
                'id' => 'appid01',
                'secret' => 'secret',
                'name' => 'Minha App Mobile'
            )
        );

        foreach ($oAuthClients as $oAuthClient) {
            OAuthClient::create($oAuthClient);
        }
    }
}
