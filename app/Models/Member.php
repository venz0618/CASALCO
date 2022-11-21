<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'membership_application_id',
        'users_id'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function mem(){
        return $this->belongsTo(MembershipApplication::class);
    }

}
