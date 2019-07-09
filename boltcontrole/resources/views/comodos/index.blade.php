@extends('principal')


@section('Numero de comodos')


  div class="container">
   <div class="table-responsive">

   <table class="table">
   <thead>
     <tr>
       <th>Id do Comodo:</th>
       <th>Nome do Comodo:</th>
     </tr>

   </thead>
   <tbody>
     @foreach ($comodo as $c)
       <tr>
         <td>{{ $c->id }}</td>
         <td>{{  $c->nome}}</td>
         {{-- <td><a href="{{ route('procedures.show', $e->id) }}">{{ $e->name }}</a></td> --}}

        </tr>
     @endforeach

   </tbody>
   </table>
   </div>
   </div>






@endsection
