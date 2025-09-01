# KIM Front (Laravel Drop-in)

Ce zip contient :
- `resources/views/layouts/app.blade.php` : layout de base (fonts + CSS/JS).
- `resources/views/home.blade.php` : page d’accueil responsive.
- `public/css/app.css` et `public/js/app.js` : styles et scripts extraits.
- `routes/web.php` : route `/` qui renvoie la home (closure).

## Installation rapide

1) Dézippe **dans la racine** de ton projet Laravel (écrase si demandé).
2) Lance le serveur :
```bash
php artisan serve
```
3) Ouvre `http://127.0.0.1:8000/` → tu dois voir la homepage KIM.

### Notes
- Tu peux déplacer les assets vers Vite plus tard. Ici on utilise `public/` pour la simplicité.
- Pour brancher la recherche : remplace dans `public/js/app.js` la ligne commentaire par `location.href = '/recettes?'+params.toString();` et crée la route.
