@extends('client.index')
@section('titlel', 'Loans')
@section('client_content')

<div id="top">
@foreach ($history as $l )
  @foreach ( $l->express as $s )
 <!-- AMORTIZATION COMPUTATION -->
 <?php
      $loan_type = $s->loan_type;
      $mode_payment = $s->mode_payment;
      $amount = (int)$s->amount;
      $term_applied = (int)$s->term_applied;

        if($loan_type == "PettyCash"){
            
              $servicefee = $amount*0.04+100;
              $deduction = $amount-$servicefee;
              $term_app = $term_applied;
              $monthly = $amount/$term_applied;
              $interest=$amount*0.0075;
              $totalinterest=$interest*$term_applied;
              $totalamount=$amount+$totalinterest;
              $monthlyINt = $monthly+$interest;
          if($mode_payment == "Quencena") {
            
                $servicefee = $amount*0.04+100;
                $deduction = $amount-$servicefee;
                $term_app = $term_applied*2;
                $monthly = $amount/$term_app;
                $interest=$amount*0.0075/2;
                $totalinterest=$interest*$term_app;
                $totalamount=$amount+$totalinterest;
                $monthlyINt = $monthly+$interest;

          }

        }
      
        if($loan_type == "FastCash"){

            $servicefee = $amount*0.03+80;
            $deduction = $amount-$servicefee;
            $term_app = $term_applied;
            $monthly = $amount/$term_applied;
            $interest=$amount*0.01;
            $totalinterest=$interest*$term_applied;
            $totalamount=$amount+$totalinterest;
            $monthlyINt = $monthly+$interest;

            if($mode_payment == "Quencena"){
            $servicefee = $amount*0.03+80;
            $deduction = $amount-$servicefee;
            $term_app = $term_applied*2;
            $monthly = $amount/$term_app;
            $interest=$amount*0.01/2;
            $totalinterest=$interest*$term_app;
            $totalamount=$amount+$totalinterest;
            $monthlyINt = $monthly+$interest;

            }


          }
        if($loan_type == "InstaCash"){

          $servicefee = $amount*0.025+20;
          $deduction = $amount-$servicefee;
          $term_app = $term_applied;
          $monthly = $amount/$term_applied;
          $subinterest=$amount/200;
          $interest=$subinterest*10;
          $totalinterest=$interest*$term_applied;
          $totalamount=$amount+$totalinterest;
          $monthlyINt = $monthly+$interest;

          if($mode_payment == "Quencena"){
            $servicefee = $amount*0.025+20;
            $deduction = $amount-$servicefee;
            $term_app = $term_applied*2;
            $monthly = $amount/$term_app;
            $subinterest=$amount/200;
            $interest=$subinterest*10/2;
            $totalinterest=$interest*$term_app;
            $totalamount=$amount+$totalinterest;
            $monthlyINt = $monthly+$interest;
          }
        }
        if($loan_type == "HealthInsurace"){

          $servicefee = $amount*0.02+30;
          $deduction = $amount-$servicefee;
          $term_app = $term_applied;
          $monthly = $amount/$term_applied;
          $interest=$amount*0.015;
          $totalinterest=$interest*$term_applied;
          $totalamount=$amount+$totalinterest;
          $monthlyINt = $monthly+$interest;

          if($mode_payment == "Quencena"){
            $servicefee = $amount*0.02+30;
            $deduction = $amount-$servicefee;
            $term_app = $term_applied*2;
            $monthly = $amount/$term_app;
            $interest=$amount*0.015/2;
            $totalinterest=$interest*$term_app;
            $totalamount=$amount+$totalinterest;
            $monthlyINt = $monthly+$interest;

          }
        }
        if($loan_type == "BirthdayLoan"){

          $servicefee = $amount*0.01+100;
          $deduction = $amount-$servicefee;
          $term_app = $term_applied;
          $monthly = $amount/$term_applied;
          $interest=0;
          $totalinterest=$interest*$term_applied;
          $totalamount=$amount+$totalinterest;
          $monthlyINt = $monthly+$interest;

          if($mode_payment == "Quencena"){
          $servicefee = $amount*0.01+100;
          $deduction = $amount-$servicefee;
          $term_app = $term_applied*2;
          $monthly = $amount/$term_app;
          $interest=0;
          $totalinterest=$interest*$term_app;
          $totalamount=$amount+$totalinterest;
          $monthlyINt = $monthly+$interest;
          }
        }
?>

<!-- END OF COMPUTATION -->
  
  
<table class="table table-bordered table-striped table-sm" id="#example2">		

<div class="row pt-5">
				<div class="col-lg-2">
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-4 col-sm-12">
              <fieldset>
            <label for="name"> ACCOUNT NAME:</label>
            <!-- <input type="text" disabled placeholder = "{{$s->name}}"> -->
            <h5>{{$s->name}}</h5>
              </fieldset>
            </div>
            <div class="col-lg-4 col-sm-12">
            <label for="name">ACCOUNT NUMBER:</label>
            <h5>{{$s->acc_id}}</h5>
            
            </div>
            <div class="col-lg-4 col-sm-12">
            <label for="name">LOAN CATEGORY:</label>
                       @if ($s->loan_cat == 0)
                    
                        
                            <h5>Express Loan</h5>
                          @else
                          <h5>Loan Agains Deposit-LAD</h5>
                          
                 
                      
                       @endif
            </div>
            <div class="col-lg-4 col-sm-12">
            <label for="name">LOAN TYPE:</label>
          
            <h5>{{$s->loan_type}}</h5>
            </div>
            <div class="col-lg-4 col-sm-12">
            <fieldset>
                <label for="name"> TERM APPLIED:</label>
                <h5>{{$s->term_applied}} {{$s->mode_payment}}</h5>
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
                <!-- <h5>{{$s->created_at}}</h5> -->
            </fieldset>
            </div>
            <div class="col-lg-4 col-sm-12">
            <fieldset>
                <label for="name">TOTAL AMOUNT DUE:</label>
                <h5>PHP <?php echo number_format($totalamount, 2, '.', ',')?></h5>
                <!-- <h5>{{$s->created_at}}</h5> -->
            </fieldset>
            </div>
        </div>
</div>
</div>

	<thead>
    <tr>
      
      <th>Principal</th>
      <th>Interest</th>
      <th>Mothly Repayment</th>

     
  </thead>
        <tbody>
           
          
            <tr>
          
                

            
                <td><span><?php echo number_format($monthly, 2, '.', ',')?></span></td>
                <td><span><?php echo number_format($interest, 2, '.', ',')?></span></td>
                <td><span><?php echo number_format($monthlyINt, 2, '.', ',')?></span></td>



               
  
              
              
          




            </tr>
            @endforeach
            @endforeach
        </tbody>
        <tbody>
          @foreach ($history as $l )
          @foreach ( $l->regularSpecial as $s )
              
          
          <tr>

              <td>{{$s->name}}</td>
              <td>{{$s->acc_id}}</td>
              <td>
                  @if ($s->loan_cat == 0)
                  <span class="badge badge-info">Regular Loan</span>
                @else
                  <span class="badge badge-info">Special Loan</span>
                
                @endif
              </td>
              <td>{{$s->monthlyI->loan_type}}</td>
              <td>{{$s->monthlyI->amount}}</td>
            
              <td></td>
              <td> @if($l->is_approved == 0)
                  <span class="badge badge-secondary">Pending</span>
                  @elseif (($l->is_approved == 1))
                  <span class="badge badge-primary">Pre-Approved</span>
                  @else
                  <span class="badge badge-success">Approved</span>
                @endif
              </td>





          </tr>
          @endforeach
          @endforeach
      </tbody>
</table>
<div class="row ">
  <div class="col px-md-5">
          @foreach ($history as $l )
          @foreach ( $l->regularSpecial as $s )
    <div>
    <form action="{{ route('loan-history.destroy')}}" method="POST">
                @csrf

            @method('DELETE')
        
        <button type="submit" class="btn btn-danger">CANCEL</button>
      </form>
    </div>
  </div>
  <div class="col px-md-5">
    <div class = "mx-auto">
      <form action="{{ route('loan-history.update', $l->id) }}" method="POST">
              @csrf
            @method('PUT')
        <input type="hidden" name="is_approved" value = "1">
        <button type="submit" class="btn btn-success">APPLY</button>
      </form>
    </div>
          @endforeach
          @endforeach
  </div>
</div>

			
</div>

@endsection