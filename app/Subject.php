<?php

namespace App;

use App\Section;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=[
        'subjectname',
        'hours',
        'coefficient',
        
    ];
    public function sections(){
        return $this->belongsToMany(Section::class);
    }    
}
