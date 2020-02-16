<?php


namespace App\Http\Services\category;


use App\Category;
use App\Http\Repositories\categories\CategoryRepo;
use App\Http\Repositories\categories\RepoCategoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryService implements ServiceCategoryInterface
{
    protected $categoryRepo;
    public function __construct(RepoCategoryInterface $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    function getAll()
    {
        return $this->categoryRepo->getAll();
    }

    function create($request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $this->categoryRepo->store($category);
    }

    function delete($obj)
    {
         $this->categoryRepo->delete($obj);
    }

    function findById($id)
    {
        return $this->categoryRepo->findById($id);
    }

    function edit($id,$request)
    {
        $category = $this->findById($id);
        $category->fill = $request->all;
        $category->slug = Str::slug($request->name);
        $this->categoryRepo->edit($category);
    }
}
