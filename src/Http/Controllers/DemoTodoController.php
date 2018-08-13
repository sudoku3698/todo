<?php

namespace Sudoku3698\Todo\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sudoku3698\Todo\Models\DemoTodoModel;

class DemoTodoController extends Controller
{
    public function showtodos()
    {
    	$todos=DemoTodoModel::orderBy('id','desc')->get();
    	return view('demo-todo::list')->with('todos',$todos);
    }
}
