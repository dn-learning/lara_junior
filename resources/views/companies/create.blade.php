@extends('layouts.app')

@section('content')
<div class="card-header">New Company</div>
    <div class="card-body">
        <form action="{{route('companies.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                </div>
            </div>

            <div class="form-group row">
                <label for="website" class="col-sm-2 col-form-label">Website</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="website" placeholder="Enter www">
                </div>
            </div>

            <div class="form-group">
                <label for="logo">Example file input</label>
                <input type="file" class="form-control-file" name="logo">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection