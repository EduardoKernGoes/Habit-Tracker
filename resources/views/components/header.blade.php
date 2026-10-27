<header class="bg-white border-b-2 p-4">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <div class="flex items-center gap-3">
            <a href="{{ route('site.home') }}" class="habit-btn habit-shadow px-2 py-1 bg-habit-orange">
                EK
            </a>
            <p class="text-lg font-bold">
                Habit Tracker
            </p>
        </div>

        <div>
            @auth
                <div class="flex gap-2">
                    <a href="{{ Route::is('site.home') ? route('habits.index') : route('site.home') }}" class="bg-habit-orange habit-btn px-2 py-1 border-2 habit-shadow">
                        @if (Route::is('site.home'))
                            Meus Hábitos
                        @else
                            Home
                        @endif
                    </a>

                    <form action="{{ route('auth.logout') }}" method="POST" class="inline">
                        <button type="submit" class="bg-white habit-shadow habit-btn px-2 py-1 border-2">
                            Sair
                        </button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="flex gap-2">
                    <a
                        href="{{ route('site.login') }}"
                        class="habit-shadow bg-habit-orange habit-btn px-2 py-1 border-2"
                    >
                        Logar
                    </a>

                    <a
                        href="{{ route('site.register') }}"
                        class="bg-white habit-btn habit-shadow px-2 py-1 border-2"
                    >
                        Cadastrar
                    </a>
                </div>
            @endguest

        </div>
    </div>
</header>
