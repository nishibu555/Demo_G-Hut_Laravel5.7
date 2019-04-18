
@extends('admin.admin_layout')


@section('admin_content')

			<div class="container-fluid-full">
		<div class="row-fluid">
				
		
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2></i><span class="break"></span>Add New Slide Image</h2>
						<div class="box-icon">
							
						</div>
					</div>
					<div class="box-content">

<p class="alert-success">
	<?php $message=Session::get('message'); 
     if($message){
     	echo $message;
         Session::put('message',"NULL");
     }
    
	?>


</p>


                    <form class="form-horizontal" method="post" action="{{ url('/save_slider')}}" enctype="multipart/form-data">

							{{csrf_field()}}
                              	  <fieldset>
												
                      
                   
					       <div class="control-group">
							  <label class="control-label" for="fileInput">Upload Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="slider_image" type="file">
							  </div>
							</div>


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add</button>
							</div>
						  </fieldset>
						
					        
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

		
			
			

			
			


@endsection