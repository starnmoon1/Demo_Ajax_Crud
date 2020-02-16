<?php


namespace App\Http\Repositories\categories;


use App\Category;

class CategoryRepo implements RepoCategoryInterface
{
    protected $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    function getAll()
    {
       return $this->category->all();
    }

    function store($obj)
    {
        $obj->save();
    }

    function delete($obj)
    {
        $obj->delete();
    }

    function findById($id)
    {
        return $this->category->findOrFail($id);
    }

    function edit($obj)
    {
        $obj->update();
    }
}
