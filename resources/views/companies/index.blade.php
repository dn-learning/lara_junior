@extends('layouts.app')

@section('content')

    <div class="card-header">Companies</div>

    @include('layouts.flash')

    <div class="card-body">

    <a class="btn btn-success" href="{{ route('companies.create') }}" role="button">Add new company</a></br></br>

        <div class="card">
            <div class="card-header">Companies list:</div>
            <div class="card-body">

                @if ($companies)

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Website</th>
                            <th scope="col">Email</th>
                            <th scope="col">Logo</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                            @foreach ($companies as $company)
                                <tr>
                                    <td> {{ $company->name }} </td>
                                    <td> {{ $company->website }} </td>
                                    <td> {{ $company->email }} </td>
                                    <td> <img src="{{ asset("storage/$company->logo") }}" alt="logo" srcset="" style="width: 100px; height: 100px;"> </td>
                                    <td>
                                        <div><a href="{{ route('companies.edit',['company'=>$company]) }}" class="btn btn-primary"> EDIT </a></div>
                                        <div>
                                            <form action="{{ route('companies.destroy',['company'=>$company]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                    </tbody>
                </table>

                {{ $companies->links() }}

                @else
                    No companies in DB yet
                @endif

            </div>
        </div>
    </div>

@endsection
