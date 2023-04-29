@extends('layouts.master')

@section('content')



    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr class="table-primary">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>

            <tbody>
            @forelse($superpowers as $superpower)
                <tr>
                    <td>{{ $superpower->id }}</td>
                    <td>
                        <a href="{{ route('superpowers.show', $superpower->id) }}">{{ $superpower->name}}</a>
                    </td>
                    <td>{{ $superpower->description }}</td>
                </tr>
                    @empty
                    <p>There're no superpowers</p>
                    @endforelse
            </tbody>
        </table>

        @section('botones')
        <div class=" col text-end">
            <br><a href="{{ route('superpowers.create') }}" class="btn btn-danger btn-lg btn-block">Create Superpower</a><br>
        </div>
        @endsection

    </div>
</body>
</html>


@endsection