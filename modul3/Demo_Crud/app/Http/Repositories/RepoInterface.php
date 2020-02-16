<?php


namespace App\Http\Repositories;


interface RepoInterface
{
    function getAll();
    function store($obj);
    function delete($obj);
    function findById($id);
    function edit($obj);
}
