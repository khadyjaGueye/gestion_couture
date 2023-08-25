<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleFournisseur extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];

    public function article(){
        return $this->belongsTo(Article::class);
    }
    public function fournisseur(){
        return $this->belongsTo(Fournisseur::class);
    }
}
