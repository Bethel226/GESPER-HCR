@extends('layouts.main')
@section('contenu')


<body onload="window.print()">

<h1 class="text-center mb-5">Détail Du Personnel{{$finds->id}} </h1>

<div class="card" style="width: 30rem; mt-5 ">

       <h5 class="card-title ">Carte du personnel</h5>
            <div class="card mb-3" style="max-width: 540px; ">
                <div class="row g-0">
                    <div class="col-md-4">
                         <img src="{{ asset('storage').'/'.$finds->photo }}" style="width:150px;height:200px;" class="card-img-top mt-5" alt="...">
                    </div>
                    <div class="col-md-4 mt-5 m-5">
                         <p class="card-title">Nom:{{ $finds->nom }}</p>
                         <p class="card-title">Prenom:{{ $finds->prenom }}</p>
                         <p class="card-title">Genre:{{ $finds->genre }}</p>
                         <p class="card-title">Titre:{{ $finds->titre }}</p>
                         <p class="card-title">Poste:{{ $finds->poste }}</p>
                         <p class="card-title">Matricule:{{ $finds->matricule }}</p>
                    <div class="card-body">
                </div>
            </div>
            <div style='text-align: center;'>
  <img alt='Barcode Generator TEC-IT'
       src='https://barcode.tec-it.com/barcode.ashx?data=ABC-abc-1234&code=Code128&translate-esc=on'/>
</div>

</body>
@endsection


