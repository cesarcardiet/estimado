<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    public $table ='employees';
    protected $fillable = [
        'credit_balance',
        'discounted_balance',
        'outstanding_balance',
        'user_id'
    ];

    public function user()
    {
        return $this->hasOne('App\User','id');
    }
    // protected $hidden = [
    //     'created_at', 'updated_at',
    // ];
}
