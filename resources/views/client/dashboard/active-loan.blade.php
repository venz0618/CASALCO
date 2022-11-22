@extends('client.dashboard.index')
@section('title', 'Active Loan')
@section('client_dashboard_content')



<div class="col-md-12">
  <div class="white_shd full margin_bottom_30">
      <div class="table_section padding_infor_info">
          
<table class="table table-bordered table-striped table-sm" id="example2">
	<thead>
    <tr>
      <th>First Name</th>
      <th>Account No</th>
      {{-- <th>Loan Category</th> --}}
      {{-- <th>Image</th> --}}
      <th>Loan Type</th>
      <th>Date Applied</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    
   @foreach ($loan as $l)
   <tr>
       <td>{{$l->name_of_member}}</td>
       <td>{{$l->account_no}}</td>
       <td>{{$l->loan_type}}</td>
       <td>{{$l->created_at}}</td>
     
       <td> @if($l->is_approved == 0)
        <span class="badge badge-secondary">Pending</span>
        @elseif ($l->is_approved == 1)
        <span class="badge badge-success">Pre-Approved</span>
        @else
        <span class="badge badge-success">Approved</span>
      @endif</td>
       <td>
            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal{{ $l->id }}">Details</button>
        </td> 
    </tr>
   @endforeach
   @foreach ($LAD as $lad)
   <tr>
       <td>{{$lad->name_of_member}}</td>
       <td>{{$lad->account_no}}</td>
       <td>{{$lad->loan_type}}</td>
       <td>{{$lad->created_at}}</td>
     
       <td> @if($lad->is_approved == 0)
        <span class="badge badge-secondary">Pending</span>
        @elseif ($lad->is_approved == 1)
        <span class="badge badge-success">Pre-Approved</span>
        @else
        <span class="badge badge-success">Approved</span>
      @endif</td>
       <td>
            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal01{{ $lad->id }}">Details</button>
        </td> 
    </tr>
   @endforeach
    
  </tbody>
</table>

</div>
</div>
</div>


@foreach ($loan as $l)
<!-- AMORTIZATION COMPUTATION -->


<div class="modal fade" id="myModal{{ $l->id }}">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
       <div class="modal-content">
          <!-- Modal Header -->

                            <?php
                    $loan_type = $l->loan_type;
                    $mode_of_payment = $l->mode_of_payment;
                    $amount = (int)$l->amount_applied;
                    $term_applied = (int)$l->term_applied;
                    $status = $l->is_approved;
                    $x=1;
                    if($loan_type == "pcl"){
                        
                        $servicefee = $amount*0.04+100;
                        $deduction = $amount-$servicefee;
                        $term_app = $term_applied;
                        $monthly = $amount/$term_applied;
                        $interest=$amount*0.0075;
                        $totalinterest=$interest*$term_applied;
                        $totalamount=$amount+$totalinterest;
                        $monthlyINt = $monthly+$interest;
                        $repayment = $totalamount-$monthlyINt;
                    if($mode_of_payment == "semi-monthly") {
                        
                            $servicefee = $amount*0.04+100;
                            $deduction = $amount-$servicefee;
                            $term_app = $term_applied*2;
                            $monthly = $amount/$term_app;
                            $interest=$amount*0.0075/2;
                            $totalinterest=$interest*$term_app;
                            $totalamount=$amount+$totalinterest;
                            $monthlyINt = $monthly+$interest;
                            $repayment = $totalamount-$monthlyINt;

                    }

                    }

                    if($loan_type == "fcl"){

                        $servicefee = $amount*0.03+80;
                        $deduction = $amount-$servicefee;
                        $term_app = $term_applied;
                        $monthly = $amount/$term_applied;
                        $interest=$amount*0.01;
                        $totalinterest=$interest*$term_applied;
                        $totalamount=$amount+$totalinterest;
                        $monthlyINt = $monthly+$interest;
                        $repayment = $totalamount-$monthlyINt;

                        if($mode_of_payment == "semi-monthly"){
                        $servicefee = $amount*0.03+80;
                        $deduction = $amount-$servicefee;
                        $term_app = $term_applied*2;
                        $monthly = $amount/$term_app;
                        $interest=$amount*0.01/2;
                        $totalinterest=$interest*$term_app;
                        $totalamount=$amount+$totalinterest;
                        $monthlyINt = $monthly+$interest;
                        $repayment = $totalamount-$monthlyINt;

                        }


                    }
                    if($loan_type == "icl"){

                    $servicefee = $amount*0.025+20;
                    $deduction = $amount-$servicefee;
                    $term_app = $term_applied;
                    $monthly = $amount/$term_applied;
                    $subinterest=$amount/200;
                    $interest=$subinterest*10;
                    $totalinterest=$interest*$term_applied;
                    $totalamount=$amount+$totalinterest;
                    $monthlyINt = $monthly+$interest;
                    $repayment = $totalamount-$monthlyINt;

                    if($mode_of_payment == "semi-monthly"){
                        $servicefee = $amount*0.025+20;
                        $deduction = $amount-$servicefee;
                        $term_app = $term_applied*2;
                        $monthly = $amount/$term_app;
                        $subinterest=$amount/200;
                        $interest=$subinterest*10/2;
                        $totalinterest=$interest*$term_app;
                        $totalamount=$amount+$totalinterest;
                        $monthlyINt = $monthly+$interest;
                        $repayment = $totalamount-$monthlyINt;
                    }
                    }
                    if($loan_type == "hcl"){

                    $servicefee = $amount*0.02+30;
                    $deduction = $amount-$servicefee;
                    $term_app = $term_applied;
                    $monthly = $amount/$term_applied;
                    $interest=$amount*0.015;
                    $totalinterest=$interest*$term_applied;
                    $totalamount=$amount+$totalinterest;
                    $monthlyINt = $monthly+$interest;
                    $repayment = $totalamount-$monthlyINt;

                    if($mode_of_payment == "semi-monthly"){
                        $servicefee = $amount*0.02+30;
                        $deduction = $amount-$servicefee;
                        $term_app = $term_applied*2;
                        $monthly = $amount/$term_app;
                        $interest=$amount*0.015/2;
                        $totalinterest=$interest*$term_app;
                        $totalamount=$amount+$totalinterest;
                        $monthlyINt = $monthly+$interest;
                        $repayment = $totalamount-$monthlyINt;

                    }
                    }
                    if($loan_type == "bdl"){

                    $servicefee = $amount*0.01+100;
                    $deduction = $amount-$servicefee;
                    $term_app = $term_applied;
                    $monthly = $amount/$term_applied;
                    $interest=0;
                    $totalinterest=$interest*$term_applied;
                    $totalamount=$amount+$totalinterest;
                    $monthlyINt = $monthly+$interest;
                    $repayment = $totalamount-$monthlyINt;

                    if($mode_of_payment == "semi-monthly"){
                    $servicefee = $amount*0.01+100;
                    $deduction = $amount-$servicefee;
                    $term_app = $term_applied*2;
                    $monthly = $amount/$term_app;
                    $interest=0;
                    $totalinterest=$interest*$term_app;
                    $totalamount=$amount+$totalinterest;
                    $monthlyINt = $monthly+$interest;
                    $repayment = $totalamount-$monthlyINt;
                    }
                    }
                    if($loan_type == "cl"){

                    $servicefee = $amount*0.01+100;
                    $deduction = $amount-$servicefee;
                    $term_app = $term_applied;
                    $monthly = $amount/$term_applied;
                    $interest=0;
                    $totalinterest=$interest*$term_applied;
                    $totalamount=$amount+$totalinterest;
                    $monthlyINt = $monthly+$interest;
                    $repayment = $totalamount-$monthlyINt;

                    if($mode_of_payment == "semi-monthly"){
                    $servicefee = $amount*0.01+100;
                    $deduction = $amount-$servicefee;
                    $term_app = $term_applied*2;
                    $monthly = $amount/$term_app;
                    $interest=0;
                    $totalinterest=$interest*$term_app;
                    $totalamount=$amount+$totalinterest;
                    $monthlyINt = $monthly+$interest;
                    $repayment = $totalamount-$monthlyINt;
                    }
                    }
                    ?>

<!-- END OF COMPUTATION -->

  
          <div class=" text-center border">
  
             <h4 class="modal-title">CASALCO EXPRESS LOAN AMORTIZATION</h4>
          </div>
          
          <div class="row pt-5">
            <div class="col-lg-2">
    </div>
    <div class="col-lg-8">
      <div class="row">
        <div class="col-lg-4 col-sm-12">
          <fieldset>
        <label for="name"> ACCOUNT NAME:</label>
        <h5>{{$l->name_of_member}}</h5>
          </fieldset>
        </div>
        <div class="col-lg-4 col-sm-12">
        <label for="name">ACCOUNT NUMBER:</label>
        <h5>{{$l->account_no}}</h5>
        
        </div>
        
        <div class="col-lg-4 col-sm-12">
        <label for="name">LOAN TYPE:</label>
        <h5>{{$l->loan_type}}</h5>
       
        </div>
        <div class="col-lg-4 col-sm-12">
        <fieldset>
            <label for="name"> TERM APPLIED:</label>
            <h5> {{$term_app}} {{$l->mode_of_payment}}</h5>
        </fieldset>
        </div>
        <div class="col-lg-4 col-sm-12">
        <fieldset>
            <label for="name"> PRINCIPAL:</label>
            <h5>PHP <?php echo number_format($amount, 2, '.', ',')?></h5>
        </fieldset>
        </div>
        <div class="col-lg-4 col-sm-12">
        <fieldset>
            <label for="name"> AMOUNT TO RECIEVE:</label>
            <h5>PHP <?php echo number_format($deduction, 2, '.', ',')?></h5>
        </fieldset>
        </div>
        <div class="col-lg-4 col-sm-12">
        <fieldset>
            <label for="name">INTEREST:</label>
            <h5><?php echo number_format($totalinterest, 2, '.', ',')?></h5>
        </fieldset>
        </div>
        <div class="col-lg-4 col-sm-12">
        <fieldset>
            <label for="name">TOTAL AMOUNT DUE:</label>
            <h5>PHP <?php echo number_format($totalamount, 2, '.', ',')?></h5>

        </fieldset>
        </div>
    </div>
</div>
</div>

<div class="col-md-12">
          <table class="table table-bordered table-striped table-sm" id="#example2">
            
                <thead>
                <tr>
                  
                    <th>No.</th>
                    <th>Principal</th>
                    <th>Interest</th>
                    <th>Repayment</th>
                    <th>Balance</th>
                </tr>
              </thead>
                    <tbody>
                       
                      
                            @if ($status == 0)
                            <tr>
                            
                              <td> 
                                  {{$x++}}
                                          </td>
  
                              
                                  <td><span><?php echo number_format($monthly, 2, '.', ',')?></span></td>
                                  <td><span><?php echo number_format($interest, 2, '.', ',')?></span></td>
                                  <td><span><?php echo number_format($monthlyINt, 2, '.', ',')?></span></td>
                                  
                              
                              </tr>
                            @else
                            @for ($i = $repayment;$i >=0; $i-=$monthlyINt)
                            <tr>
                            
                            <td> 
                                {{$x++}}
                                        </td>

                            
                                <td><span><?php echo number_format($monthly, 2, '.', ',')?></span></td>
                                <td><span><?php echo number_format($interest, 2, '.', ',')?></span></td>
                                <td><span><?php echo number_format($monthlyINt, 2, '.', ',')?></span></td>
                                <td><span>{{number_format($i, 2, '.', ',')}}</span></td>
                            
                            </tr>
                        
                        
                           
                            @endfor
                            @endif
                     
                  </tbody>
            </table>
          </div>
        

            <div class="modal-footer">
                
              
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              
              </div>
       </div>
    </div>
  </div>
  @endforeach







                                                  <!-- LAD LOAN MODAL -->






 
<!-- LAD AMORTIZATION COMPUTATION -->
@foreach ($LAD as $lad)
<div class="modal fade" id="myModal01{{ $lad->id }}">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
       <div class="modal-content">
          <!-- Modal Header -->

              <?php
                    $loan_type = $lad->loan_type;
                    $mode_of_payment = $lad->mode_of_payment;
                    $amount = (int)$lad->amount_applied;
                    $term_applied = (int)$lad->term_applied;
                    $status = $lad->is_approved;
                    $x=1;
                    if($loan_type == "LAD"){
                        
                        $servicefee = $amount*0.02+30;
                        $deduction = $amount-$servicefee;
                        $term_app = $term_applied;
                        $monthly = $amount/$term_applied;
                        $interest=$amount*0.01;
                        $totalinterest=$interest*$term_applied;
                        $totalamount=$amount+$totalinterest;
                        $monthlyINt = $monthly+$interest;
                        $repayment = $totalamount-$monthlyINt;
                    if($mode_of_payment == "semi-monthly") {
                        
                            $servicefee = $amount*0.02+30;
                            $deduction = $amount-$servicefee;
                            $term_app = $term_applied*2;
                            $monthly = $amount/$term_app;
                            $interest=$amount*0.01/2;
                            $totalinterest=$interest*$term_app;
                            $totalamount=$amount+$totalinterest;
                            $monthlyINt = $monthly+$interest;
                            $repayment = $totalamount-$monthlyINt;

                    }}
                    ?>

<!-- END OF COMPUTATION -->

  

                                                      
                                                      <div class=" text-center border">
                                              
                                                        <h4 class="modal-title">CASALCO LAD AMORTIZATION</h4>
                                                      </div>
                                                      
                                                      <div class="row pt-5">
                                                        <div class="col-lg-2">
                                                </div>
                                                <div class="col-lg-8">
                                                  <div class="row">
                                                    <div class="col-lg-4 col-sm-12">
                                                      <fieldset>
                                                    <label for="name"> ACCOUNT NAME:</label>
                                                    <h5>{{$lad->name_of_member}}</h5>
                                                      </fieldset>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12">
                                                    <label for="name">ACCOUNT NUMBER:</label>
                                                    <h5>{{$lad->account_no}}</h5>
                                                    
                                                    </div>
                                                    
                                                    <div class="col-lg-4 col-sm-12">
                                                    <label for="name">LOAN TYPE:</label>
                                                    <h5>{{$lad->loan_type}}</h5>
                                                  
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12">
                                                    <fieldset>
                                                        <label for="name"> TERM APPLIED:</label>
                                                        <h5> {{$term_app}} {{$lad->mode_of_payment}}</h5>
                                                    </fieldset>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12">
                                                    <fieldset>
                                                        <label for="name"> PRINCIPAL:</label>
                                                        <h5>PHP <?php echo number_format($amount, 2, '.', ',')?></h5>
                                                    </fieldset>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12">
                                                    <fieldset>
                                                        <label for="name"> AMOUNT TO RECIEVE:</label>
                                                        <h5>PHP <?php echo number_format($deduction, 2, '.', ',')?></h5>
                                                    </fieldset>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12">
                                                    <fieldset>
                                                        <label for="name">INTEREST:</label>
                                                        <h5><?php echo number_format($totalinterest, 2, '.', ',')?></h5>
                                                    </fieldset>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12">
                                                    <fieldset>
                                                        <label for="name">TOTAL AMOUNT DUE:</label>
                                                        <h5>PHP <?php echo number_format($totalamount, 2, '.', ',')?></h5>

                                                    </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
@endforeach
<div class="col-md-12">
  
          <table class="table table-bordered table-striped table-sm" id="#example2">
            
                <thead>
                <tr>
                  
                    <th>No.</th>
                    <th>Principal</th>
                    <th>Interest</th>
                    <th>Repayment</th>
                    <th>Balance</th>
                </tr>
              </thead>
                    <tbody>
                       
                      
                            @if ($status == 0)
                            <tr>
                            
                              <td> 
                                  {{$x++}}
                                          </td>
  
                              
                                  <td><span><?php echo number_format($monthly, 2, '.', ',')?></span></td>
                                  <td><span><?php echo number_format($interest, 2, '.', ',')?></span></td>
                                  <td><span><?php echo number_format($monthlyINt, 2, '.', ',')?></span></td>
                                  
                              
                              </tr>
                            @else
                            @for ($i = $repayment;$i >=0; $i-=$monthlyINt)
                            <tr>
                            
                            <td> 
                                {{$x++}}
                                        </td>

                            
                                <td><span><?php echo number_format($monthly, 2, '.', ',')?></span></td>
                                <td><span><?php echo number_format($interest, 2, '.', ',')?></span></td>
                                <td><span><?php echo number_format($monthlyINt, 2, '.', ',')?></span></td>
                                <td><span>{{number_format($i, 2, '.', ',')}}</span></td>
                            
                            </tr>
                        
                        
                           
                            @endfor
                            @endif
                     

                  </tbody>
            </table>
          </div>
        

            <div class="modal-footer">
                
              
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              
              </div>
       </div>
    </div>
  </div>
 

          <!-- END LAD LOAN MODAL -->

@endsection