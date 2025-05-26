<?php

namespace App\Http\Controllers;

use App\Imports\QuestionImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
class ExcelController extends Controller
{
    public function index(){
        return view('excel.index');
    }
    public function import(Request $request){
        $file = $request->file('file');

        if($file){
            Excel::import(new QuestionImport, $file);
        }
    }
}
