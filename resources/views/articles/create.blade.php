@extends ('layout')

@section ('content')
    <div class="pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form method="POST" action="/articles">
                        @csrf

                        <h2 class="text-uppercase pb-4">Add Article</h2>
                        <div class="form-group pb-2"><label for="title"><h5 class="text-uppercase">Title</h5></label><input type="text" class="border rounded form-control" name="title" placeholder="Title" /></div>
                        <div class="form-group pb-2"><label for="body"><h5 class="text-uppercase">Body</h5></label><textarea class="border rounded form-control" name="body" placeholder="Body..." rows="5"></textarea></div>
                        <div class="form-group pb-2"><label for="author"><h5 class="text-uppercase">Author</h5></label><input type="text" class="border rounded form-control" name="author" placeholder="Author" /></div>
                        <div class="form-group text-left"><button class="btn btn-primary text-uppercase text-right bg-dark border rounded" type="submit">Submit</button></div>
                    </form>
                </div>
        </div>
    </div>
@endsection