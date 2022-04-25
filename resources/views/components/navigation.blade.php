    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    @section('navigation')
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>

        <li> <a href="#"><i class="fa fa-users"> </i> Student Management </a>
            <ul>
                <li><a href="{{ URL::route('admit-student') }}"> Admit Student </a></li>
                <li><a href="{{ URL::route('list-students') }}"> Student List </a></li>
                <li><a href="{{ URL::route('promote-students') }}"> Student Promotion </a></li>
                {{-- <li><a href="#"> Manage Promotion </a></li> --}}
                <li><a href="{{ URL::route('classes') }}"> Classes </a></li>
                <li><a href="{{ URL::route('subjects') }}"> Subjects </a></li>
            </ul>

        </li>
        {{-- <li><a href="/student"><i class="fa fa-users"></i><span>Student Management</span></a></li> --}}
        <li>
            <a href="#"><i class="fa fa-book"></i><span>Exam Management</span></a>
            <ul>
                <li><a href="{{ URL::route('master-list') }}">Master List</a></li>
                <li><a href="{{ URL::route('report-card') }}">Report Card</a></li>
                <li><a href="{{ URL::route('marks-entry') }}">Marks entry</a></li>
                <li><a href="{{ URL::route('grades') }}">Grades</a></li>
                <li><a href="{{ URL::route('exam-list') }}">Exam List</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-briefcase"></i><span>Accounts Management</span></a>
            <ul>
                <li><a href="{{ URL::route('payments') }}">Payments</a></li>
                <li><a href="{{ URL::route('billing') }}">Billing</a></li>
                {{-- <li><a href="{{ URL::route('record-payment') }}">Record Payment</a></li> --}}
            </ul>
        </li>
        {{-- <li><a href="{{ URL::route('announcement') }}"><i class="fa fa-file"></i><span>Announcement</span></a></li> --}}
        {{-- <li><a href="{{ URL::route('user-management') }}"><i class="fa fa-user"></i><span>User Management</span></a> --}}
        </li>
        <li><a href="{{ URL::route('settings') }}"><i class="fa fa-cogs"></i><span>Settings</span></a></li>
    @endsection
