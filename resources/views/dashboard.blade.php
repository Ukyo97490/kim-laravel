<x-layout><x-header />
    <main class='section'>
        <div class='container'>
            <h1>Dashboard</h1>
            <p>Bienvenue {{ Auth::user()->name ?? '' }}</p>
        </div>
    </main><x-footer />
</x-layout>
