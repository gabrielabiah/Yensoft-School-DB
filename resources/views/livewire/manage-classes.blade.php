<div>
    {{-- Stop trying to control. --}}
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="card-title">All Classes</h3>
                <table class="table table-hover table-vcenter table-striped mb-0 text-nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_classes as $item)
                            <tr>
                                <td>{{ $item->class_name }}</td>
                                <td>{{ $item->class_description }}</td>
                                <td>{{ $item->class_department }}</td>
                                <td><a href="" class="btn btn-primary">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Create New Class
                        </h3>

                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group"><label for="name">Name</label>
                                <input type="text" name="name_of_class" id="name_of_class" placeholder="E.g BS 1"
                                    class="form-control" wire:model="class_name">
                            </div>
                            <div class="form-group"> <label for="description">Description</label>
                                <input type="text" name="description" id="description" placeholder="E.g. Basic One"
                                    class="form-control" wire:model="class_description">
                            </div>
                            <div class="form-group">
                                <label for="Department">Department</label>
                                <input type="text" name="department" placeholder="Department" class="form-control"
                                    wire:model="class_department">
                            </div>
                            <div class="offset-md-4">
                                <button href="#" class="btn btn-primary" wire:click.prevent.lazy="save">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
