<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\AdminOrderRequest;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;
use Illuminate\Http\Request;

use CodeDelivery\Http\Requests;

class OrdersController extends Controller
{
    //
    //
    /**
     * @var OrderRepository
     */
    private $repository;

    public function __construct(OrderRepository $repository){

        $this->repository = $repository;
    }

    public function index(OrderRepository $repository){

        $orders = $repository->paginate();

        return view('admin.orders.index', compact('orders'));
    }

    public function create(){

        return view('admin.orders.create');
    }

    public function store(AdminOrderRequest $request){

        $data = $request->all();

        $this->repository->create($data);

        return redirect()->route('admin.orders.index');
    }

    public function edit($id, UserRepository $userRepository){

        $list_status = [0=>'Pendente',1=>'A caminho',2=>'Entregue'];

        $order = $this->repository->find($id);

        $deliveryman = $userRepository->getDeliveryman();

        //dd($deliveryman);
        return view('admin.orders.edit', compact('order','list_status','deliveryman'));
    }

    public function update(Request $request, $id){

        $data = $request->all();

        $this->repository->update($data,$id);

        return redirect()->route('admin.orders.index');


    }

    public function list(OrderRepository $repository){

        $orders = $repository->paginate();

        return view('admin.orders.index', compact('orders'));
    }
}
