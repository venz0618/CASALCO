<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MembershipApplication;

class Beneficiary extends Model
{
    use HasFactory;

    protected $fillable = [
        'membership_application_id',
        'benName',
        'benRelation',
        'benAge',
        'benAddress'
    ];

    public function membership(){
        return $this->belongsTo(MembershipApplication::class);
    }
}
