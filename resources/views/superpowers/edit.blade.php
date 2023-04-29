@extends('layouts.master')

@section('content')

    <div class="container">

        <form action="{{ route('superpowers.update', $superpower->id) }}" method="post">
            @method('put')
            @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name *</label>
                    <input type="text" name="name" class="form-control form-control-lg" value="{{ $superpower->name }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="description" name="description" class="form-control form-control-lg" cols="50" rows="5">{{ $superpower->description }}</textarea>
                </div>
                
                <div class=" col text-end">
                <br><button  type="submit" class="btn btn-danger btn-lg btn-block">Edit Superpower</button> <br>
                </div>

        </form>

    </div>

    
</body>
</html>

@endsection