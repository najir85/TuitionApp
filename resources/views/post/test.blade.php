
{{Form::open(['action'=>'adminHobbyController@store'])}}
    <div class="form-group">

	 <label for="art" class="checkbox-inline">
	  {{Form::checkbox('hobby[]','art')}}Art
	 </label>
	 <label for="artitecture" class="checkbox-inline">        
	   {{Form::checkbox('hobby[]','artitecture')}}Artitecture
	 </label>
	 <label for="business" class="checkbox-inline">
	   {{Form::checkbox('hobby[]','business')}}Business
	  </label>
	          ...
	  <div class="form-group">
	    {{Form::submit('ADD',['class'=>'form-control'])}} 
	  </div>


{{Form::close()}}

