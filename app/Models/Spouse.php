<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MembershipApplication;

class Spouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'membership_application_id',
        'spouseFname',
        'spouseAge',
        'spouseOcc',
        'spouseMI',
        'spouseEmplrName',
        'spouseConNum',
        'spouse_mother'
    ];
}
