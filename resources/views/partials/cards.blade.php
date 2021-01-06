@if(! empty($cards)) {{-- <-- usiamo questa condizione se decidiamo di eliminare temporanemente o permanentemente una delle categorie nel FOREACH che abbiamo fatto nel web.php  --}}

<section class="type-section container">

    <h2>{{$title}}</h2>

        <div class="cards">
            @foreach ($cards as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3>{{ $card['titolo'] }}</h3>
                <h4> {{ $card['id'] }} </h4> {{-- <--posizione --}}
                <a href="{{ route('product', $card['id']),  }}">Vedi prodotto</a> {{-- <-- con questa rotta entriamo nel prodotto creando un url specifica di prodotto --}}
            </div>
            @endforeach
        </div>
</section>

@endif
