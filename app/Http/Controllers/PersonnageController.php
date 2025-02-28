<?php

namespace App\Http\Controllers;

use App\Models\Personnage;
use Illuminate\Http\Request;

class PersonnageController extends Controller
{

    public static function index()
    {
        $personnages = Personnage::latest()->paginate(3);
        // $jobs = Job::with('employer')->simplePaginate(3);
        //$jobs = Job::with('employer')->cursorPaginate(3);
        return view('personnages.index', compact('personnages'));
    }

    public static function create()
    {
        return view('personnages.create');
    }

    public static function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|string|min:3'
        ]);

        Personnage::create([
            'nom' => request('nom')
        ]);

        return redirect()->route('personnages.index');
    }
}
