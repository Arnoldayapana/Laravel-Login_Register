<x-layout>
    @auth
    <h1>login</h1>
    @endauth

    @guest
    <h1>Gues</h1>
    @endguest
</x-layout>