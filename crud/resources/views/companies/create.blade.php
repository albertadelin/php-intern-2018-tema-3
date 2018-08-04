@extends ('layouts.master')

@section ('create')

    
    <div class="table-title">
        <div class="row">
            <div class="col-sm-8"><h2><b>Add a new Companies</b></h2></div>

        </div>
    </div>

        <hr>


        <form method="POST" action="/store">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control"> </textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
            

            @include ('layouts.errors')

        </form>

       


@endsection