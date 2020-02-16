<?php


namespace App\Service\Impl;


interface RepositoryImpl
{
    function getAll();

    function store($data);

    function update($data, $obj);

    function destroy($obj);

    function findById($id);
}
