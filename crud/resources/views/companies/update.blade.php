@extends ('layouts.master')

@section ('create')

    
    <div class="table-title">
        <div class="row">
            <div class="col-sm-8"><h2><b>Update Company</b></h2></div>

        </div>
    </div>

        <hr>


        <form method="POST" action="{{route('company.update', $id)}}">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$company->name}}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" > </textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            

            @include ('layouts.errors')

        </form>

       


@endsection