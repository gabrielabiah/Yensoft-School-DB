<x-backend-layout>
<x-slot name='pagetitle'> School Management System </x-slot>

@section('current-page-title', 'Complete Account Setup')

@section('navigation')

@can('superadmin')

<li><a href="/dashboard"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li>

@endcan

<li><a href="/dashboard"><i class="fa fa-users"></i><span>Account Setup</span></a></li>
@endsection 


@section('user-navigation')
{{-- <li><a href="/dashboard"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li> --}}
<li><a href="/dashboard"><i class="fa fa-users"></i><span>Account Setup</span></a></li>
{{-- <li><a> Account Setup</a> </li> --}}
@endsection



<div class="section-body mt-4">
    <div class="container-fluid">
        <h4>@yield('current-page-title')</h4>
    </div>
</div>
<div class="row col-12" style="padding:50px !important;">
<div class="card" style="padding:auto; margin:auto;">
    <div class="card-header">
        <h3 class="card-title">@yield('current-page-title')</h3>
        <div class="card-options">
            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
            {{-- <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a> --}}
            {{-- <div class="item-action dropdown ml-2">
                <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="card-body form-horizontal">
        
            <x-validation-errors />

        <form action="{{ url('user/onboarding')}}" method="post">
            @csrf
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Name of School <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" name="schoolname" class="form-control">
            </div>
        </div>

        <fieldset disabled>


        <div class="form-group row">
            <label class="col-md-3 col-form-label">Role <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" name="user_roled" class="form-control" value="Admin">
                <input type="hidden" name="user_role" class="form-control" value="Admin">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 col-form-label">Email address <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" name="user_emaild" class="form-control" value="{{Auth::user()->email}}">
                <input type="hidden" name="user_email" class="form-control" value="{{Auth::user()->email}}">
            </div>
        </div>
    </fieldset>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">First Name <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" name="fname" class="form-control" value="{{getFirstName(Auth::user()->name)}}" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Last Name <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="text" name="lname" class="form-control" value="{{getLastName(Auth::user()->name)}}" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Date of Birth <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <input type="date" name="dateofbirth" class="form-control" required placeholder="" value="">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Gender <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <select name="gender" class="form-control custom-select"> 
                    <option value="">Please Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                    <option value="none">Prefer not to say</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Postal Address</label>
            <div class="col-md-7">
                <textarea rows="5" name="postaladdress" class="form-control" placeholder=""></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">GPS Address </label>
            <div class="col-md-7">
                <input type="text" name="gps" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">Country <span class="text-danger">*</span></label>
            <div class="col-md-7">
                <select name="country" class="form-control custom-select">
                    <option value="" selected> Select Country</option>
                    <option value="Ghana" selected> Ghana</option>
                    @if($countries->count())

                    @foreach ($countries as $country)

                        <option value="{{$country->name->common}}">{{$country->name->common}}</option>

                    @endforeach

                    @endif
                </select>
            </div>
        </div>
         
    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">Complete</button>
    </div>
</div>
</div>
</x-backend-layout> 
