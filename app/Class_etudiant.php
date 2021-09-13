<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_etudiant extends Model
{
    protected $fillable = [
        'className',
        'classlevel',
        'section_id',
        
    ];

    public function sections(){
        return $this->belongsTo(Section::class,'section_id');
    }
}
