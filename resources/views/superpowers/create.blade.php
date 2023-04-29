@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-container-center">
            <div class="col-12 col-md-9 col-lg-6">
                
                <form action="{{ route('superpowers.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="name">Name *</label><br>
                        <input type="text" name="name">
                    </div>
            
                    <div class="mb-3">
                        <label class="mb-3">Description</label> <br>
                        <textarea name="description" cols="50" rows="5"></textarea>
                    </div><br>

                    <div class="col text-end">
                        <button type="submit" class="btn btn-primary btn-lg">Create Superpower</button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</body>
</html>

@endsection