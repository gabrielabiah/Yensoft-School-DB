<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Settings
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name_of_school">Name of School</label>
                        <input type="text" name="name_of_school" id="name_of_school" placeholder="School Name"
                            value="{{ $school_name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="short_name">Short Name</label>
                        <input type="text" name="short_name" id="short_name" placeholder="SDB" class="form-control"
                            value="{{ $short_name }}">
                    </div>
                    <div class="form-group">
                        <label for="gps_address">GPS Address</label>
                        <input type="text" name="gps_address" id="gps_addresss" placeholder="GPS Address"
                            class="form-control" value="{{ $gps_address }}">
                    </div>
                    <div class="form-group">
                        <label for="postal_address">Postal Address</label>
                        <textarea name="postal_address" id="postal_address" placeholder="Postal Address" cols="30" rows="3"
                            class="form-control">{{ $postal_address }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="region">Region</label>
                        <input type="text" name="region" id="region" placeholder="Region" class="form-control"
                            value="{{ $region }}">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" placeholder="City" class="form-control"
                            value="{{ $city }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_established">Date of Establishment</label>
                        <input type="date" name="date_established" id="date_established" placeholder="Select Date"
                            class="form-control" value="{{ $date_of_establishment }}">
                    </div>
                    <div class="form-group">
                        <label for="sector">Sector</label>
                        <select name="sector" id="sector" class="form-control">
                            <option value="">Select Sector</option>
                            <option value="private">Private</option>
                            <option value="public">Public</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" name="mobile" id="mobile" placeholder="Mobile" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="upload">Upload Logo</label>

                    </div>
                    <div class="form-group">
                        <label for="term_begins">Term Begins</label>
                        <input type="date" name="term_begins" id="term_begins" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="term_ends">Term Ends</label>
                        <input type="date" name="term_ends" id="term_ends" class="form-control">
                    </div>
                </div>

            </div>

        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4 btn-group">
                    <a href="#" class="btn btn-danger">Cancel</a>
                    <a href="#" class="btn btn-primary">Submit</a>
                </div>
            </div>
        </div>
    </div>
</div>
