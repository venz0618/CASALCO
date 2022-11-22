<?php

namespace App\Http\Controllers\officer;
use App\Models\ExpressLoanApp;
use App\Http\Controllers\Controller;
use App\Models\LoanApplication;
use App\Models\LadLoans;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PreLoanApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loan = LoanApplication::where('is_approved', 0)->get();
        $LAD = LadLoans::where('is_approved', 0)->get();
        
        return view('officer.loan', compact('loan', 'LAD'));
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
     
        $l->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loan = LoanApplication::find($id);
        $LAD = LadLoans::find($id);
        return view('officer.loan', compact('loan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $loan = LoanApplication::find($id);
        $loan->is_approved = $request->is_approved;
        // $loan->acc_id = $request->acc_id;
        // $loan->or_no = $request->or_no;
        Alert::success('Successfull','Pre-Approved');
        $loan->save();

      

        return redirect('officer/pre-approved-loans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
