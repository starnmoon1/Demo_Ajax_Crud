<?php


namespace App\Http\Repositories\note;


use App\note;

class noteRepo
{
    protected $note;
    public function __construct(note $note)
    {
        $this->note = $note;
    }

    public function getAll()
    {
       return $this->note->all();
    }

    public function saveObj($obj)
    {
        $obj->save();
    }

    public function delete($obj)
    {
        $obj->delete();
    }

    public function findById($id)
    {
        return $this->note->findOrFail();
    }
}
