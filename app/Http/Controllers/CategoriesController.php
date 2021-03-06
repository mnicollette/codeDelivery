<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\AdminCategoryRequest;
use CodeDelivery\Repositories\CategoryRepository;
use DateTimeInterface;
use Illuminate\Http\Request;

use CodeDelivery\Http\Requests;




class CategoriesController extends Controller
{
    //
    /**
     * @var CategoryRepository
     */
    private $repository;

    public function __construct(CategoryRepository $repository){

        $this->repository = $repository;
    }

    public function index(CategoryRepository $repository){

        $categories = $repository->paginate(5);

        return view('admin.categories.index', compact('categories'));
    }

    public function create(){

        return view('admin.categories.create');
    }

    public function store(AdminCategoryRequest $request){

        $data = $request->all();

        $this->repository->create($data);

        return redirect()->route('admin.categories.index');
    }

    public function edit($id){

        $category = $this->repository->find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(AdminCategoryRequest $request, $id){

        $data = $request->all();

        $this->repository->update($data,$id);

        DateTimeInterface::format();

        return redirect()->route('admin.categories.index');


    }

}
