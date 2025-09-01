@extends('layouts.app')

@section('title', ($title ?? 'Recette') . ' – KiM')
@section('meta_description','Étapes, temps, ingrédients et substitutions.')

@section('content')
<header id="top" class="site-header">
  <div class="container">
    <div class="navbar">
      <a href="{{ url('/') }}" class="brand"><span class="logo">KiM</span><span>Kossà I Mange</span></a>
      <nav><ul><li><a href="{{ route('recipes.index') }}">Recettes</a></li><li><a href="{{ route('contact.show') }}">Contact</a></li></ul></nav>
    </div>
  </div>
</header>

<main>
  <section class="section">
    <div class="container">
      <a href="{{ url()->previous() }}" class="meta" style="text-decoration:none">← Retour</a>
      <h1 style="margin-top:8px">{{ $title ?? 'Curry de légumes' }}</h1>
      <p class="meta">{{ $time ?? 35 }} min • {{ $difficulty ?? 'Facile' }} • {{ $servings ?? 4 }} portions</p>

      <div class="grid" style="grid-template-columns:1fr 1fr;gap:20px">
        <div class="card" style="grid-column:span 1">
          <img class="thumb" src="https://placehold.co/1000x600?text={{ urlencode($title ?? 'Recette') }}" alt="{{ $title ?? 'Image recette' }}">
          <div class="card-body">
            <h3>Ingrédients</h3>
            <ul class="meta">
              <li>2 carottes</li>
              <li>1 oignon</li>
              <li>200 g de lentilles</li>
              <li>Épices au goût</li>
            </ul>
          </div>
        </div>
        <div class="card" style="grid-column:span 1">
          <div class="card-body">
            <h3>Étapes</h3>
            <ol class="meta">
              <li>Émincer l’oignon et couper les carottes.</li>
              <li>Faire revenir, ajouter les lentilles, couvrir d’eau.</li>
              <li>Laisser mijoter {{ $time ?? 35 }} min, assaisonner.</li>
            </ol>
            <button class="cta-large" style="margin-top:12px">Ajouter à mon plan</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<footer class="container">
  <div class="foot">
    <div style="display:flex;align-items:center;gap:10px">
      <span class="logo">KiM</span>
      <small>© <span id="y"></span> – Kossà I Mange</small>
    </div>
    <small><a href="{{ route('recipes.index') }}">Recettes</a> • <a href="{{ route('contact.show') }}">Contact</a></small>
  </div>
</footer>
@endsection
