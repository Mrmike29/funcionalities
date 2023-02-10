<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dogs;

class ApiController extends Controller
{
    public function dogs(Request $request)
    {
        $dogs = Dogs::select('dogs.name', 'breed_id', 'breeds.name AS breed', 'image')
        ->join('breeds', 'dogs.breed_id', '=', 'breeds.id');

        if ($request->has('breed_id')) {
            $dogs->where('breed_id', $request['breed_id']);
        }

        if ($request->has('breed')) {
            $dogs->where('breed', 'LIKE','%'. $request['breed'] .'%');
        }

        if ($request->has('name')) {
            $dogs->where('dogs.name', 'LIKE','%'. $request['name'] .'%');
        } 

        $dogs = $dogs->get();
        

        return response()->json($dogs);
    }
}
