<?php

namespace App\Model\UserSession;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
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
    ];

    public function Company() {
        return $this->hasMany(Coach);
    }
}
