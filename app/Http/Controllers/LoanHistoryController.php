<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LoanApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LoanHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $history = DB::table('loan_applications')->where('users_id', auth()->id())->get();
        $history = LoanApplication::where('users_id', auth()->id())->get();

       return view('client.loan-history', compact('history'));
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
        $loan = LoanApplication::find($id);
        $loan->is_approved = $request->is_approved;
        // $loan->acc_id = $request->acc_id;
        // $loan->or_no = $request->or_no;
        $loan->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loan = LoanApplication::find($id);

        $loan->delete();

        return back();
    }
}
