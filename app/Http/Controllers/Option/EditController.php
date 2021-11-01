<?php

namespace App\Http\Controllers\Option;

use App\Models\Option;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function update(Request $request)
    {
        dd($request->all());
    }
}
