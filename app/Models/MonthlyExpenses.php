<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyExpenses extends Model
{
    use HasFactory;

    protected $fillable = [
        'regular_special_loan_id',
        'food_sub',
        'educ_bill',
        'electric_bill',
        'water_bill',
        'transportation',
        'allowance',
        'others',
    ];
    public function regular(){
        return $this->belongsTo(RegularSpecialLoan::class);
}
}