@extends('layouts.app')

@section('content')
    @php
    $all_post=App\Job::all();
    @endphp


    <div class="container">

        @foreach($all_post as $job )

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" >
                <div class="norm-jobs-wrapper" onclick="DivOpen('id=879314&amp;fcatId=20&amp;ln=1');">
                    <div class="row">

                        <div class="col-sm-3 col-sm-push-3">

                        </div>
                        <div class="col-sm-9 col-sm-pull-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="job-title-text">
                                        <a onclick="clickJObTitle()" target="_blank" href="https://jobs.bdjobs.com/jobdetails.asp?id=879314&amp;fcatId=20&amp;ln=1">
                                           {{$job->title}}
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="comp-name-text">
                                        {{$job->user->business_name}}
                                    </div>
                                </div>


                                <div class="col-sm-12">
                                    <div class="locon-text">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="locon-text-d">{{$job->location}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="edu-text">
                                        <div class="edu-text-d">
                                           {{-- <img src="Hospih%20%20%20Bdjobs.com_files/Edu-cap.svg" alt="Education" title="Education">--}}
                                            {{$job->body}}

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="exp-text">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="exp-text-d">
                                                    {{--<img src="0%20Bdjobs.com_files/Exp_brief.svg" alt="Experience" title="Experience">--}}
                                                    {{$job->experience}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="dead-text">
                                        <div class="dead-text-s">

                                            Deadline:</div>
                                        <div class="dead-text-d">
                                        {{$job->deadline}}

                                        </div>

                                        @if(empty(Auth::user()->business_name))
                                            @php
                                                $record=0;
                                                $data=App\User::find( Auth::user()->id )->applicants->where('job_id',$job->id)->first();

                                            @endphp
                                            @if(!$data)
                                                <a href="{{url('applied/'.$job->id)}}"><button class="btn btn-success">Apply</button></a>
                                            @elseif($data)
                                                <a href="#"><button class="btn btn-success">Applied</button></a>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

@endforeach

    </div>

@endsection
