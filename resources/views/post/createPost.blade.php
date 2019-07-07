
@extends('layouts.app')

@section('content')

<body>
  

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">{{ __('Create Tuition Post ') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('storePost') }}" >
                        @csrf

                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">institute:</label>
                               <div class="col-md-6">
                                  <select  name="institute" class="form-control" >
                                    <option value="SUST" >SUST</option>
                                    <option value="DU" >DU</option>
                                    <option value="BUTEX" >BUTEX</option>
                                    <option value="JU" >JU</option>
                                    <option value="JNU" >JNU</option>
                                    <option value="KUET" >KUET</option>
                                    <option value="RUET" >RUET</option>
                                    <option value="CUET" >CUET</option>
                                    <option value="IUT" >IUT</option>
                                    <option value="MIST" >MIST</option>
                                    <option value="BAU" >BAU</option>
                                  </select>     
                                </div>
                         </div>

                         <div class="form-group row">
                             <label class="col-md-4 col-form-label text-md-right">class:</label>
                             <div class="col-md-6">
                               <select id='class' class="form-control" name="class[]" multiple >
                                    <option value='8'>8</option>
                                    <option value='9'>9</option>
                                    <option value='10'>10</option>
                                    <option value='11'>11</option>
                                    <option value='12'>12</option>
                                  </select>
                             </div>
                         </div>

                          <div class="form-group row">
                             <label class="col-md-4 col-form-label text-md-right"  >Subjects:</label>
                               <div class="col-md-6">
                                  <select id='subject' name='subject[]' multiple class="form-control" >
  
                                      <option value='Physics'>Physics</option>
                                    
                                      <option value='Chemistry'>Chemistry</option>
                                    
                                      <option value='Math'>Math</option>
                                    
                                      <option value='Ict'>ICT</option>
                                    
                                      <option value='English'>English</option>
                                    
                                  </select>
                                </div>
                            </div>
                        
                         <div class="form-group row">
                            <label for="payment" class="col-md-4 col-form-label text-md-right">{{ __('Payment') }}</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="payment"  required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="days" class="col-md-4 col-form-label text-md-right">{{ __('Days Per Week') }}</label>

                            <div class="col-md-6">
                                <input id="days" type="text-md-right" class="form-control" name="days" required >
                            </div>
                        </div>

                         <div class="form-group row">
                            <label name="addr" class="col-md-4 col-form-label text-md-right" >{{ __('Address') }}</label>

                             <div class="col-md-6">
                                <textarea name="address" type="text" required>   
                                </textarea>      
                              </div>
                          </div>

                          <div class="form-group row">
                            <label for="joiningdate" class="col-md-4 col-form-label text-md-right">{{ __('Joining Date') }}</label>

                            <div class="col-md-6">
                                <input id="joiningdate" type="date" class="form-control" name="joiningdate" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact No') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text-md-right" class="form-control" name="contact" required >
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('CreatePost') }}
                                </button>
                            </div>
                        </div>

  


                          
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



</body>

@endsection

