<x-backend-layout> 
    <x-slot name="pagetitle"> Admit New Student </x-slot>



    <div class="col md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Student Information</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">

                        <div class="col-md-6">
    
                            <label for="surname"class="form-label">Surname</label>
                            <input type="text" class="form-control" placeholder="Surname" name="surname">
                            
                            <label for="surname" class="form-label">Other Name</label>
                            <input type="text" class="form-control" placeholder="Other Name" name="othername">
                            
                            <label for="parentname" class="form-label">Name of Parent/Guardian</label>
                            <input type="text" class="form-control" placeholder="Name of Parent/Guardian" name="parentname">

                            <label for="postaladdress" class="form-label">Postal Address</label>
                            <input type="text" class="form-control" placeholder="Postal Address" name="postaladdress">

                            <label for="nationality" class="form-label">Nationality</label>
                            <input type="text" class="form-control" placeholder="Nationality" name="nationality">

                            <label for="hometown" class="form-label">Hometown</label>
                            <input type="text" class="form-control" placeholder="Hometown" name="hometown">
                            <div class="row">
                                    <div class="col-md-6">
                                        <label for="studentid" class="form-label">Student ID</label>
                                        <input type="text" class="form-control" placeholder="Student ID" name="studentid">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="class" class="form-label">Class</label>
                                        <input type="text" class="form-control" placeholder="Class" name="class">
                                    </div>
                            </div> 

                        </div>

                        <div class="col-md-6">

                            <label class="form-label" for="firstname">First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" name="firstname">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-control"> 
                                        <option value="">Please Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">other</option>
                                        <option value="none">Prefer not to say</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="dateofbirth" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" placeholder="Date of Birth" name="dateofbirth">
                                </div>
                        </div>
                        <label for="religion">Religion</label>
                        <select name="religion" id="religion" class="form-control">
                            <option value="">Select Religion</option>
                            <option value="christian">Christianity</option>
                            <option value="muslim">Islam</option>
                            <option value="africantraditionalreligion">African Traditional Religion</option>
                            <option value="hindu">Hindu</option>
                            <option value="other">Other</option>
                        </select>
                        <label for="mobile" class="form-label"> Mobile </label>
                        <input type="mobile" placeholder="Mobile" name="mobile" class="form-control">
                        <label for="region">Region</label>
                        <select name="region" id="region" class="form-control">
                            <option value="">Select Region</option>
                            <option value="Greater Accra">Greater Accra</option>
                            <option value="Upper East">Upper East</option>
                            <option value="Savanna">Savanna</option>

                        </select>
                        {{-- <hr /> --}}
                        <label for="photo"> Upload Passport Photo</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                          </div>

                          <div class="row">
                              <div class="col-md-6">
                                  <label for="house">House</label>
                                  <input type="text" placeholder="House" name="house" class="form-control">
                                  
                                </div>
                                <div class="col-md-6">
                                    <label for="yearofadmission"> Year Admitted</label>
                                    <input type="text" placeholder="Year Admitted" name="yearofadmission" class="form-control">
                                </div>

                          </div>

                    </div>

                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <em> Please fill out all required fields. </em>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6"> 
                                <a href="#" class="btn btn-danger">Cancel</a>
                            </div>
                            <div class="col-md-6"> 
                                <a href="#" class="btn btn-primary">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


</x-backend-layout>