<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MonthlyExpenses;
use App\Models\MonthlyIncome;
use App\Models\CoMaker;


class RegularSpecialLoan extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'loan_applications_id',
        'name',
        'acc_id',
        'age',
         'present_address',
         'permanent_address',
         'dob',
         'fb_acc',
         'emp',
        'phone_no',
        'occupation',
        'length_service',
        'emp_status',
        'civilStatus',
        'present_position',
        's_name',
        'tin',
        'sss',
        'email',
        'no_child',
        'loan_cat',
    ];

    public function loan(){
        return $this->belongsTo(LoanApplication::class);
}
    public function monthlyE(){
        return $this->hasOne(MonthlyExpenses::class);

    }
    public function monthlyI(){
        return $this->hasOne(MonthlyIncome::class,'regular_special_loan_id');
    }
    public function comaker(){
        return $this->hasOne(CoMaker::class);
    }
}
