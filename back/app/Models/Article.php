<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];


    // protected static function booted():void
    // {
    //     static:created(function(Article article){
    //         $article->fournisseur()->attach(request()->fournisseur);
    //     });
    // }
    public function categorie(){
        return $this->belongsTo(Categorei::class);
    }
    public function fournisseur(){
        return $this->belongsToMany(Fournisseur::class,'article_fournisseurs','article_id','fournisseur_id');
    }


}
