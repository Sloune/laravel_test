@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Category</div>
                    <form action="{{ route('category.store') }}" method="post">
                        <div class="card-body">
                            @csrf
                            <label for="title">Category</label>
                            <input id="title" type="text" class="form-control" name="title" />
                            <label for="list"> Input Your Plans</label>
                            <pre><textarea id="list" name="list" cols="30" rows="10"></textarea></pre>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection