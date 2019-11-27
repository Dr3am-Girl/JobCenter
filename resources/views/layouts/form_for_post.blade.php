
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Post a job') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('post/job') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title" >

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Job Description') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('body') is-invalid @enderror" name="body" >

                                    @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Educational Qualification') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('educational_qualification') is-invalid @enderror" name="educational_qualification" >

                                    @error('educational_qualification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Experience') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" >

                                    @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Vacancy') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('vacancy') is-invalid @enderror" name="vacancy" >

                                    @error('vacancy')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Deadline') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('deadline') is-invalid @enderror" name="deadline" >

                                    @error('deadline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('salary') is-invalid @enderror" name="salary" >

                                    @error('salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('location') is-invalid @enderror" name="location" >

                                    @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('country') is-invalid @enderror" name="country" >

                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
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
