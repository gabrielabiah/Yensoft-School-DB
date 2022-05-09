<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List of Newest Students</h3>
        </div>

        <div class="card-body">
            <div class="table-responsive card">
                <table class="table table-hover table-vcenter table-striped mb-0 text-nowrap">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th></th>
                            <th>Class</th>

                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- @dd($student_list); --}}

                        @foreach ($student_list as $item)
                            <tr>

                                <td class="w60">
                                    <img class="avatar" style="object-fit:cover"
                                        src="{{ Storage::url(getStudentPhoto($item->student_id)) }}" alt="">
                                </td>

                                <td><span
                                        class="font-16">{{ $item->student_surname . ' ' . $item->student_firstname }}</span>
                                </td>
                                <td>{{ $item->student_class }}</td>

                                <td>

                                    {{ $item->admission_status }}
                                    {{-- <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button> --}}
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
