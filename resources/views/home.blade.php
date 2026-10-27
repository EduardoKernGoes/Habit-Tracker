<x-layout>
    <main class="py-10 min-h-[calc(100vh-130px)]">
        <h1>
            Veja seus habitos ganharem vida
        </h1>

        @auth
            <p>
                Bem vindo(a), {{ auth()->user()->name }}!
            </p>
        @endauth
    </main>
</x-layout>
