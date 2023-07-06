<x-layout>
    <h1>Detalle</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    @if ($ad->image)
                    <img src="{{ asset('storage/images/' . $ad->image) }}" class="card-img-top" alt="Anuncio" height="600px" width="100%">
                @else
                    <img src="{{ asset('images/birras.jpeg') }}
                    " class="card-img-top" alt="Imagen de relleno">
                @endif



                    <div class="card-body">
                        <h5 class="card-title">{{ $ad->title }}</h5>
                        <p class="card-text">{{ $ad->body }}</p>
                        <p class="card-text">Precio: ${{ $ad->price }}</p>
                        <p class="card-text">Categoría:
                            @if ($ad->category)
                                <a href="{{ route('ads.category', ['category' => $ad->category->name]) }}">{{ $ad->category->name }}</a>
                            @else
                                Sin categoría
                            @endif
                        </p>
                        <p class="card-text">Fecha de creación: {{ $ad->created_at }}</p>
                        <p class="card-text">Usuario: {{ $ad->user->name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
