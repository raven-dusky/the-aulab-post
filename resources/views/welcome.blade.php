<x-layout>
    <div class="container-fluid p-5 text-center display-header">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-uppercase">The Aulab Post</h1>
                <h2 class="fst-italic">I nostri ultimi articoli</h2>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if (session('alert'))
        <div class="alert alert-danger">
            {{ session('alert') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-evenly">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4">
                <x-article-card :article="$article" />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
