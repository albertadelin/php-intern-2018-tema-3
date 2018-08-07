@extends ('layouts.master')

@section ('create')

    
    <div class="table-title">
        <div class="row">
            <div class="col-sm-8"><h2><b>Add Employee</b></h2></div>

        </div>
    </div>

        <hr>

        <form method="post" action="{{route('employee.update', $id)}}">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}">
            </div>

            <div class="form-group">
                <label for="">Company</label>
                <select id="company_id" name="company_id" class="form-control">

                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}"> {{ $company->name }} </option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            

            @include ('layouts.errors')

        </form>

       


@endsection