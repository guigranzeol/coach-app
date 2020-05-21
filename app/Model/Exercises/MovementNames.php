<?php

namespace App\Model\Exercises;

use Illuminate\Database\Eloquent\Model;

class MovementNames extends Model
{
    protected $table = 'movement_names';
    protected $primaryKey = 'id';
    protected $fillable = [
       
        'name',
        'description',
        'metrics',
    ];
    public function EvaluationModelExercise()
    {
        return $this->belongsTo(EvaluationModelExercise::class);
    }
    public function EvaluationExercise()
    {
        return $this->hasOne(EvaluationExercise::class);
    }
}
