<?php


namespace App\Http\service;


interface ServiceInterface
{
    public function getAll();

    public function create($request);

    public function update($request, $id);

    public function destroy($id);

    public function findById($id);

}
