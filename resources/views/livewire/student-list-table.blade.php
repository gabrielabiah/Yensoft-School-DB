<div> 
<div class="card">
    <div class="card-header"> 
        <h3 class="card-title">List of Newest Students</h3>
    </div>
    
    <div class="card-body">
    <div class="table-responsive card">
        <table class="table table-hover table-vcenter table-striped mb-0 text-nowrap">
            <thead>
                <tr>
                    
                    <th>Name</th>
                    <th></th>
                    <th>Class</th>
                   
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @php
                    $photo="images/xs/avatar1.jpg";
                    // $photo="";
                     $studentname="";    
                     $class="";    
                    @endphp
                    <td class="w60">
                        <img class="avatar" src="{{asset($photo)}}" alt="">
                    </td>
                   
                    <td><span class="font-16">{{$studentname}}</span></td>
                    <td>{{$class}}</td>
                   
                    <td>

                        Active
                        {{-- <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button> --}}
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
    </div>
    
</div>
</div> 