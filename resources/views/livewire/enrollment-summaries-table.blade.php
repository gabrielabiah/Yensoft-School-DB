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
                        @foreach ($stages as $class)
                            <tr>

                                <td class="w60">
                                    {{ $class->name }}
                                </td>
                                <td><span class="font-16">{{ getTotalMales($class->class_name) }}</span></td>
                                <td>{{ getTotalFemales($class->class_name) }}</td>
                                <td>{{ getTotalStudents($class->class_name) }} </td>

                            </tr>
                        @endforeach




                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
