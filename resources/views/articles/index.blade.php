@extends ('layout')

@section ('content')
    <div class="pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

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