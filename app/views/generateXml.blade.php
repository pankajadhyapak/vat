<!-- Modal Window -->
<div class="modal fade" id="xmlgen">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Generate XML </h4>
      </div>
      <div class="modal-body">
      
      {{ Form::open(['url'=>'/generatexml']) }}
      		<div class="col-md-4">
	    		<div class="form-group {{ formErrorClass($errors, 'year'); }}">
	            	{{ Form::label('year', 'Select Year :',['class'=>'control-label']) }}
	            	{{ Form::selectRange('year',\Carbon\Carbon::now()->year,\Carbon\Carbon::now()->year,null,['class'=>'form-control']) }}
	            	{{ $errors->first('year', '<span class="help-block">:message</span>') }}
	            </div>
	        </div>
	        <div class="col-md-4">
		        <!-- Seller Tin Form Input -->
		        <div class="form-group {{ formErrorClass($errors, 'month'); }}">
	            	{{ Form::label('month', 'Select Month :',['class'=>'control-label']) }}
	            	{{ Form::selectMonth('month',\Carbon\Carbon::now()->month,['class'=>'form-control']) }}
	            	{{ $errors->first('month', '<span class="help-block">:message</span>') }}
	            </div>
	       </div>
      
       {{ Form::submit('Download XML',['class'=>'btn btn-info btn-block']) }}
      	{{ Form::close() }}

      
      </div>
      
      
    </div>
  </div>
</div>