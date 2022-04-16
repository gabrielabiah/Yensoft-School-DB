<x-backend-layout>
    <x-slot name='pagetitle'> School Management System </x-slot>
@section('current-page-title', 'School Dashboard')
@section('navigation')

<li><a href="/dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
<li><a href="/student"><i class="fa fa-users"></i><span>Student Management</span></a></li>
<li><a href="/exam"><i class="fa fa-book"></i><span>Exam Management</span></a></li>
<li><a href="/account"><i class="fa fa-briefcase"></i><span>Account Management</span></a></li>
<li><a href="/announcement"><i class="fa fa-file"></i><span>Announcement</span></a></li>
<li><a href="/users"><i class="fa fa-user"></i><span>User Management</span></a></li>
<li><a href="/settings"><i class="fa fa-cogs"></i><span>Settings</span></a></li>


@endsection

@section('user-navigation')
<li><a href="/staff"><i class="fa fa-black-tie"></i><span>Add New User</span></a></li>
@endsection
<div class="row"> 
    <div class="col-md-5"> 
        @livewire('enrollment-summaries-table')
    </div>

    <div class="col-md-2 " style="height:20%"> 
        <button class="btn btn-primary btn-block btn-lg"> Admit Student </button>
        <button class="btn btn-primary btn-block btn-lg"> Get List </button>
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


   

</x-backend-layout>