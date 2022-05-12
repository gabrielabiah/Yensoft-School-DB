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
                                <th> {{ __('Student No.') }}</th>
                                <th> {{ __('Name') }} </th>
                                <th> {{ __('Class') }} </th>
                                <th> {{ __('House') }} </th>
                                <th> {{ __('Gender') }} </th>
                                <th> {{ __('Action') }} </th>
                            </tr>
                        </thead>
                        @foreach ($collection as $item)
                            <tr>

                                <td> {{ $item->student_id }}</td>
                                <td> {{ ucfirst($item->student_surname) . ' ' . ucfirst($item->student_firstname) . ' ' . ucfirst($item->student_othername) }}
                                </td>
                                <td> {{ ucfirst($item->student_class) }}</td>
                                <td> {{ ucfirst($item->student_house) }}</td>
                                <td>{{ ucfirst($item->student_gender) }} </td>
                                <td> </td>

                            </tr>
                        @endforeach
                    </table>
                    <div class="m-3">
                        {{ $collection->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
