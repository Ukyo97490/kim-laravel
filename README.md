# KiM Laravel (Blade Components)

**Contenu :**
- `resources/views/components/layout.blade.php` → composant `<x-layout>` (head + assets + slots)
- `resources/views/components/header.blade.php` → `<x-header>`
- `resources/views/components/footer.blade.php` → `<x-footer>`
- `resources/views/components/recipe-card.blade.php` → `<x-recipe-card>`
- Pages : `home.blade.php`, `about.blade.php`, `recipes/index.blade.php`, `recipes/show.blade.php`, `contact.blade.php`
- Assets : `public/css/app.css`, `public/js/app.js`
- Routes : `routes/web.php` (accueil, à-propos, recettes index/show, contact)

## Installation
1. Dézippe à la **racine** de ton projet Laravel (accepte d’écraser `routes/web.php` si besoin).
2. Lance : `php artisan serve`
3. URLs : `/`, `/a-propos`, `/recettes`, `/recettes/recette-1`, `/contact`

## Utilisation des composants
```blade
<x-layout :title="$title" :meta="$desc">
  <x-header />
  <!-- ton contenu -->
  <x-footer />
</x-layout>

<x-recipe-card title="Curry de légumes" time="35" difficulty="Facile" image="..." href="..." />
```
