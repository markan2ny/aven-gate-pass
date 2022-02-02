<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['company_id', 'name', 'age'. 'address'];

    public function companies() {
        
        return $this->belongsTo(Company::class);

    }
}
