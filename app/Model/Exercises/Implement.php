<?php

namespace App\Model\Exercises;

use Illuminate\Database\Eloquent\Model;

class Implement extends Model
{
    protected $table = 'implements';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
    ];
    
    public function EvaluationModelExercise()
    {
        return $this->belongsTo(EvaluationModelExercise::class);
    }
    
}
