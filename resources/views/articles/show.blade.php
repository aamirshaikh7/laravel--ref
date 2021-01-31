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
                        @else
                            <h2 class="text-uppercase">Article not found !</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection