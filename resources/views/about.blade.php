@extends ('layout')

@section ('content')
    <div class="pb-3 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <h2>Welcome to LaraBlog</h2>
                    <p>MAURIS VULPUTATE DOLOR SIT AMET NIBH</p>
                    <p>Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit. Suspendisse iaculis mauris nec lorem. Donec leo. Vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. Nulla enim eros, porttitor eu, tempus id, varius non, nibh.</p>
                    <p>Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo.</p>
                    <p>Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo.</p>
                </div>
                <div class="col-sm-12 col-lg-6 pl-5 pt-5">

                    @foreach ($articles as $article)
                        <div class="pb-2">
                            <h2 class="text-uppercase"><a href="">{{ $article->title }}</a></h2>
                            <p>{{ $article->body }}</p>
                            <p>- {{ $article->author }}</p>
                        </div>
                        <hr>
                    @endforeach

                    <div class="pt-4">
                        <h2 class="text-uppercase">Tags</h2>
                        <p><a href="#" style="font-size: 16px;">An example of a post bla bla bla..</a></p>
                        <p><a href="#" style="font-size: 16px;">An example of a post bla bla bla..</a></p>
                        <p><a href="#" style="font-size: 16px;">An example of a post bla bla bla..</a></p>
                        <p><a href="#" style="font-size: 16px;">An example of a post bla bla bla..</a></p>
                        <p><a href="#" style="font-size: 16px;">An example of a post bla bla bla..</a></p>
                        <p><a href="#" style="font-size: 16px;">An example of a post bla bla bla..</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 pt-2">
                    <div>
                        <h2 class="text-uppercase">Heading</h2>
                        <p><a href="#" style="font-size: 16px;">An example of a post bla bla bla..</a></p>
                    </div>
                    <hr>
                    <div class="pt-2">
                        <h2 class="text-uppercase">Heading</h2>
                        <p><a href="#" style="font-size: 16px;">An example of a post bla bla bla..</a></p>
                    </div>
                    <hr>
                    <div class="pt-2">
                        <h2 class="text-uppercase">Heading</h2>
                        <p style="font-size: 16px;"><a href="#" style="font-size: 20px;">An example of a post bla bla bla..</a></p>
                    </div>
                    <hr>
                    <div class="pt-2">
                        <h2 class="text-uppercase">Heading</h2>
                        <p><a href="#" style="font-size: 16px;">An example of a post bla bla bla..</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection