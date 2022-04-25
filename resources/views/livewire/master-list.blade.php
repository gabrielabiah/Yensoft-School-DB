<div>
    {{-- In work, do what you enjoy. --}}

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Manage Master List</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exam">Exam</label>
                                <select name="exam" id="exam" class="form-control">
                                    <option value="">Select Exam</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="class">Class</label>
                                <select name="class" id="class" class="form-control">
                                    <option value="">Select Class</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="" class="btn btn-primary float-right m-3">View Master List</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    Master List
                </div>
                <div class="col-md-2">
                    Class:
                </div>
                <div class="col-md-3">Exam:</div>
                <div class="col-md-2">Year</div>
                <div class="col-md-3">Teacher</div>
            </div>
            <div class="row pt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Eng</th>
                            <th>Mat</th>
                            <th>Sci</th>
                            <th>Total</th>
                            <th>Average</th>
                            <th>Position</th>
                        </tr>
                    </thead>
                </table>
                <div class="offset-md-5">
                    <a href="" class="btn btn-primary">Print Master List</a>
                </div>
            </div>
        </div>
    </div>

</div>
