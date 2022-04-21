<x-backend-layout>
    <x-slot name='pagetitle'> School Management System </x-slot>
@section('current-page-title', 'School Dashboard')

@section('navigation')

<li><a href="/dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>

<li>  <a href="#"><i class="fa fa-users"> </i> Student Management </a> 
    <ul>
        <li><a href="/student-admission"> Admit Student </a></li>
        <li><a href="/student-management"> Student List </a></li>
        <li><a href="/student-promotion"> Student Promotion </a></li>
        {{-- <li><a href="#"> Manage Promotion </a></li> --}}
        <li><a href="{{URL::route('classes')}}"> Classes  </a></li>
        <li><a href="{{URL::route('subjects')}}"> Subjects </a></li>
    </ul> 

</li>
{{-- <li><a href="/student"><i class="fa fa-users"></i><span>Student Management</span></a></li> --}}
<li>
    <a href="#"><i class="fa fa-book"></i><span>Exam Management</span></a>
    <ul>
        <li><a href="#">Master List</a></li>
        <li><a href="#">Report Card</a></li>
        <li><a href="#">Marks entry</a></li>
        <li><a href="#">Grades</a></li>
        <li><a href="#">Exam List</a></li>
    </ul>
</li>
<li>
    <a href="/account"><i class="fa fa-briefcase"></i><span>Accounts Management</span></a>
    <ul>
        <li><a href="#">Payments</a></li>
        <li><a href="#">Billing</a></li>
        <li><a href="#">Record Payment</a></li>
    </ul>
</li>
<li><a href="/announcement"><i class="fa fa-file"></i><span>Announcement</span></a></li>
<li><a href="/users"><i class="fa fa-user"></i><span>User Management</span></a></li>
<li><a href="/settings"><i class="fa fa-cogs"></i><span>Settings</span></a></li>


@endsection

@section('user-navigation')
<li><a href="/staff"><i class="fa fa-users"></i><span>Admit Student</span></a></li>
<li><a href="/staff"><i class="fa fa-user"></i><span>Add New Parent</span></a></li>
<li><a href="/staff"><i class="fa fa-black-tie"></i><span>Add New Staff</span></a></li>
@endsection


<div class="col-md-8">
<table class="">

</table>
</div>

<div class="col-md-4">

</div>

<div class="tab-content">
    <div class="tab-pane fade show active" id="admin-Dashboard" role="tabpanel">
      

            <div class="row"> 
                <div class="col-md-5"> 
                    @livewire('enrollment-summaries-table')
                </div>

                <div class="col-md-2 " style="height:20%"> 
                    <a href="{{URL::route('admit-student')}}" class="btn btn-primary btn-block btn-lg"> Admit Student </button>
                    <a href="{{URL::route('list-students')}}" class="btn btn-primary btn-block btn-lg"> Get List </a>
                </div> 

                <div class="col-md-5"> 
                    @livewire('student-list-table')
                </div>
            </div>

                <div class="row flex-fill">
                    <div class="col-md-4">
                        @livewire('weekly-fee-payment-chart')
                    </div>
                    
                    <div class="col-md-3">
                        @livewire('notice-board')
                    </div>

                    <div class="col-md-5">
                        @livewire('calendar')
                    </div>

                </div>
    </div>
    <div class="tab-pane fade" id="admin-Activity" role="tabpanel">
        <div class="row clearfix row-deck">
            <h1> Hello </h1> 
        </div>
    </div>

    <div class="tab-pane fade" id="admin-Students" role="tabpanel">
        <div class="row clearfix row-deck">
            <h1> Students </h1> 
        </div>
    </div>

</div>

   

</x-backend-layout>