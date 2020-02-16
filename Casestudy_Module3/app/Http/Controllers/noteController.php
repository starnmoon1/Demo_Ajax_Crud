<?php

namespace App\Http\Controllers;

use App\Http\Services\note\noteService;
use Illuminate\Http\Request;

class noteController extends Controller
{
    protected $noteService;

    public function __construct(noteService $noteService)
    {
        $this->noteService = $noteService;
    }

    public function index()
    {
        $notes = $this->noteService->getAll();
        return view('note.list',compact('notes'));
    }
}
