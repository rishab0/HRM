@extends('Layout.app')
@section('title',@$label)
@section('content')

<!-- Sidebar -->
@include('Layout.sidebar')
<!-- /Sidebar -->

<div class="col-xl-9 col-lg-8  col-md-12">
    <div class="row">
        <div class="col-xl-12 col-lg-8 col-md-12">
            <form method="POST" name="joblist" id="jobOpening" action="{{url('/add-job-opening')}}">
                @csrf
                <input type="hidden" name="id" id="id" value="{{@$jobOpening->id}}">
                <div class="card ctm-border-radius shadow-sm grow">
                    <div class="card-header">
                        <h4 class="card-title mb-0 d-inline-block">
                            {{@$label}}
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" name="JobTitle" id="JobTitle" class="form-control commonCustomSelect" autocomplete="off" data-url="{{url('/get-job-opening-title')}}" placeholder="Job Title*" value="{{@$jobOpening->title ?: old('JobTitle') }}">
                                <ul class="recentSearchDrop" style="display:none" aria>
                                </ul>
                                @if ($errors->has('JobTitle'))
                                <span class="text-error" role="alert">
                                    <strong>{{ $errors->first('JobTitle') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="hidden" name="departmentId">
                                <input type="text" name="designation" id="designation" class="form-control commonCustomSelect" autocomplete="off" data-url="{{url('/get-department-title')}}" placeholder="Designation*" value="{{@$jobOpening->getDesignation['title'] ?: old('designation') }}">
                                <ul class="recentSearchDrop" style="display:none" aria>
                                </ul>
                                @if ($errors->has('designation'))
                                <span class="text-error" role="alert">
                                    <strong>{{ $errors->first('designation') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <!-- <input type="hidden" name="departmentId"> -->
                                <input type="text" name="department" id="department" class="form-control commonCustomSelect" autocomplete="off" data-url="{{url('/get-department-ajax')}}" placeholder="Department*" value="{{@$jobOpening->getDepartment['title'] ?: old('department') }}">
                                <ul class="recentSearchDrop" style="display:none" aria>
                                </ul>
                                @if ($errors->has('department'))
                                <span class="text-error" role="alert">
                                    <strong>{{ $errors->first('department') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text"  name="minExperience" id="minExperience" class="form-control" autocomplete="off" placeholder="Min Experience" value="{{@$jobOpening->min_experience ?: old('minExperience') }}">
                                        @if ($errors->has('minExperience'))
                                        <span class="text-error" role="alert">
                                            <strong>{{ $errors->first('minExperience') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text"  name="maxExperience" id="maxExperience" class="form-control" autocomplete="off" placeholder="Max Experience*" value="{{@$jobOpening->max_experience ?: old('maxExperience') }}">
                                        @if ($errors->has('maxExperience'))
                                        <span class="text-error" role="alert">
                                            <strong>{{ $errors->first('maxExperience') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="minSalary" id="minSalary" class="form-control" autocomplete="off" placeholder="Min Salary" value="{{@$jobOpening->min_salary ?: old('minSalary') }}">
                                        @if ($errors->has('minSalary'))
                                        <span class="text-error" role="alert">
                                            <strong>{{ $errors->first('minSalary') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="maxSalary" id="maxSalary" class="form-control" autocomplete="off" placeholder="Max Salary*" value="{{@$jobOpening->max_salary ?: old('maxSalary') }}">
                                        @if ($errors->has('maxSalary'))
                                        <span class="text-error" role="alert">
                                            <strong>{{ $errors->first('maxSalary') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" name="postion" id="postion" class="form-control" autocomplete="off" placeholder="No of Postion*" value="{{@$jobOpening->position ?: old('postion') }}">
                                @if ($errors->has('postion'))
                                <span class="text-error" role="alert">
                                    <strong>{{ $errors->first('postion') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" name="description" id="description" class="form-control" autocomplete="off" placeholder="description*" value="{{@$jobOpening->description ?: old('description') }}">
                                @if ($errors->has('description'))
                                <span class="text-error" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-md-12 form-group">
                                <input type="text" name="timePeriod" id="timePeriod" class="form-control datetimepicker" autocomplete="off" placeholder="Time Period*" value="{{@$jobOpening->time_period ? $jobOpening->time_period : old('timePeriod') }}">
                                @if ($errors->has('timePeriod'))
                                <span class="text-error" role="alert">
                                    <strong>{{ $errors->first('timePeriod') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-md-12 form-group mb-0">
                                <select class="form-control " name="status">
                                    <option value="default" selected disabled>Select Status</option>
                                    <option @if((@$jobOpening->status ) == 'Open') selected @endif value="Open">Open</option>
                                    <option @if((@$jobOpening->status ) == 'Upcoming') selected @endif value="Upcoming">Upcoming</option>
                                    <option @if((@$jobOpening->status ) == 'Hold') selected @endif value="Hold">Hold</option>
                                    <option @if((@$jobOpening->status ) == 'Closed') selected @endif value="Closed">Closed</option>
                                    <option @if((@$jobOpening->status ) == 'Archive') selected @endif value="Archive">Archive</option>
                                </select>
                                @if ($errors->has('status'))
                                <span class="text-error" role="alert">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row grow">
                    <div class="col-12">
                        <div class="submit-section text-center btn-add">
                            <input type="submit" value="Save" class="btn btn-theme text-white ctm-border-radius button-1">
                            <a href="{{url('/job-opening')}}" class="btn btn-danger text-white ctm-border-radius">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
</div>
</div>


@endsection