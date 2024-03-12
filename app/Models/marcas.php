<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class marcas extends Model
{
    use HasFactory;

    protected $table = 'marcas';
    protected $primaryKey = 'id_marcas';
    public $incrementing = false;
    public $timestamps = false;

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class);
    }

    public function tipo_marca(): BelongsTo
    {
        return $this->belongsTo(tipo_marca::class);
    }

    public function marcas_has_pedido(): HasMany
    {
        return $this->hasMany(marcas_has_pedido::class);
    }
}