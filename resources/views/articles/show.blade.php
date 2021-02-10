@extends ('layout')

@section ('content')
    <div class="pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 pt-2">
                    <div>
                        @if ($article)
                            <h2 class="text-uppercase">{{ $article->title }}</h2>
                            <p>{{ $article->body }}</p>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-primary" href="{{ route('articles.edit', $article) }}" role="button">Edit</a>
                            </div>
                            <p>
                                @foreach ($article->tags as $tag)
                                    <a class="pr-2" href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
                                @endforeach
                            </p>
                        @else
                            <h2 class="text-uppercase">Article not found !</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection