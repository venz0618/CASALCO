<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoMaker extends Model
{
    use HasFactory;
    protected $fillable = [
        'regular_special_loan_id',
        'co_maker_history',
        'co_maker_name',
        'co_maker_form',
        
    ];
    public function regular(){
        return $this->belongsTo(RegularSpecialLoan::class);
}
}
