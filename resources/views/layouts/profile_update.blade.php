@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Post a job') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('update/profile/'.Auth::user()->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" value="{{Auth::user()->first_name}}" class="form-control @error('first_name') is-invalid @enderror" name="first_name" >

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" value="{{Auth::user()->last_name}}"  class="form-control @error('last_name') is-invalid @enderror" name="last_name" >

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Skill') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" value="{{Auth::user()->skills}}"  class="form-control @error('skills') is-invalid @enderror" name="skills" >

                                    @error('skills')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                                <div class="col-md-6">

                                    <span class="btn-txt">Choose Your Image</span>

                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" >

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Your CV') }}</label>

                                <div class="col-md-6">

                                    <span class="btn-txt">Choose Your PDF</span>

                                    <input type="file" name="pdf" class="form-control @error('pdf') is-invalid @enderror" >

                                    @error('pdf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>






                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button  type="submit" class="btn btn-primary">
                                        {{ __('POST') }}
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
