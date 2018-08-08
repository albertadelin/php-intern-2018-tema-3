@extends ('layouts.master')

@section ('create')

    
    <div class="table-title">
        <div class="row">
            <div class="col-sm-8"><h2><b>Add a new Employee</b></h2></div>

        </div>
    </div>

        <hr>


        <form method="POST" action="/employee">

            

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
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
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            

            
        </form>

       


@endsection