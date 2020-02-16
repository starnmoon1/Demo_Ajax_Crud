<?php


namespace App\Service;


interface ServiceInterface
{
    function getAll();

    function store($request);

    function update($request, $id);

    function destroy($id);

    function findById($id);
}
