<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class favoritos extends Model
{
    use HasFactory;

    protected $primaryKey = ['raider_id_raider_id_usuario', 'tiendas_tienda_id_usuario'];
    public $incrementing = false;
    public $timestamps = false;
}