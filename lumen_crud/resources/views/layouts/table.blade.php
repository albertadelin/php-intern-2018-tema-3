@extends ('layouts.master')

@section ('create')


<div class="table-title">
    <div class="row">
        <div class="col-sm-8"><h2><b>Details</b></h2></div>
        <div class="col-sm-4">
            <!-- <a href="/create/" type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a> -->
            
        </div>
    </div>
</div>

<table class="table table-bordered">
        <thead>
            <tr>
                <th>Name
                <a href="/employees/create/" class="edit" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                
                </th>
                <th>Company
                <a href="/companies/create/" class="edit" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                </th>
                <th>Company Description</th>
            </tr>
        </thead>
        
        <tbody>
            
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}
                        <form action="{{route('employee.destroy', $employee['id'])}}" method="post">
                                    
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button  class="btn btn-danger" type="submit">Delete</button>
                        </form>

                        
                        <a href="{{route('employee.edit', $employee['id'])}}" class="btn btn-warning">Edit</a>
                        
                    </td>
                    <td>{{ $employee->companies->name }}
                    <form action="{{route('company.destroy', $employee->companies['id'])}}" method="post">
                                    
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button  class="btn btn-danger" type="submit">Delete</button>
                    </form>

                    <a href="{{route('company.edit', $employee->companies['id'])}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>{{ $employee->companies->description }}</td>

                </tr>
            @endforeach
            
        </tbody>
</table>

@endsection