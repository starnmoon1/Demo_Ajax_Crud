<?php


namespace App\Http\repositories;


interface RepoInterface
{
    function getAll();
    function saveObj($obj);
    function delete($obj);
    function findById($id);
    function search($keyword);
}
