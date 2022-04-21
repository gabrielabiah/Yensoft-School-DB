<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Enrollment Summaries</h3>
            </div>
            <div class="card-body">
            <div class="table-responsive card">
                <table class="table table-hover table-vcenter table-striped mb-0 text-nowrap">
                    <thead>
                        <tr>
                            
                            <th>Class</th>
                            <th>Male</th>
                            <th>Female</th>
                           
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($summaries as $item)
                        <tr>
                            
                            <td class="w60">
                                {{$item->class}}
                            </td>
                            <td><span class="font-16">{{$item->male}}</span></td>
                            <td>{{$item->female}}</td>
                           
                            <td>{{$item->total}} </td>
                            
                        </tr>
                        @endforeach
                        
                        
                        
                        
                    </tbody>
                </table>
            </div>
            
            </div>
    </div>
</div>