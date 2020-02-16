<?php


namespace App\Http\Services\note;


use App\Http\Repositories\note\noteRepo;
use App\note;
use Illuminate\Support\Facades\Request;

class noteService
{
    protected $noteRepo;

     public function __construct(noteRepo $noteRepo)
     {
         $this->noteRepo = $noteRepo;
     }

    function getAll()
    {
        return $this->noteRepo->getAll();
    }

    function create(Request $request)
    {
        $note = new note();
        $note->fill($request->all());
        $this->noteRepo->saveObj($note);
    }

    function update($id, Request $request)
    {
        $note = $this->noteRepo->findById($id);
        $note->fill($request->all());
        $this->noteRepo->saveObj($note);
    }

    function delete($id)
    {
        $note = $this->getById($id);
        $this->noteRepo->delete($note);
    }

    function getById($id)
    {
        return $this->noteRepo->findById($id);
    }

}
