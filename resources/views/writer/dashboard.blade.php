<x-layout>
    <div class="container-fluid p-5 display-header text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-uppercase">Bentornato, Redattore {{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli in attesa di revisione</h2>
                <x-writer-articles-table :articles="$unrevisionedAericles" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli pubblicati</h2>
                <x-writer-articles-table :articles="$acceptedAericles" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli respinti</h2>
                <x-writer-articles-table :articles="$rejectedAericles" />
            </div>
        </div>
    </div>
</x-layout>
