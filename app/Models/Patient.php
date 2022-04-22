<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = ['id']; 
    
    use HasFactory;

    public static function boot(){
        parent::boot(); 

        static::creating( function($model){
            $newnumberrm = 0; 
            $lastpatient= Patient::get()->last();
            if (is_null($lastpatient)){
                $newnumberrm = 1; 
            }else{
                $newnumberrm= $lastpatient->id + 1; 
            }
            
            $model->medic_record= 'RM'.'-'. str_pad($newnumberrm, 5,'0',STR_PAD_LEFT); 
        }); 
    }

}
