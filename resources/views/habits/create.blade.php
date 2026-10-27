<x-layout>
    <h1 class="font-bold text-2xl text-center">
        Cadastrar Hábito
    </h1>
    <section class="habit-shadow bg-white max-w-[600px] mx-auto p-10 pb-6 mt-4">

        <form action="{{ route('habits.store') }}" method="POST" class="flex flex-col">
            @csrf
            <div class="flex flex-col gap-2 mb-2">
                <label for="name" class="text-xl font-bold">
                    Nome do Hábito:
                </label>

                <input
                    type="text"
                    name="name"
                    placeholder="Ex.: Ler Livro"
                    class="habit-shadow bg-white border-2 p-2 @error('name') border-red-500 @enderror"
                >

                <p>
                    @error('name')
                        <p class="text-red-500 text-xl mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </p>
            </div>

            <button class="habit-shadow bg-habit-orange font-bold mx-auto px-4 py-2 mt-3 rounded" type="submit">
                Cadastrar Hábito
            </button>
        </form>
    </section>
</x-layout>
