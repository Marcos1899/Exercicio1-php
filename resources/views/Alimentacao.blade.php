
@extends('Layout.principal')

@section('conteudo-principal')

  <h1 class="text-center bg-slate-200 text-2xl py-3 font-mono ">
    Dietas calculadas do Marcos
  </h1>
  <h2 class=" bg-slate-400 text-neutral-800">Lanche da Manhã:</h2>
  <ol class="list-decimal ml-8">
    @forelse ($lancheManha as $lancheManha)
      <li>{{$lancheManha}}</li>
    @empty
      <li>Não existe alimentação cadastrada</li>
    @endforelse
  </ol>

  <h2 class=" bg-slate-400 text-neutral-800">Almoço:</h2>
  <ol class="list-decimal ml-8">
    @forelse ($almoco as $almoco)
      <li>{{$almoco}}</li>
    @empty
      <li>Não existe alimentação cadastrada</li>
    @endforelse
  </ol>

  <h2 class="bg-slate-400 text-neutral-800">Lanche da Tarde:</h2>
  <ol class="list-decimal ml-8">
    @forelse ($lancheTarde as $lancheTarde)
      <li>{{$lancheTarde}}</li>
    @empty
      <li>Não existe alimentação cadastrada</li>
    @endforelse
  </ol>

  <h2 class="bg-slate-400 text-neutral-800">Janta:</h2>
  <ol class="list-decimal ml-8">
    @forelse ($janta as $janta)
      <li>{{$janta}}</li>
    @empty
      <li>Não existe alimentação cadastrada</li>
    @endforelse
  </ol>

  <h2 class="bg-slate-400 text-neutral-800">Lanche Noturno:</h2>
  <ol class="list-decimal ml-8">
    @forelse ($lancheNoturno as $lancheNoturno)
      <li>{{$lancheNoturno}}</li>
    @empty
      <li>Não existe alimentação cadastrada</li>
    @endforelse
  </ol>

@endsection
