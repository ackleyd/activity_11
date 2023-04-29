@extends('layouts.master')

@section('content')
    
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr class="table-primary">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                </tr>
            </thead>

            <tbody>
                @forelse($parents as $parent)
                    <tr>
                        <td>{{ $parent->id }}</td>
                        <td>
                            <a href="{{  route('parents.show', $parent->id) }}">{{ $parent->name }}</a>
                        </td>
                        <td>{{ $parent->gender }}</td>
                    </tr>
                @empty
                    <p>There's no parent registers under this user...</p>
                @endforelse
            </tbody>
        </table>

        @section('botones')
        <div class=" col text-end">
            <br><a href=" {{ route('parents.create') }}" class="btn btn-danger btn-lg btn-block">Create Parent</a>
        </div>
        @endsection

    </div>    
    </body>
</html>

@endsection