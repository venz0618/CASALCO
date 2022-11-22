<?php

namespace App\Http\Controllers\admin;
use App\Models\ExpressLoanApp;
use App\Http\Controllers\Controller;
use App\Models\LoanApplication;
use Illuminate\Http\Request;
use App\Models\LadLoans;
class ApproveLoanApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loan = LoanApplication::where('is_approved', 1)->get();
        $LAD = LadLoans::where('is_approved', 1)->get();
        
        return view('admin.loan_app', compact('loan','LAD'));
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
    public function store(Request $request)
    {
        //
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
        return back();
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
        
        if($loan)
        {$loan->is_approved = $request->is_approved;
        $loan->save();
        return redirect('admin/approved-loans');
    }
        else{
            $LAD = LadLoans::find($id);
            $LAD->is_approved = $request->is_approved;
            $LAD->save();
    
            return redirect('admin/approved-loans');
        }

        
       
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
