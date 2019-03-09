@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{url('update')}}">
                        @csrf
                            <input type="hidden" name="id" value="{{$third1->id}}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $third1->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $third1->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="mobile" class="form-control{{ $errors->has('$third->mobile') ? ' is-invalid' : '' }}" name="mobile"  value="{{ $third1->mobile }}" required >

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="age" class="form-control" name="age"  value="{{ $third1->age }}" required>
                                 @if ($errors->has('age'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                          
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('location') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="location" class="form-control" name="location"  value="{{ $third1->location }}" required>
                                 @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="skill" class="col-md-4 col-form-label text-md-right">{{ __('skill') }}</label>

                            <div class="col-md-6">
                                <input id="skill" type="skill" class="form-control" name="skill"  value="{{ $third1->skill }}" required>
                                 @if ($errors->has('skill'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('skill') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('course') }}</label>

                            <div class="col-md-6">
                                <input id="course" type="course" class="form-control" name="course"  value="{{ $third1->course }}" requiredcourse                                 @if ($errors->has('course'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('course') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="college" class="col-md-4 col-form-label text-md-right">{{ __('college') }}</label>

                            <div class="col-md-6">
                                <input id="college" type="college" class="form-control" name="college"  value="{{ $third1->college }}" required>
                                 @if ($errors->has('college'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('college') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>