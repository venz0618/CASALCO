<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    public function express(){
        return $this->hasMany(ExpressLoanApp::class,'loan_application_id');
    }
    public function LAD(){
        return $this->hasMany(LadLoans::class,'loan_application_id');
    }

    public function regularSpecial(){
        return $this->hasMany(RegularSpecialLoan::class,'loan_application_id');
    }
}

