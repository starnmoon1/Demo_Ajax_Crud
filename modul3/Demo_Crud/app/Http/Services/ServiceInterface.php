<?php


namespace App\Http\Services;


interface ServiceInterface
{
    function getAll();
    function create($request);
    function delete($obj);
    function findById($id);
    function edit($id, $request);
}
