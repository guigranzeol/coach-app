<?php

namespace App\Model\UserSession;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table = 'coaches';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nickname',
        'people_id',
        'company_id',
    ];

    public function Coach(){
        return $this->hasMany(People::class);
    }
    public function Company(){
        return $this->belongsTo(Company::class);
    }
    public function Evaluation()
    {
        return $this->hasMany(Evaluation::class);
    }

}