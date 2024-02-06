@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')

        @foreach ($events as $event)
            <p>Evento: {{ $event->title }}</p>
            <p>Descrição: {{ $event->description }}</p>
            <br>
        @endforeach
      
@endsection
 {{-- Parei nesta aula: https://www.youtube.com/watch?v=O0enF2nVBNE&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=10 --}}