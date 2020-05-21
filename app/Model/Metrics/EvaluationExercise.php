<?php

namespace App\Model\Metrics;

use Illuminate\Database\Eloquent\Model;

class EvaluationExercise extends Model
{
    protected $table = 'evaluation_exercises';
    protected $primaryKey = 'id';
    protected $fillable = [
        
        'evaluation_id',
        'movement_name_id',
        'implement_id',
        'implement_weight',
        'sets',
        'movements_repetition',
        'time',
    ];
    public function MOvementNames()
    {
        return $this->belongsTo(MovementNames::class);
    }
}
