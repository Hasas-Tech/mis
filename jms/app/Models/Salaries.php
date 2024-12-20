<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['employee_id', 'salary'];

    // Relationship with Employee
    public function employee()
    {
        return $this->belongsTo(Employees::class);
    }
}
