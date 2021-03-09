<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Billet;

class Place extends Model
{
    use HasFactory;

    protected $table = 'places';

    public $timestamps = false;

    public function billets() {
        return $this->hasMany('App\Models\Billet');
    }
}
