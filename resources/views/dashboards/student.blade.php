<x-backend-layout>
    <x-slot name='pagetitle'> School Management System </x-slot>
@section('current-page-title', 'School Dashboard')
@section('navigation')

<li><a href="/dashboard"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li>
<li><a href="/dashboard"><i class="fa fa-users"></i><span>Students</span></a></li>


@endsection

@section('user-navigation')
{{-- <li><a href="/dashboard"><i class="fa fa-black-tie"></i><span>Teachers</span></a></li> --}}
@endsection

@section('content')

{{-- <div class="section-body mt-4">
    <div class="container-fluid">
        <h4>@yield('current-page-title')</h4>
        
    </div>
</div> --}}

@endsection
</x-backend-layout>