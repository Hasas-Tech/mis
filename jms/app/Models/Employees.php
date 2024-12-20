<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'position'];

    // Relationship with Salary
    public function salary()
    {
        return $this->hasOne(Salaries::class);
    }
}
