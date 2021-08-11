<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Support\Facades\Request;

class ServerController extends Controller
{
    public function showList(){
        return Furniture::all();
    }

    public function save(Request $request){
        $furniture = Furniture::create($request->all());
        return response()->json($furniture, 201);
    }
}
