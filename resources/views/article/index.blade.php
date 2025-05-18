<x-layout>
    <div class="container-fluid p-5 display-header text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-uppercase">Tutti gli articoli</h1>
            </div>
        </div>
    </div>
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
