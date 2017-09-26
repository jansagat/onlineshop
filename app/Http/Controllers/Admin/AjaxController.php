<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Aliexpress;

class AjaxController extends Controller
{
    function __construct()
    {
        $this->middleware(['admin', 'ajax']);
    }

    public function getAliProducts(Request $request)
    {
        $aliexpress = new Aliexpress();

        $response = $aliexpress->getAliApiProducts($request->key);

        return json_encode($response);
    }
}
