<?php

namespace App\Model\Metrics;

use Illuminate\Database\Eloquent\Model;

class EvaluationModelExercise extends Model
{
    protected $table = 'evaluation_model_exercises';
    protected $primaryKey = 'id';
    protected $fillable = [
       
        'evaluation_model_id',
        'movements_name_id',
        'implements_id',
    ];
    public function implements()
    {
        return $this->hasMany(Implement::class);
    }
    public function MovementNames()
    {
        return $this->hasMany(MovementNames::class);
    }
    public function EvaluationModel()
    {
        return $this->belongsTo(EvaluationModel::class);
    }
}
