
@extends('admin.admin_layout')


@section('admin_content')

			<div class="container-fluid-full">
		<div class="row-fluid">
				
		
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<span class="break"></span>ADD MANUFACTURE</h2>
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


                    <form class="form-horizontal" method="post" action="{{ url('/save_manufacture')}}">

							{{csrf_field()}}
                              	  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Brand name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="manufacture_name" 
								 data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								
							  </div>
							</div>


							          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Brand Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="manufacture_description" rows="3"></textarea>
							  </div>
							</div>
                            

                            

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add brand</button>
							  
							</div>
						  </fieldset>
						
					        
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

		
			
			

			
			


@endsection