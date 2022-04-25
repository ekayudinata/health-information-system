<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function patient(){
        return $this->belongsTo(Patient::class,'patient_id'); 
    }
    
    public function poli(){
        return $this->belongsTo(Poli::class,'poli_id'); 
    }

    // public function poli(){
    //     return $this->belongsTo(Poli::class,'poli_id'); 
    // }
}
