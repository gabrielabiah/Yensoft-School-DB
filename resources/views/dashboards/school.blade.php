<x-backend-layout>
    <x-slot name='pagetitle'> School Management System </x-slot>
    @section('current-page-title', 'School Dashboard')

    <x-navigation />

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
                    <a href="{{ URL::route('admit-student') }}" class="btn btn-primary btn-block btn-lg"> Admit Student
                        </button>
                        <a href="{{ URL::route('list-students') }}" class="btn btn-primary btn-block btn-lg"> Get List
                        </a>
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
