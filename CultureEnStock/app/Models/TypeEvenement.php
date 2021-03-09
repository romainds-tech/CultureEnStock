<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Evenement;

class TypeEvenement extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'types';

    public function evenements() {
        return $this->hasMany('App\Models\Evenement', 'idevenement');
    }
}
