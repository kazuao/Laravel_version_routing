<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    function show()
    {
        return 'show v1';
    }
    function delete()
    {
        return 'delete v1';
    }
    function register()
    {
        return 'register v1';
    }
}
