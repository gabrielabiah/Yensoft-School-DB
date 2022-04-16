<x-backend-layout>
    <x-slot name='pagetitle'> School Management System </x-slot>
@section('current-page-title', 'School Dashboard')
@section('navigation')

<li><a href="/staff"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li>
<li><a href="/dashboard"><i class="fa fa-users"></i><span>Students</span></a></li>


@endsection

@section('user-navigation')
<li><a href="/staff"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li>
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