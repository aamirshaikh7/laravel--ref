@extends ('layout')

@section ('content')
    <div class="pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-flex justify-content-end pb-4">
                        <a class="btn btn-primary" href="{{ route('articles.create') }}" role="button">Add Article</a>
                    </div>

                    @if (request('author'))
                        <div class="pb-4">
                            <h3>Author : <strong>{{ request('author') }}</strong></h3>
                        </div>
                    @elseif (request('tag'))
                        <div class="pb-4">
                            <h3>Tag : <strong>{{ request('tag') }}</strong></h3>
                        </div>
                    @endif

                    @forelse ($articles as $article)
                        <div class="pb-2">
                            <h2 class="text-uppercase"><a href="{{ $article->path() }}">{{ $article->title }}</a></h2>
                            <p>{{ $article->body }}</p>
                        </div>
                        <hr>
                    @empty
                        <h2 class="text-uppercase">No Articles yet !</h2>
                    @endforelse
                    
                </div>
            </div>
        </div>
    </div>
@endsection