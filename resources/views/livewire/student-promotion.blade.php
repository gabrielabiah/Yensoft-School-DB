<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="row">

        <div class="responsive-table card">
            <div class="card-header">
                <h3 class="card-title">Student Promotion</h3>
            </div>
            <div class="card-body">
                <h3 class="card-title">Promotion Period</h3>
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="class">From Class</label>
                                        <select name="from_class" id="from_class" class="form-control">
                                            <option value="">Select</option>
                                            <option value="">Basic 1</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="to_class">To Class</label>
                                        <select name="to_class" id="to_class" class="form-control">
                                            <option value="">Select</option>
                                            <option value="">Basic 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 m-3">
                            <a href="#" class="btn btn-primary float-right">Proceed</a>
                        </div>
                    </div>
                </form>
                <div class="mt-3">
                    <h3 class="card-title">Promotion From to</h3>
                    <table class="table table-hover table-vcenter table-striped mb-0 text-nowrap">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Current Session</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                                <tr>
                                    <td>{{ $item->student_id }}</td>
                                    <td>{{ $item->student_name }}</td>
                                    <td>{{ $item->current_session }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 offset-md-5 mt-3">
                            <a href="#" class="btn btn-primary">Promote Students</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
