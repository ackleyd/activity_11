@extends('layouts.master')

@section('content')

<div class="container">

    <h1 class="text-center">{{ $parents->name }}</h1>
    <p>{{ $parents->gender }}</p>

</div>

    @section('botones')

    <div class="col text-end">
        <a href="{{ route('parents.edit', $parents->id) }}" class="btn btn-warning btn-lg btn-block">Edit Parent</a> <br>
    </div><br>

    <form action="{{ route('parents.destroy', $parents->id) }}" method="post">
                @method('delete')
                @csrf

                 <div class="col text-end">
                <!---- <input type="hidden" name=""> ---->
                <button class="btn btn-danger btn-lg btn-block" type="submit" onclick="return confirm('Are you sure you want to delete this record?')">Delete Parent</button>
                </div><br>
    </form>
    @endsection

</body>
</html>

@endsection