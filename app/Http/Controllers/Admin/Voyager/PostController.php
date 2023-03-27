<?php

namespace App\Http\Controllers\Admin\Voyager;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController as BaseController;

class PostController extends BaseController
{
    /**
     * Я мог бы поменять тут что-нибудь, но зачем?
     *
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function edit(Request $request, $id)
    {
        dump('Hello world');
        return parent::edit($request, $id);
    }
}
