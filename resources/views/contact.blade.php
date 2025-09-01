@extends('layouts.app')

@section('title','Contact – KiM')
@section('meta_description','Contactez l’équipe KIM – Kossà I Mange.')

@section('content')
<header id="top" class="site-header">
  <div class="container">
    <div class="navbar">
      <a href="{{ url('/') }}" class="brand"><span class="logo">KiM</span><span>Kossà I Mange</span></a>
      <nav><ul><li><a href="{{ route('about.show') }}">À propos</a></li><li><a href="{{ route('recipes.index') }}">Recettes</a></li></ul></nav>
    </div>
  </div>
</header>

<main>
  <section class="hero">
    <div class="container">
      <h1>Contact</h1>
      <p class="meta">Une question, une idée, un don ? Écris-nous.</p>

      <form class="search-card" method="POST" action="#">
        @csrf
        <div class="filters" style="grid-template-columns:1fr 1fr">
          <div>
            <label for="name">Nom</label>
            <input id="name" name="name" type="text" placeholder="Votre nom">
          </div>
          <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="vous@exemple.com">
          </div>
        </div>
        <div style="margin-top:10px">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="6" style="width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:10px"></textarea>
        </div>
        <button class="cta-large" style="margin-top:12px" type="submit">Envoyer</button>
      </form>
    </div>
  </section>
</main>

<footer class="container">
  <div class="foot">
    <div style="display:flex;align-items:center;gap:10px">
      <span class="logo">KiM</span>
      <small>© <span id="y"></span> – Kossà I Mange</small>
    </div>
    <small><a href="{{ route('about.show') }}">À propos</a> • <a href="{{ route('recipes.index') }}">Recettes</a></small>
  </div>
</footer>
@endsection
