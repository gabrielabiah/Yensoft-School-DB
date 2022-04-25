<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Student List</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive card">
                    <table class="table table-hover table-vcenter table-striped mb-0 text-nowrap">
                        <thead>
                            <tr>
                                <th> Student No.</th>
                                <th> Name </th>
                                <th>Class</th>
                                <th>House</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tr>
                            @foreach ($collection as $item)
                                <td> {{ $item->stdno }}</td>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->stage }}</td>
                                <td> {{ $item->house }}</td>
                                <td>{{ $item->gender }} </td>
                                <td> </td>
                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
