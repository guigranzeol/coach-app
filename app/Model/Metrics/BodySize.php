<?php

namespace App\Model\Metrics;

use Illuminate\Database\Eloquent\Model;

class BodySize extends Model
{
    protected $table = 'body_size';
    protected $primaryKey = 'id';
    protected $fillable = [
        'weight',
        'height', 
        'waist',
        'toracic',
        'abdomen',
        'hip',
        'arm_left',
        'arm_right',
        'thigh_left',
        'thigh_right',
        'people_id',
    ];
    public function People()
    {
        return $this->belongsTo(People::class);
    }

}
