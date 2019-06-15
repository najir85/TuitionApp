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
                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">institute:</label>
                               <div class="col-md-6">
                                  <select  name="institute" size="2" multiple ="multiple">
                                    <option value="SUST" selected="selected">SUST</option>
                                    <option value="DU" >DU</option>
                                    <option value="BUET" >BUET</option>
                                  </select>     
                                </div>
                         </div>

                         <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">Classes:</label>
                               <div class="col-md-6">
                                  <select  name="class" size="2" multiple ="multiple">
                                    <option value="8" selected="selected">8</option>
                                    <option value="9" >9</option>
                                  </select>     
                                </div>
                         </div>

                         <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">Subjects:</label>
                               <div class="col-md-6">
                                  <select  name="subject" size="2" multiple ="multiple">
                                    <option value="physics" selected="selected">Physics</option>
                                    <option value="Chemistry" >Chemistry</option>
                                    <option value="Biology" selected="selected">Biology</option>
                                    <option value="Higher Math" selected="selected">Higher Math</option>
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
