@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">


                        <div class="form-group row">
                            <label style="top: -6px" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image   : ') }}</label>

                            <img src="{{asset($data->image)}}" style="height: 150px;width:150px">

                        </div>

                        <div class="form-group row">
                            <label style="top: -6px" for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name   : ') }}</label>

                            <p style="margin-left: 16px" > {{$data->first_name}} </p>

                        </div>

                        <div class="form-group row">
                            <label style="top: -6px" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name   : ') }}</label>

                            <p style="margin-left: 16px" > {{$data->last_name}} </p>

                        </div>

                        <div class="form-group row">
                            <label style="top: -6px" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Skill   : ') }}</label>

                            <p style="margin-left: 16px" > {{$data->skills}} </p>

                        </div>

                        <div class="form-group row">
                            <label style="top: -6px" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Curriculum Vitae   : ') }}</label>

                            <a href="{{asset($data->pdf)}}">CV.pdf</a>

                        </div>







                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
