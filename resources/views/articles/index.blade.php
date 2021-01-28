@extends ('layout')

@section ('content')
    <div class="pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    @foreach ($articles as $article)
                        <div class="pb-2">
                            <h2 class="text-uppercase"><a href="{{ $article->path() }}">{{ $article->title }}</a></h2>
                            <p>{{ $article->body }}</p>
                            <p>- {{ $article->author }}</p>
                        </div>
                        <hr>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
@endsection