<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Billet;

class Evenement extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "evenements";

    protected $fillable = [
        "libelle",
        "tmp_instal",
        "tmp_desinstal",
        "tmp_netoy",
    ];

    public function type() {
        return $this->belongsTo('App\Models\TypeEvenement', 'idtype');
    }

    public function billets() {
        return $this->hasMany('App\Models\Billet', 'idbillet');
    }
}
