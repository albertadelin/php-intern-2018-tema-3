@extends ('layouts.master')

@section ('create')

    
    <div class="table-title">
        <div class="row">
            <div class="col-sm-8"><h2><b>Create a new Employee</b></h2></div>

        </div>
    </div>

        <hr>


        <form method="POST" action="">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <textarea id="body" name="body" class="form-control"> </textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
            

            @include ('layouts.errors')

        </form>

       


@endsection