<div>
    {{-- The whole world belongs to you --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Manage Exam Marks</h3>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exam">Exam</label>
                                <select name="exam" id="exam" class="form-control">
                                    <option value="">Select Exam</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Class">Class</label>
                                <select name="class" id="class" class="form-control">
                                    <option value="">Select Class</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Subject">Subject</label>
                                <select name="subject" id="subject" class="form-control">
                                    <option value="">Select Subject</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <a href="#" class="btn btn-primary m3 float-right">Enter Marks</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">Subject:</div>
                <div class="col-md-4">Class:</div>
                <div class="col-md-4">Exam:</div>
            </div>

            <div class="row pt-3">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>CAM 1 (10)</th>
                                <th>CAM 2 (20)</th>
                                <th>EXAM (70)</th>
                            </tr>
                        </thead>
                    </table>
                    <div class="offset-md-5">
                        <a href="#" class="btn btn-primary">Record Marks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
