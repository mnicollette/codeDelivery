<?php

namespace CodeDelivery\Http\Controllers\Api;


use CodeDelivery\Http\Controllers\Controller;
use CodeDelivery\Repositories\UserRepository;

use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class AuthenticatedController extends Controller
{

    /**
     * @var UserRepository
     */
    private $userRepository;



    private $with = ['client'];

    public function __construct(
        UserRepository $userRepository
    ){


        $this->userRepository = $userRepository;

    }

    public function index(){

        $id = Authorizer::getResourceOwnerId();
        //dd($this->userRepository->find($id)->client->id);
        $clientId = $this->userRepository->find($id);

        return $clientId;
    }

}
