@extends('layouts.app')

@section('title','KiM – Compose avec ce que tu as')

@section('content')
  <!-- =================== HEADER =================== -->
  <header id="top" class="site-header">
    <div class="container">
      <div class="navbar">
        <a href="{{ url('/') }}" class="brand" aria-label="Accueil KiM">
          <span class="logo">KiM</span>
          <span>Kossà I Mange</span>
        </a>
        <nav aria-label="Navigation principale">
          <ul>
            <li><a href="#apropos">À propos</a></li>
            <li><a href="#recettes">Recettes</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
        <div style="display:flex; align-items:center; gap:8px">
          <button id="ctaRecipes" class="cta-small">Voir les recettes</button>
          <button class="menu-btn" aria-label="Ouvrir le menu" id="menuBtn">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#111827" stroke-width="2" stroke-linecap="round"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
          </button>
        </div>
      </div>

      <!-- Mobile menu -->
      <div class="mobile-panel" id="mobilePanel" role="dialog" aria-label="Menu mobile">
        <div class="container" style="padding:0">
          <a href="#apropos" onclick="scrollToId('apropos')">À propos</a>
          <a href="#recettes" onclick="scrollToId('recettes')">Recettes</a>
          <a href="#contact" onclick="scrollToId('contact')">Contact</a>
        </div>
      </div>
    </div>
  </header>

  <!-- =================== HERO =================== -->
  <main>
    <section class="hero">
      <div class="container">
        <div class="hero-grid">
          <!-- Colonne gauche -->
          <div>
            <span class="eyebrow">
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 21c14 0 14-14 14-14S7 7 5 21Zm0 0c0-4 2-6 6-6"/></svg>
              anti-gaspillage & solidaire
            </span>
            <h1>Compose <span style="color:var(--red)">avec ce que tu as</span></h1>
            <p>Indique les ingrédients présents dans ton placard/frigo et on te propose des idées de plats. Moins de gaspillage, plus de partage.</p>

            <div class="search-card" role="search" aria-label="Trouver des recettes">
              <label for="ingInput" style="font-weight:700; font-size:14px; color:#374151">Ingrédients</label>
              <div class="chips" id="chips" aria-live="polite">
                <input id="ingInput" type="text" placeholder="Ex : tomates, œufs, pâtes…" aria-label="Ajouter un ingrédient (Entrée pour valider)" />
              </div>

              <div class="filters" style="margin: 8px 0 16px">
                <div class="range">
                  <label for="timeRange" style="font-weight:700; color:#374151">Temps max (min)</label>
                  <output id="timeOut">30</output>
                  <input id="timeRange" type="range" min="5" max="120" step="5" value="30" aria-label="Temps maximum">
                </div>
                <div class="range">
                  <label for="diffRange" style="font-weight:700; color:#374151">Difficulté</label>
                  <output id="diffOut">Facile</output>
                  <input id="diffRange" type="range" min="1" max="3" step="1" value="1" aria-label="Difficulté">
                </div>
              </div>

              <button class="cta-large" id="goBtn">
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"></circle><path d="m21 21-4.3-4.3"></path></svg>
                Voir les recettes adaptées
              </button>

              <p style="margin:10px 0 0; color:#6b7280; font-size:12px">
                Conseil : tape un ingrédient puis <strong>Entrée</strong> pour l’ajouter. Clique sur une pastille pour la retirer.
              </p>
            </div>
          </div>

          <!-- Colonne droite : Suggestions -->
          <aside aria-label="Suggestions du jour">
            <div class="section" style="padding-top:0">
              <h2 style="margin-bottom:10px">Suggestions rapides</h2>
              <div class="grid">
                <article class="card">
                  <img class="thumb" src="https://images.unsplash.com/photo-1523986371872-9d3ba2e2f642?q=80&w=1200&auto=format&fit=crop" alt="Gratin de pâtes doré au four">
                  <div class="card-body">
                    <div class="row">
                      <span class="title">Gratin de pâtes</span>
                      <span class="badge">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20l9-16H3z"/></svg>
                        100% dispo
                      </span>
                    </div>
                    <div class="meta"><span>30 min</span> • <span>Facile</span></div>
                  </div>
                </article>

                <article class="card">
                  <img class="thumb" src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1200&auto=format&fit=crop" alt="Salade de riz colorée">
                  <div class="card-body">
                    <div class="row">
                      <span class="title">Salade de riz</span>
                      <span class="badge">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15A8 8 0 1 1 15 4.6"/></svg>
                        Manque 1
                      </span>
                    </div>
                    <div class="meta"><span>15 min</span> • <span>Facile</span></div>
                  </div>
                </article>

                <article class="card">
                  <img class="thumb" src="https://images.unsplash.com/photo-1512058564366-18510be2db19?q=80&w=1200&auto=format&fit=crop" alt="Curry de légumes en cocotte">
                  <div class="card-body">
                    <div class="row">
                      <span class="title">Curry de légumes</span>
                      <span class="badge">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m5 12 5 5L20 7"/></svg>
                        Anti-gaspi
                      </span>
                    </div>
                    <div class="meta"><span>40 min</span> • <span>Intermédiaire</span></div>
                  </div>
                </article>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <!-- =================== HIGHLIGHTS =================== -->
    <section id="apropos" class="section">
      <div class="container">
        <h2>Pourquoi KiM ?</h2>
        <div class="info-stripe">
          <div class="info">
            <span class="badge" style="background:rgba(46,125,50,.1); color:#1f4d22">
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4h6l2 2h2a4 4 0 0 1 4 4z"/></svg>
              Moins de gaspillage
            </span>
            <h3>Valorise ce que tu as déjà</h3>
            <p>Le moteur propose des recettes adaptées à ton placard, avec substitutions intelligentes et priorité aux produits proches de la date.</p>
          </div>
          <div class="info">
            <span class="badge">
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20l9-16H3z"/></svg>
              Cuisine solidaire
            </span>
            <h3>Des repas pour ceux qui en ont besoin</h3>
            <p>Les dons et invendus sont transformés en repas par l’association partenaire. Chaque action compte.</p>
          </div>
          <div class="info">
            <span class="badge" style="background:rgba(255,179,0,.18); color:#7a4c00">
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 6v12M6 12h12"/></svg>
              Simple & rapide
            </span>
            <h3>Filtre par temps et niveau</h3>
            <p>Du “vite fait” au batch-cooking du week-end, ajuste la durée, la difficulté et les ustensiles.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- =================== LIST PREVIEW =================== -->
    <section id="recettes" class="section">
      <div class="container">
        <h2>Recettes populaires</h2>
        <div class="grid" role="list">
          <article class="card" role="listitem">
            <img class="thumb" src="https://images.unsplash.com/photo-1514512364185-4c2b2b3f1a3a?q=80&w=1200&auto=format&fit=crop" alt="Soupe à l’oignon gratinée">
            <div class="card-body"><div class="row"><span class="title">Soupe à l’oignon</span><span class="meta">25 min • Facile</span></div></div>
          </article>
          <article class="card" role="listitem">
            <img class="thumb" src="https://images.unsplash.com/photo-1546069901-5ec6a79120b0?q=80&w=1200&auto=format&fit=crop" alt="Omelette dorée">
            <div class="card-body"><div class="row"><span class="title">Omelette express</span><span class="meta">10 min • Facile</span></div></div>
          </article>
          <article class="card" role="listitem">
            <img class="thumb" src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?q=80&w=1200&auto=format&fit=crop" alt="Pâtes tomate basilic">
            <div class="card-body"><div class="row"><span class="title">Pâtes tomate basilic</span><span class="meta">18 min • Facile</span></div></div>
          </article>
          <article class="card" role="listitem">
            <img class="thumb" src="https://images.unsplash.com/photo-1496116218417-1a781b1c416c?q=80&w=1200&auto=format&fit=crop" alt="Lentilles aux carottes">
            <div class="card-body"><div class="row"><span class="title">Lentilles carottes</span><span class="meta">40 min • Intermédiaire</span></div></div>
          </article>
          <article class="card" role="listitem">
            <img class="thumb" src="https://images.unsplash.com/photo-1526318472351-c75fcf070305?q=80&w=1200&auto=format&fit=crop" alt="Poêlée de légumes">
            <div class="card-body"><div class="row"><span class="title">Poêlée de légumes</span><span class="meta">20 min • Facile</span></div></div>
          </article>
          <article class="card" role="listitem">
            <img class="thumb" src="https://images.unsplash.com/photo-1543352634-8730b1f1c31a?q=80&w=1200&auto=format&fit=crop" alt="Pain perdu sucré">
            <div class="card-body"><div class="row"><span class="title">Pain perdu</span><span class="meta">12 min • Facile</span></div></div>
          </article>
        </div>
      </div>
    </section>

    <!-- =================== CTA =================== -->
    <section class="section">
      <div class="container" style="text-align:center">
        <h2>Prêt à cuisiner malin ?</h2>
        <p style="color:#6b7280; max-width:720px; margin: 6px auto 18px">
          Ajoute tes ingrédients et découvre des centaines d’idées adaptées à ton placard.
        </p>
        <button id="ctaTop" class="cta-large">Je compose mon menu maintenant</button>
      </div>
    </section>
  </main>

  <!-- =================== FOOTER =================== -->
  <footer id="contact" class="container">
    <div class="foot">
      <div style="display:flex; align-items:center; gap:10px">
        <span class="logo" aria-hidden="true">KiM</span>
        <div>
          <strong style="color:#111827">Kossà I Mange</strong><br>
          <small>© <span id="y"></span> – Moins de gaspillage, plus de partage.</small>
        </div>
      </div>
      <div>
        <small>
          <a href="#apropos" style="color:#6b7280; text-decoration:none; margin-right:12px">À propos</a>
          <a href="#recettes" style="color:#6b7280; text-decoration:none; margin-right:12px">Recettes</a>
          <a href="mailto:contact@kim.example" style="color:#6b7280; text-decoration:none">contact@kim.example</a>
        </small>
      </div>
    </div>
  </footer>
@endsection
