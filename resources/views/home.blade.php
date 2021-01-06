@extends('layouts.main')

@section('content')


@include( 'partials.cards', ['cards' => $lunghe, 'title' => 'LE LUNGHE'] ) ;
@include( 'partials.cards', ['cards' => $corte, 'title' => 'LE CORTE'] ) ;
@include( 'partials.cards', ['cards' => $cortissime, 'title' => 'LE CORTISSIME'] ) ;


{{--
@if(! empty($lunghe))  --}}
{{-- <-- usiamo questa condizione se decidiamo di eliminare temporanemente o permanentemente una delle categorie nel FOREACH che abbiamo fatto nel web.php  --}}

{{-- <section class="type-section container">
    <h2>Le Lunghe</h2>
        <div class="cards">
            @foreach ($lunghe as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3>{{ $card['titolo'] }}</h3>
                <h4> {{ $card['id'] }} </h4> {{-- <--posizione --}}
                {{-- <a href="{{ route('product', $card['id']),  }}">Vedi prodotto</a> <-- con questa rotta entriamo nel prodotto creando un url specifica di prodotto --}}
            {{-- </div>
            @endforeach
        </div>
</section> --}}

{{-- @endif --}}

{{-- @if(! empty($corte)) --}}

{{-- <section class="type-section container">
    <h2>Le Corte</h2>
        <div class="cards">
            @foreach ($corte as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3>{{ $card['titolo'] }}</h3>
                <h4> {{ $card['id'] }} </h4>
                <a href="#">Vedi prodotto</a>
            </div>
            @endforeach
        </div>
</section>

@endif --}}

{{-- @if(! empty($cortissime))
<section class="type-section container">
    <h2>Le Cortissime</h2>
        <div class="cards">
            @foreach ($cortissime as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3>{{ $card['titolo'] }}</h3>
                <h4> {{ $card['id'] }} </h4>
                <a href="#">Vedi prodotto</a>
            </div>
            @endforeach
        </div>
</section>

@endif --}}

{{-- <section class="container">
        <div class="cards">
            @foreach ($cards as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3>{{ $card['titolo'] }}</h3>
                <a href="#">Vedi prodotto</a>
            </div>
            @endforeach
        </div>
    </section> --}}

@endsection
