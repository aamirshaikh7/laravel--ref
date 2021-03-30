@extends ('layout')

@section ('content')
    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col">
                <h2>Subscribe</h2>
                <p>Get the latest course link</p>
                <form class="pt-4" method="POST" action="{{ route('subscribe.store') }}">
                    @csrf

                    <div class="form-group">
                        <input class="border rounded border-dark form-control" type="text" name="name" placeholder="Name" style="background: rgba(255,255,255,0);" value="{{ old('name') }}" />

                        @error ('name')
                            <p class="text-danger mt-1">{{ $errors->first('name') }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="border rounded border-dark form-control" name="email" placeholder="E-mail" style="background: rgba(255,255,255,0);" value="{{ old('email') }}" />

                        @error ('email')
                            <p class="text-danger mt-1">{{ $errors->first('email') }}</p>
                        @enderror

                        @if (session('message'))
                            <p class="text-success mt-1">{{ session('message') }}</p>
                        @endif
                    </div>
                    <div class="form-group text-right">
                        <div class="form-group">
                            <button class="btn btn-primary text-right border rounded text-uppercase" type="submit">subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection