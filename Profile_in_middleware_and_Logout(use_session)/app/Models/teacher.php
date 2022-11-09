<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
 
    public $timestamps = false;



    
    public function assignedcourse()
{
    return course::where ("teacher_id", $this->id)->get();
}
}
