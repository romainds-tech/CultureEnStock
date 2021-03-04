<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Evenement;
use App\Models\Place;

class Billet extends Model
{
    use HasFactory;

    protected $primaryKey = "idbillet";

    protected $table = "billet";

    public $timestamps = false;

    public function evenement() {
        return $this->belongsTo('App\Models\Evenement', 'idevenement');
    }

    public function place() {
        return $this->belongsTo('App\Models\Place', 'idplace');
    }
}
