@extends('layouts.app')

@section('content')
<div class="card-header">Edit Company - {{ $company->name }}</div>
    <div class="card-body">
        <form action="{{route('companies.update',['company'=>$company])}}" method="post">

            @include ('layouts.errors')
            @method('PUT')
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

            <button type="submit" class="btn btn-primary">Change</button>
        </form>
    </div>
@endsection