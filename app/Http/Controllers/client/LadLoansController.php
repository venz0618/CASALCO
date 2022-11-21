<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\LadLoans;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
class LadLoansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $express = Member::join('users', 'users.id', '=', 'members.users_id')
                        ->join('membership_applications', 'membership_applications.id', '=', 'members.membership_application_id')
                        ->select('users.*', 'membership_applications.*')
                        ->where('users_id', '=', auth()->user()->id)
                        ->first();

        $edad = $express['dob'];
        $years = Carbon::parse($edad)->age;

        return view('client.loan.LAD.lad-loans-index', compact(['express', 'years']));
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
        $request->validate([
            'name_of_member'        => 'required|string',
            'account_no'            => 'required',
            'present_address'       => 'required',
            'permanent_address'     => 'required',
            'loan_type'             => 'required',
            'employer'              => 'required',
            'employer_address'      => 'required',
            'date_of_birth'         => 'required',
            'age'                   => 'required|numeric',
            'cellphone_no'          => 'required',
            'tin_no'                => 'required',
            'email_address'         => 'required',
            'facebook_account'      => 'required',
            'amount_applied'        => 'required|numeric',
            'term_applied'          => 'required|numeric',
            'mode_of_payment'       => 'required',
            'scanned_signature'     => 'required',
        ]);

        $loanApp = $request->all();

        $pikshurSaPerma = time().$request->file('scanned_signature')->getClientOriginalName();
        $path = $request->file('scanned_signature')->storeAs('image', $pikshurSaPerma, 'public');
        $loanApp["scanned_signature"] = '/storage/'.$path;
       

        LadLoans::create($loanApp);

        Alert::success('Application Successfully','Sent');

        return redirect('/client/active-loan')->with('success', 'Application Successfully Sent!');


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
        //
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
        //
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
