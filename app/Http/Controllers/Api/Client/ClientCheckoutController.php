<?php

namespace CodeDelivery\Http\Controllers\Api\Client;


use CodeDelivery\Http\Controllers\Controller;
use CodeDelivery\Http\Requests\AdminClientRequest;
use CodeDelivery\Http\Requests\CheckoutRequest;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Services\OrderService;
use Illuminate\Http\Request;

use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class ClientCheckoutController extends Controller
{
    //
    /**
     * @var ClientCheckoutController
     */
    private $repository;
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var OrderService
     */
    private $service;

    private $with = ['client','cupom','items'];

    public function __construct(
        OrderRepository $repository,
        UserRepository $userRepository,
        OrderService $service
    ){

        $this->repository = $repository;
        $this->userRepository = $userRepository;
        $this->service = $service;
    }

    public function index(){

        $id = Authorizer::getResourceOwnerId();
        //dd($this->userRepository->find($id)->client->id);
        $clientId = $this->userRepository->find($id)->client->id;


        $orders = $this->repository
            ->skipPresenter(false)
            ->with($this->with)
            ->scopeQuery(function ($query) use($clientId){

            return $query->where('client_id','=', $clientId);

        })->paginate();

        return $orders;
    }


    public function store(CheckoutRequest $request){

        $data = $request->all();

        $id = Authorizer::getResourceOwnerId();

        $clientId = $this->userRepository->find($id)->client->id;
        $data['client_id'] = $clientId;

        $obj = $this->service->create($data);

        $obj = $this->repository
            ->skipPresenter(false)
            ->with($this->with)
            ->find($obj->id);

        return $obj;
    }


    public function show($id){

        $obj = $this->repository
            ->skipPresenter(false)
            ->with($this->with)
            ->find($id);

        /*$obj->items->each(function($item){
            $item->product;

        });*/

        return $obj;


    }
}
