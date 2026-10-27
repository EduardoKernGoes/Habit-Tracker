<x-layout>
    <main class="py-10 min-h-[calc(100vh-130px)]">
        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4 habit-shadow">
            <h1 class="font-bold text-3xl">
                Faça Login
            </h1>

            <p>
                Insira seus dados para acessar
            </p>

            <form action="{{ route('auth.login') }}" method="POST" class="flex flex-col">
                @csrf

                <div class="flex flex-col gap-2 mb-2">
                    <label for="email">
                        E-mail:
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="seu@email.com"
                        class="bg-white habit-shadow p-2 @error('email') border-red-500 @enderror"
                    >

                    <p>
                        @error('email')
                            <p class="text-red-500 text-xl mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </p>
                </div>

                <div class="flex flex-col gap-2 mb-2">
                    <label for="password">
                        Senha:
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="********"
                        class="bg-white habit-shadow p-2 @error('password') border-red-500 @enderror"
                    >

                    <p>
                        @error('password')
                            <p class="text-red-500 text-xl mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </p>
                </div>



                <button class="habit-shadow habit-btn bg-habit-orange border-2 p-2" type="submit">
                    Entrar
                </button>
            </form>

            <p class="text-center mt-5">
                Ainda não tem uma conta?
                <a href="{{ route('site.register') }}" class="underline hover:opacity-50 transition">
                    Registre-se
                </a>
            </p>

        </section>
    </main>
</x-layout>
