<?php

namespace App\Http\Controllers\Admin\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    /**
     * Я мог бы поменять
     *
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function show(Request $request, $id)
    {
        return parent::show($request, $id);
    }
}
