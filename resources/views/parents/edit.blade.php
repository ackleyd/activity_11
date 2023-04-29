@extends('layouts.master')

@section('content')

    <form action="{{  route('parents.update', $parent->id) }}" method="post">
        @method('put')
        @csrf
        <label for="name" class="form-label">Name *</label>
        <input type="text" name="name" class="form-control form-control-lg" value="{{ $parent->name }}">

        <br><label for="gender" class="form-label">Gender</label><br>
        <select name="gender" class="form-control form-control-lg">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="NA">NA</option>
        </select>

        <br><br>
        <button type="submit" class="btn btn-warning btn-lg btn-block">Edit Parent</button>
    </form>

</body>
</html>

@endsection