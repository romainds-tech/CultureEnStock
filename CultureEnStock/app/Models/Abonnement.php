<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;

    protected $table = "abonnement";

    protected $primaryKey = "idabonnement";

    /**
     * A relier dans la BDD avec users.
     */
}
