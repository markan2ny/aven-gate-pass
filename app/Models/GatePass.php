<?php

namespace App\Models;

use App\Models\Site;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GatePass extends Model
{
    use HasFactory;


    protected $fillable = [
        'track_no',
        'type_of_request',
        'date',
        'name',
        'destination',
        'department',
        'receiver',
        'vehicle',
        'purpose'
    ];


    public function companies() {
        return $this->hasMany(Site::class, 'site_id', 'id');
    }

}
