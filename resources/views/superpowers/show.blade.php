@extends('layouts.master')

@section('content')

    <div class="container">

    
    <h1 class="text-center">{{ $superpowers->name }}</h1>
    <p>{{ $superpowers->description }}</p><br>

    </div>
    @section('botones')

    <div class="col text-end">
        <a href="{{ route('superpowers.edit', $superpowers->id) }}" class="btn btn-warning btn-lg btn-block">Edit superpower</a> <br>
    </div><br>

    <form action="{{ route('superpowers.destroy', $superpowers->id) }}" method="post">
                @method('delete')
                @csrf

                 <div class="col text-end">
                <!---- <input type="hidden" name=""> ---->
                <button class="btn btn-danger btn-lg btn-block" type="submit" onclick="return confirm('Are you sure you want to delete this record?')">Delete superpower</button>
                </div><br>
    </form>
    @endsection
 
</body>
</html>

@endsection