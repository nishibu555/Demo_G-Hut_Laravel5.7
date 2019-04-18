@extends('admin.admin_layout')


@section('admin_content')

<div class="row-fluid sortable">

	<p style="color: red"><b>Note:</b> Date and other data of this sell report is generating automatically when an order is confirmed. For testing purpose dami data is inserted to 'tbl_sells' table. [ Only Fisrt row data are comming from original shopping process ] </p>

				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><span class="break"></span>Monthly Sell Report</h2>
						<div class="box-icon">
							
						</div>
					</div>
					
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
							
						  <thead >
							  <tr>
								   <th>Month</th>
								   <th>Total Sell</th>
			                       
							  </tr>
						  </thead>   
						  <tbody>
                             
                             @foreach($sell_monthly as $sell_monthly)
							<tr>
						      <td>{{$sell_monthly->order_date_month}}</td>
						      <td>{{$sell_monthly->order_total}}</td>
						    </tr>
							@endforeach
							
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>




<div class="row-fluid sortable">

				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><span class="break"></span>Daily Sell Report</h2>
						<div class="box-icon">
							
						</div>
					</div>
					
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
					
						  <thead >
							  <tr>
								   <th>Date</th>
								   <th>Total Sell</th>
			                       
							  </tr>
						  </thead>   
						  <tbody>
                             
                             @foreach($sell_daily as $sell_daily)
							<tr>
						      <td>{{$sell_daily->order_date}}</td>
						      <td>{{$sell_daily->order_total}}</td>
						    </tr>
							@endforeach
							
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>


@endsection