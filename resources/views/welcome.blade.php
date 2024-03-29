@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
        <div id="search-container" class="col-md-12">
            <h1>Busque um evento</h1>
            <form action="">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
            </form>
        </div>
        <div id="events-container" class="cold-md-12">
            <h2>Próximos eventos</h2>
            <p  class="subtitle">Veja os eventos dos próximos dias</p>
            <div id="cards-container" class="row">
                @foreach ($events as $event)
                    <div class="card col-md-3 p-0">
                        <img src="images/events/{{$event->image}}" alt=" {{ $event->title }}">
                        <div class="card-body">
                            <p class="card-date">10/09/2020</p>
                            <h5 class="card-title"> {{ $event->title }}</h5>
                            <p class="card-participantes">X participantes</p>
                            <a href="/events/{{ $event->id }}" class="btn btn-primary"> Saber mais</a>
                        </div>
                    </div>
                @endforeach
            </div>        
        </div>
@endsection
 {{-- Parei nesta aula: https://www.youtube.com/watch?v=O0enF2nVBNE&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=10 --}}