<?php

namespace App\Model\Metrics;

use Illuminate\Database\Eloquent\Model;

class EvaluationModel extends Model
{
    protected $table = 'evaluation_models';
    protected $primaryKey = 'id';
    protected $fillable = [
       
        'name',
        // Campo destinado para definiar qual sera o modelo - Forca, aerobio 5,10 km.
    ];
    public function EvaluationModelExercise()
    {
        return $this->hasMany(EvaluationModelExercise::class);
    }
    public function Evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
}
