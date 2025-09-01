<header id="top" class="site-header">
  <div class="container">
    <div class="navbar">
      <a href="{{ url('/') }}" class="brand" aria-label="Accueil KiM">
        <span class="logo">KiM</span><span>Kossà I Mange</span>
      </a>

      <nav aria-label="Navigation principale">
        <ul>
          <li><a href="{{ route('about.show') }}">À propos</a></li>
          <li><a href="{{ route('recipes.index') }}" id="nav-recettes">Recettes</a></li>
          <li><a href="{{ route('contact.show') }}">Contact</a></li>
        </ul>
      </nav>

      <div style="display:flex;align-items:center;gap:8px">
        {{-- Ce bouton peut scroller vers la section de la HOME uniquement --}}
        <button id="ctaRecipes" class="cta-small" type="button">Voir les recettes</button>
        <button class="menu-btn" aria-label="Ouvrir le menu" id="menuBtn">…</button>
      </div>
    </div>

    {{-- Menu mobile : liens VERS les pages, pas d’ancre ni d’onclick --}}
    <div class="mobile-panel" id="mobilePanel" role="dialog" aria-label="Menu mobile">
      <div class="container" style="padding:0">
        <a href="{{ route('about.show') }}">À propos</a>
        <a href="{{ route('recipes.index') }}">Recettes</a>
        <a href="{{ route('contact.show') }}">Contact</a>
      </div>
    </div>
  </div>
</header>
