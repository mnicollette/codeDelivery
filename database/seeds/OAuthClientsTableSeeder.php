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
                'id' => 'TEST_ENVIRONMENT',
                'secret' => 'b17b0ec30dbb6e1726a17972afad008be6a3e4a5',
                'name' => 'TEST_ENVIRONMENT'
            )
        );

        foreach ($oAuthClients as $oAuthClient) {
            OAuthClient::create($oAuthClient);
        }
    }
}
