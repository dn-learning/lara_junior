@extends('layouts.app')

@section('content')
    <div class="card-header">Companies</div>
    <div class="card-body">

    <a class="btn btn-success" href="{{ route('companies.create') }}" role="button">Add new company</a></br></br>

        <div class="card">
            <div class="card-header">Companies list:</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Website</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th >1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
