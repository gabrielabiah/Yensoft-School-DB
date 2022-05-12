<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}
    <div class="col md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Student Information</h3>

            </div>
            <div class="card-body">
                <x-validation-errors />

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="surname" class="form-label ">Surname</label>
                            <input type="text" tabindex="1" class="form-control" placeholder="Surname" name="surname"
                                wire:model='surname'>
                        </div>
                        <div class="form-group">
                            <label for="surname" class="form-label">Other Name</label>
                            <input type="text" tabindex="3" class="form-control" placeholder="Other Name"
                                name="othername" wire:model='othername'>
                        </div>
                        <div class="form-group">
                            <label for="parentname" class="form-label">Name of Parent/Guardian</label>
                            <input type="text" tabindex="6" class="form-control" placeholder="Name of Parent/Guardian"
                                name="parentname" wire:model='name_of_parent'>
                        </div>
                        <div class="form-group">
                            <label for="postaladdress" class="form-label">Postal Address</label>
                            <input type="text" tabindex="8" class="form-control" placeholder="Postal Address"
                                name="postaladdress" wire:model='postal_address'>
                        </div>
                        <div class="form-group">
                            <label for="nationality" class="form-label">Nationality</label>
                            <input type="text" tabindex="10" class="form-control" placeholder="Nationality"
                                name="nationality" wire:model='nationality'>
                        </div>
                        <div class="form-group">
                            <label for="hometown" class="form-label">Hometown</label>
                            <input type="text" tabindex="12" class="form-control" placeholder="Hometown"
                                name="hometown" wire:model='hometown'>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="studentid" class="form-label">Student ID</label>
                                <input type="text" tabindex="14" class="form-control" placeholder="Student ID"
                                    name="studentid" value="{{ $student_id }}">
                            </div>
                            <div class="col-md-6">
                                <label for="class" class="form-label">Class</label>
                                {{-- Check for Existing Classes --}}
                                @if ($classes->count() >= 1)
                                    <select name="class" id="class" class="form-control" wire:model.lazy="class">
                                        <option value="">Select Class</option>
                                        @foreach ($classes as $item)
                                            <option value="{{ $item->class_name }}">{{ $item->class_name }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <select name="class" id="class" class="form-control" wire:model.lazy='newclass'>
                                        <option value="">Select Class</option>
                                        <option value="Create New Class"><a href="{{ url('/classes') }}">No class
                                                found, Create a New
                                                Class</a>
                                        </option>
                                    </select>
                                @endif
                                {{-- <input type="text" tabindex="15" class="form-control" placeholder="Class" name="class"
                                    wire:model='class'> --}}
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="firstname">First Name</label>
                            <input type="text" tabindex="2" class="form-control" placeholder="First Name"
                                name="firstname" wire:model="firstname">
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="gender" class="form-label">Gender</label>
                                <select tabindex="4" class="form-control" wire:model='gender'>
                                    <option value="">Please Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">other</option>
                                    <option value="none">Prefer not to say</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="dateofbirth" class="form-label">Date of Birth</label>
                                <input type="date" tabindex="5" class="form-control" placeholder="Date of Birth"
                                    name="dateofbirth" wire:model='date_of_birth'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="religion">Religion</label>
                            <select name="religion" tabindex="7" id="religion" class="form-control"
                                wire:model="religion">
                                <option value="">Select Religion</option>
                                <option value="christian">Christianity</option>
                                <option value="muslim">Islam</option>
                                <option value="africantraditionalreligion">African Traditional Religion</option>
                                <option value="hindu">Hindu</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="form-label"> Mobile </label>
                            <input type="mobile" tabindex="9" placeholder="Mobile" name="mobile" class="form-control"
                                wire:model="mobile">
                        </div>
                        <div class="form-group">
                            <label for="region">Region</label>
                            <select name="region" tabindex="11" id="region" class="form-control" wire:model='region'>
                                <option value="">Select Region</option>
                                <option value="Greater Accra">Greater Accra</option>
                                <option value="Upper East">Upper East</option>
                                <option value="Savanna">Savanna</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="photo"> Upload Passport Photo</label>
                            <input class="form-control" type="file" id="photo" wire:model="photo_upload">
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="house">House</label>
                                <input type="text" tabindex="16" placeholder="House" name="house" class="form-control"
                                    wire:model="house">

                            </div>
                            <div class="col-md-6">
                                <label for="yearofadmission"> Year Admitted</label>
                                <input type="text" tabindex="17" placeholder="Year Admitted" name="yearofadmission"
                                    class="form-control" wire:model="year_of_admission">
                            </div>

                        </div>

                    </div>

                </div>
                <x-validation-errors />
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-8">
                        <em> Please fill out all required fields. </em>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-danger w-100 float-right" wire:click='cancel'>Cancel</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary w-100 float-right" wire:click="save">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
