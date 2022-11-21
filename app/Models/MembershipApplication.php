<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beneficiary;
use App\Models\Spouse;

class MembershipApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
         'suffix',
         'gender',
         'dob',
         'Bplace',
         'address',
        'unit',
        'Occu',
        'educ',
        'MI',
        'civilStatus',
        'religion',
        'contact_number',
        'TIN',
        'SSSnum',
        'email',
        'Dependents',
        'is_approved',
        'mothers_maiden_name',
        'membership_type',
        'selfie_pic',
        'empIDpic',
    ];

    public function ben(){
        return $this->hasMany(Beneficiary::class);
    }

    public function spouse(){
        return $this->hasOne(Spouse::class, 'membership_application_id', 'id');
    }

}
