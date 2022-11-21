<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyIncome extends Model
{
    use HasFactory;

    protected $fillable = [
        'regular_special_loan_id',
        'borrower_income',
        'other_income',
        's_income',
        'loan_type',
        'amount',
        'term_applied',
        'mode_payment',
      
    ];
    public function regular(){
        return $this->belongsTo(RegularSpecialLoan::class);
}

}
