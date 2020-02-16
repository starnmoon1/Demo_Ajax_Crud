<?php


namespace App\Service\Eloquent;


abstract class EloquentRepository
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function findById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function store($data)
    {
        try {
            $obj = $this->model->store($data);
        } catch (\Exception $e) {
            return null;
        }

        return $obj;
    }

    public function update($data, $obj)
    {
        $obj->update($data);
        return $obj;
    }

    public function destroy($obj)
    {
        $obj->delete();
    }
}
