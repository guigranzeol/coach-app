<?php

namespace App\Model\Metrics;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $table = 'evaluation';
    protected $primaryKey = 'id';
    protected $fillable = [

        'coach_id',
        'people_id',
        'evaluation_model_id',

    ];
    public function Coach()
    {
        return $this->belongsTo(Coach::class);
    }
    public function People()
    {
        return $this->belongsTo(People::class);
    }
    public function EvaluationModel()
    {
        return $this->hasMany(EvaluationModel::class);
    }
}
