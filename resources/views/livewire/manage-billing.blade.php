<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Manage Payments
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="class">Class</label>
                            <select name="class" id="class" class="form-control">
                                <option value="">Select Class</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="amount">Amount</label>
                            <input type="text" name="E.g. 200" id="amount" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" placeholder="E.g. School Fees"
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="#" class="btn btn-primary m-3 float-right"> Process Bills</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        {{-- <div class="card-header"><h3 class="card-title"></h3></div> --}}
        <div class="card-body">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Term</th>
                            <th>Year</th>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><input type="text" placeholder="Amount" class="form-control"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
