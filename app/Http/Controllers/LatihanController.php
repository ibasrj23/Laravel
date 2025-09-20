<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function latihan2(Request $request, $id)
	{
		$type = $request->type;
		// return 'latihan controller dengan id ' . $id . ' dan type ' . $type;
		
		return view('latihan2', [
			'id' => $id,
			'type' => $type,
		]);
	}
}
