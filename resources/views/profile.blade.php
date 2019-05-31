@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Profile') }}</b></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf

                        <div class="form-group row">
                            <label name="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                             <div class="col-md-6">
                                Najir Hossain
                                   
                                </div>

                        </div>

                        <div class="form-group row">
                            <label name="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                             <div class="col-md-6">
                              najircsesust@gmail.com
                                   
                                </div>

                        </div>

                        <div class="form-group row">
                            <label name="Address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                             <div class="col-md-6">
                                <textarea>Varsity Gate,SUST</textarea>
                                   
                                </div>

                        </div>

                        

                         <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">
                            Institute:</label>
                               <div class="col-md-6">
                                  <select  name="institute" size="3" multiple ="multiple">
                                    <option value="SUST" selected="selected">SUST</option>
                                    <option value="DU" >DU</option>
                                    <option value="BUET" >BUET</option>
                                  </select>     
                                </div>
                         </div>

                         <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">Classes:</label>
                               <div class="col-md-6">
                                  <select  name="institute" size="2" multiple ="multiple">
                                    <option value="8" selected="selected">8</option>
                                    <option value="9" >9</option>

                                  </select>     
                                </div>
                         </div>

                         <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">Subjects:</label>
                               <div class="col-md-6">
                                  <select  name="institute" size="2" multiple ="multiple">
                                    <option value="physics" selected="selected">Physics</option>
                                    <option value="Chemistry" >Chemistry</option>
                                    <option value="Biology" selected="selected">Biology</option>
                                    <option value="Higher Math" selected="selected">Higher Math</option>
                                  </select>     
                                </div>
                         </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact No') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text-md-right" class="form-control" name="Payment" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>
                                 <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        


                     

                        
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
