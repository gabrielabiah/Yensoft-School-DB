<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="card">
            <div class="card-header">


                <h3 class="card-title">Student List</h3>

                <a href="{{ route('admit-student') }}" class="btn btn-primary float-right"
                    style="margin-left:auto; order:2">Admit Student</a>

            </div>
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
                            <td>
                                <a type="button" class="btn btn-primary"
                                    style="text-decoration: none !important;color:rgb(29, 29, 29);"
                                    wire:click="view({{ $item->id }})">
                                    {{-- <i class="fa fa-address-card-o" aria-hidden="true"></i> --}}
                                    <i class="fa fa-eye" aria-hidden="true" style="color:white"></i>
                                </a>
                                <a class="btn btn-primary" type="button"
                                    style="text-decoration: none !important; color:rgb(29, 29, 29);"
                                    wire:click="edit({{ $item->id }})">
                                    <i class="fa fa-pencil-square-o" style="color:white" aria-hidden="true"></i></a>
                                <x-prompt-modal-component itemID="{{ $item->id }}" />

                            </td>

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
