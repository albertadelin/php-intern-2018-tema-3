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
                <th>Actions</th>
            </tr>
        </thead>
        
        <tbody>
            
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->companies->name }}</td>
                    <td>{{ $employee->companies->description }}</td>
                    
                    <td>
                        <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
</table>

@endsection