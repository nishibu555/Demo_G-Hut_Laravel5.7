
@extends('admin.admin_layout')


@section('admin_content')

		<div class="container-fluid-full">
		<div class="row-fluid">
				
		
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2></i><span class="break"></span>Add Top Manufacture</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">



                    <form class="form-horizontal" method="post" action="{{ url('/save_top_manufacture')}}" enctype="multipart/form-data">

							{{csrf_field()}}
                              	  <fieldset>
						
   
                              <div class="control-group">
							  <label class="control-label" for="date01">Manufacture name</label>
							  <div class="controls">
							  <input type="text" class="input-xlarge" name="top_manufacture_name">
							</div> <br>  
                            
                            <div class="control-group">
							  <label class="control-label" for="date01">City</label>
							  <div class="controls">
							  <input type="text" class="input-xlarge" name="top_manufacture_city">
							</div> <br>
                              
                              <div class="control-group">
							  <label class="control-label" for="date01">Address</label>
							  <div class="controls">
							  <input type="text" class="input-xlarge" name="top_manufacture_address">
							</div> <br>
							
                                                      

                            <div class="control-group">
							  <label class="control-label" for="date01">Contact Number</label>
							  <div class="controls">
							  <input type="text" class="input-xlarge" name="top_manufacture_phone">
							</div>   	
							  



                           <div class="control-group">
							  <label class="control-label" for="fileInput">Upload Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="top_manufacture_image" type="file">
							  </div>
							</div>


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add top manufacture</button>
							</div>
						  
						</fieldset>
					        
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			
			


@endsection