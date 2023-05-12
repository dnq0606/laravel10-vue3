<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
      dd(Listing::where('beds', '>', 4)->orWhere('city', 'Lake Harleytown')->orderBy('beds')->select('city', 'code', 'street as Thành phố')->get());
        return inertia(
            'Index/Index',
            [
                'message' => 'Hello from Laravel'
            ]
        );
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
