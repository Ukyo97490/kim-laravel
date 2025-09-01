@extends('layouts.app')

@section('title','Recettes – KiM')
@section('meta_description','Liste des recettes adaptées à vos ingrédients.')

@section('content')
<header id="top" class="site-header">
  <div class="container">
    <div class="navbar">
      <a href="{{ url('/') }}" class="brand"><span class="logo">KiM</span><span>Kossà I Mange</span></a>
      <nav><ul><li><a href="{{ route('about.show') }}">À propos</a></li><li><a href="{{ route('contact.show') }}">Contact</a></li></ul></nav>
    </div>
  </div>
</header>

<main>
  <section class="hero">
    <div class="container">
      <h1>Recettes</h1>
      <p class="meta">Filtre rapide : ingrédients, temps, difficulté.</p>

      <form class="search-card" method="GET" action="{{ route('recipes.index') }}">
        <div class="chips" id="chips">
          <input id="ingInput" type="text" name="q" value="{{ request('q') }}" placeholder="Ex : tomates, œufs, pâtes…">
        </div>
        <div class="filters" style="margin: 8px 0 16px">
          <div class="range">
            <label for="timeRange">Temps max (min)</label>
            <output id="timeOut">{{ request('t', 30) }}</output>
            <input id="timeRange" type="range" min="5" max="120" step="5" value="{{ request('t', 30) }}" name="t">
          </div>
          <div class="range">
            <label for="diffRange">Difficulté</label>
            <output id="diffOut">Facile</output>
            <input id="diffRange" type="range" min="1" max="3" step="1" value="{{ request('d', 1) }}" name="d">
          </div>
        </div>
        <button class="cta-large" id="goBtn" type="submit">Filtrer</button>
      </form>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="grid" role="list">
        @foreach(range(1,9) as $i)
          <article class="card" role="listitem">
            <a href="{{ route('recipes.show', ['slug'=>'recette-'.$i]) }}" style="text-decoration:none;color:inherit">
              <img class="thumb" src="https://placehold.co/800x500?text=Recette+{{ $i }}" alt="Image recette {{ $i }}">
              <div class="card-body">
                <div class="row">
                  <span class="title">Recette {{ $i }}</span>
                  <span class="meta">{{ 10+$i }} min • Facile</span>
                </div>
              </div>
            </a>
          </article>
        @endforeach
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
    <small><a href="{{ route('about.show') }}">À propos</a> • <a href="{{ route('contact.show') }}">Contact</a></small>
  </div>
</footer>
@endsection
