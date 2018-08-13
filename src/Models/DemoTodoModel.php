<?php

namespace Sudoku3698\Todo\Models;

use Illuminate\Database\Eloquent\Model;

class DemoTodoModel extends Model
{
    protected $table="todos";

    protected $fillable=['todo','is_done'];
}
