<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bairro;
use App\Imports\BairrosImport;

use Maatwebsite\Excel\Facades\Excel;
ini_set('memory_limit', '512M');
class ExcelController extends Controller
{
    public function index() {
        $bairros = Bairro::paginate(25);
        return view('index', compact('bairros'));
    }

    public function create()
    {
       return view('create');
    }

    public function store(Request $request) 
    {
        Excel::import(new BairrosImport, $request->file('file'));
           
        return redirect()->route('import.index');
    }
}
