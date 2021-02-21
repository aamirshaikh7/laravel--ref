@extends ('layout')

@section ('content')
    <div class="pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form method="POST" action="{{ route('tasks.store') }}">
                        @csrf

                        <h2 class="text-uppercase pb-4">Add Task</h2>
                        <div class="form-group pb-2">
                            <label for="title"><h5 class="text-uppercase">Title</h5></label>
                            <input type="text" class="@error ('title') border-danger @enderror border rounded form-control" name="title" value="{{ old('title') }}" />
                            
                            @error ('title')
                                <p class="text-danger mt-1">{{ $errors->first('title') }}</p>
                            @enderror
                        </div>
                        <div class="form-group pb-2">
                            <label for="due"><h5 class="text-uppercase">Due date</h5></label>
                            <input type="date" class="@error ('due') border-danger @enderror border rounded form-control" name="due" value="{{ old('due') }}">
                            @error ('due')
                                <p class="text-danger mt-1">{{ $errors->first('due') }}</p>
                            @enderror
                        </div>
                        <div class="form-group text-left"><button class="btn btn-primary text-uppercase text-right bg-dark border rounded" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection