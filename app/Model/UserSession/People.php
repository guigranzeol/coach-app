<?php

namespace App\Model\UserSession;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'people';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fantasy_name',
        'social_name',
        'birthday',
        'cpf_cnpj',
        'note',
        'phone_number',
        'adress',
        'state',
        'zip_code',
        'city',
        'country',
        '1th_weight',
        '1th_height',
        '1th_waist',         
    ];
    public function User() {
        return $this->hasOne(App::class);
    }
    public function Coach()
    {
        return $this->belongsTo(Coach::class);
    }
    public function BodySize()
    {
        return $this->hasMany(BodySize::class);
    }
    public function Evaluation()
    {
        return $this->hasMany(Evaluation::class);
    }
    
}

