<x-layout>
    <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
        <h1 class="font-bold text-3xl">
            Registre-se
        </h1>

        <p class="m-5">
            Preencha o formulário para se cadastrar e começar a registrar seus hábitos
        </p>

        <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col">
            @csrf

            <div class="flex flex-col gap-2 mb-2">
                <label for="name">
                    Nome
                </label>

                <input type="name" name="name" placeholder="Seu nome" class="bg-white border-2 p-2 @error('name') border-red-500 @enderror" >

                <p>
                    @error('name')
                        <p class="text-red-500 text-xl mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </p>
            </div>

            <div class="flex flex-col gap-2 mb-2">
                <label for="email">
                    E-mail:
                </label>

                <input type="email" name="email" placeholder="seu@email.com" class="bg-white border-2 p-2 @error('email') border-red-500 @enderror" >

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

                <input type="password" name="password" placeholder="********" class="bg-white border-2 p-2 @error('password') border-red-500 @enderror" >

                <p>
                    @error('password')
                        <p class="text-red-500 text-xl mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </p>
            </div>

            <div class="flex flex-col gap-2 mb-2">
                <label for="password_confirmation">
                    Confirmar Senha:
                </label>

                <input type="password" name="password_confirmation" placeholder="********" class="bg-white border-2 p-2 @error('password') border-red-500 @enderror" >

                <p>
                    @error('password')
                        <p class="text-red-500 text-xl mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </p>
            </div>

            <button class="bg-white border-2 p-2" type="submit">
                Cadastrar
            </button>
        </form>

        <p class="text-center mt-5">
            Já tem uma conta?
            <a href="{{ route('site.login') }}" class="underline hover:opacity-50 transition">
                Faça Login
            </a>
        </p>

    </section>
</x-layout>
