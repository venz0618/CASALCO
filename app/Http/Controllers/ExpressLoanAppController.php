<?php

namespace App\Http\Controllers;

use App\Models\ExpressLoanApp;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\LoanApplication;
use Illuminate\Http\Request;

class ExpressLoanAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $loan = User::where(auth()->user()->id)->get();
        return view('client.express-loan-form');
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

        $l = new ExpressLoanApp();
        $l->loan_application_id = $loan->id;
        $l->acc_id = $r->acc_id;
        $l->name =$r->name;
        $l->present_address = $r->present_address;
        $l->permanent_address = $r->permanent_address;
        $l->loan_type = $r->loan_type;
        $l->emp  = $r->emp;
        $l->emp_address = $r->emp_address;
        $l->email = $r->email;
        $l->amount = $r->amount;
        $l->mode_payment = $r->mode_payment;
        $l->term_applied = $r->term_applied;
        $l->phone_no = $r->phone_no;
        $l->tin = $r->tin;
        $l->fb_acc = $r->fb_acc;
        $l->loanApp_type = $r->loanApp_type;
        $l->loan_cat = $r->loan_cat;
       
        $l->save();

        return back()->with('success', 'You have successfully registered as a member, kindly login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpressLoanApp  $expressLoanApp
     * @return \Illuminate\Http\Response
     */
    public function show(ExpressLoanApp $expressLoanApp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpressLoanApp  $expressLoanApp
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpressLoanApp $expressLoanApp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExpressLoanApp  $expressLoanApp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpressLoanApp $expressLoanApp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpressLoanApp  $expressLoanApp
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpressLoanApp $expressLoanApp)
    {
        //
    }
}
