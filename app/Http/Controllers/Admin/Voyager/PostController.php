<?php

namespace App\Http\Controllers\Admin\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
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
