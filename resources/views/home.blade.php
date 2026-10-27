<x-layout>
    <h1>
        Veja seus habitos ganharem vida
    </h1>

    @auth
        <p>
            Bem vindo(a), {{ auth()->user()->name }}!
        </p>
    @endauth
</x-layout>
