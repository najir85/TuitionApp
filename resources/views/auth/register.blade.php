@extends('layouts.app')

@section('content')
<div class="container banner-content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cotact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact" required>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple" required>institute:</label>
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
                             <label class="col-md-4 col-form-label text-md-right"  multiple="multiple "required>Classes:</label>
                               <div class="col-md-6">
                                  <select  name="class" class="form-control">
                                    <option value="" >Select Class</option>
                                    <option value="6" >6</option>
                                    <option value="7" >7</option>
                                    <option value="8" >8</option>
                                    <option value="9" >9</option>
                                    <option value="10" >10</option>
                                    <option value="11" >11</option>
                                     <option value="12" >12</option>
                                    <option value="admission" >admission Test</option>
                                  </select>     
                                </div>
                         </div>

                         <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple" required>Subjects:</label>
                               <div class="col-md-6 ">
                                  <select  name="subject" class="form-control">
                                    <option value="" >Select Subjects</option>
                                    <option value="physics" >Physics</option>
                                    <option value="Chemistry" >Chemistry</option>
                                    <option value="Biology" >Biology</option>
                                    <option value="Higher Math">Higher Math</option>
                                    <option value="General Math">General Math</option>
                                    <option value="English">English</option>
                                    <option value="Bangla">Bangla</option>
                                    <option value="ICT">ICT</option>
                                  </select>     
                             </div>
                         </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
