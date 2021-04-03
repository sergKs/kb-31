<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends \Laravel\Lumen\Routing\Controller
{
    public function list()
    {
        return [];
    }

    public function info($id)
    {
        return $id;
    }

    public function create(Request $request)
    {

    }

    public function update(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }
}
