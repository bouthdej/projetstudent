<?php

namespace App;

use App\Subject;
use App\ClassEtudiant;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable=[
        'name',
        'description',

    ];
    public function class_etudiants(){
      return $this->hasMany(class_etudiant::class);
    }
    public function subject(){
      return $this->belongsTo(Subject::class);
    }

}
