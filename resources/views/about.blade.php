@extends('layouts.app')

@section('title','À propos – KiM')
@section('meta_description','Notre mission : moins de gaspillage, plus de partage, cuisine solidaire.')

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
      <h1>À propos</h1>
      <p class="meta">Moins de gaspillage, plus de partage.</p>

      <div class="info-stripe">
        <article class="info">
          <h3>Notre mission</h3>
          <p>Proposer des recettes adaptées à ce que vous avez et transformer les invendus en repas solidaires.</p>
        </article>
        <article class="info">
          <h3>L’association</h3>
          <p>Collecte, tri et planification de repas. Bénévoles bienvenus pour la préparation et la distribution.</p>
        </article>
        <article class="info">
          <h3>Impact</h3>
          <p><strong>Objectifs :</strong> kg sauvés, repas servis, CO₂ évité. Suivi transparent et régulier.</p>
        </article>
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
