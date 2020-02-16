<?php

namespace App\Http\Controllers;

use App\Http\Services\category\ServiceCategoryInterface;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    protected $categoryService;
    public function __construct(ServiceCategoryInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function create()
    {
        return view('admin.categories.add');
    }

    public function store(Request $request)
    {
        $this->categoryService->create($request);
        return redirect()->route('category.index');
    }

    public function index(){
        $categories = $this->categoryService->getAll();
        return view('admin.categories.list', compact('categories'));
    }

    public function delete($id){
        $category = $this->categoryService->findById($id);
        $this->categoryService->delete($category);
        return redirect()->route('category.index');

    }

    public function edit($id){
       $category =  $this->categoryService->findById($id);
        return redirect()->route('category.edit', ('category'));
    }

    public function update ($id, $request)
    {
        $this->categoryService->edit($id, $request);
        return redirect()->route('category.index');
    }
}
