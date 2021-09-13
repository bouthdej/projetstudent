<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $fillable=[
        'num_class',
        'num_seance',
        'day_of_week',
        'period',
        'class_id',
         'user_id'
    ];
    public function class_etudiants(){
        return $this->belongsTo(class_etudiant::class,'class_id');
        
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id');
        
    }
}
