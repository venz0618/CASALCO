<?php

namespace App\Http\Controllers;

use App\Models\RegularSpecialLoan;
use App\Http\Controllers\Controller;
use App\Models\CoMaker;
use App\Models\LoanApplication;
use App\Models\MonthlyExpenses;
use App\Models\MonthlyIncome;
use Illuminate\Http\Request;

class RegularSpecialLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.regular-special-loan-form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $loan = new LoanApplication();
        $loan->users_id = $r->user_id;
        $loan->save();

        $l = new RegularSpecialLoan();
        $l->loan_application_id = $loan->id;
        $l->name = $r->name;
        $l->acc_id = $r->acc_id;
        $l->age = $r->age;
        $l->present_address = $r->present_address;
        $l->permanent_address = $r->permanent_address;
        $l->dob = $r->dob;
        $l->fb_acc = $r->fb_acc;
        $l->emp = $r->emp;
        $l->phone_no = $r->phone_no;
        $l->occupation = $r->occupation;
        $l->length_service = $r->length_service;
        $l->emp_status = $r->emp_status;
        $l->civilStatus = $r->civilStatus;
        $l->present_position = $r->present_position;
        $l->s_name = $r->s_name;
        $l->tin = $r->tin;
        $l->sss = $r->sss;
        $l->email = $r->email;
        $l->no_child = $r->no_child;
        $l->loan_cat = $r->loan_cat;
        $l->loanApp_type = $r->loanApp_type;
        $l->save();


        $i = new MonthlyIncome();
        $i->regular_special_loan_id = $l->id;
        $i->borrower_income = $r->borrower_income;
        $i->other_income = $r->other_income;
        $i->s_income  = $r->s_income;
        $i->loan_type = $r->loan_type;
        $i->amount = $r->amount;
        $i->term_applied = $r->term_applied;
        $i->mode_payment = $r->mode_payment;
        $i->save();


        $e = new MonthlyExpenses();
        $e->regular_special_loan_id = $l->id;
        $e->food_sub = $r->food_sub;
        $e->educ_bill = $r->educ_bill;
        $e->electric_bill =$r->electric_bill;
        $e->water_bill = $r->water_bill;
        $e->transportation = $r->transportation;
        $e->allowance = $r->allowance;
        $e->others = $r->others;
        $e->save();

        $c = new CoMaker();
        $c->regular_special_loan_id = $l->id;
        $c->co_maker_history = $r->co_maker_history;
        $c->co_maker_name = $r->co_maker_name;
        $c->co_maker_form = $r->co_maker_form;
        $c->save();


        return back();





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegularSpecialLoan  $regularSpecialLoan
     * @return \Illuminate\Http\Response
     */
    public function show(RegularSpecialLoan $regularSpecialLoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegularSpecialLoan  $regularSpecialLoan
     * @return \Illuminate\Http\Response
     */
    public function edit(RegularSpecialLoan $regularSpecialLoan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegularSpecialLoan  $regularSpecialLoan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegularSpecialLoan $regularSpecialLoan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegularSpecialLoan  $regularSpecialLoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegularSpecialLoan $regularSpecialLoan)
    {
        //
    }
}
