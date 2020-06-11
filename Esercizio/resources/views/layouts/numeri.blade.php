@extends('welcome');


@section('content')

  {{-- pagina numeri --}}

  <div class="content">
    <div class="row">

      @foreach ($numbers as $value)

        <div class="number">

          <p> {{ $value }} </p>

        </div>


      @endforeach


    </div>
    <a href="/">PAGINA INIZIALE</a>
  </div>
@endsection
