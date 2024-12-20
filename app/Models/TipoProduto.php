<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProduto extends Model
{
    use HasFactory;
    protected $table = "tipoproduto";
    protected $fillable = ['tip_nome'];

    public function produto(){
        return $this->hasMany(Produto::class, 'tip_id');
    }
}
