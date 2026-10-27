<x-layout>
    <h1>
        Cadastrar novo hábito
    </h1>
    <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">

        <form action="{{ route('habits.store') }}" method="POST" class="flex flex-col">
            @csrf
            <div class="flex flex-col gap-2 mb-2">
                <label for="name">
                    Nome do Hábito:
                </label>

                <input type="text" name="name" placeholder="Ex.: Ler Livro" class="bg-white border-2 p-2 @error('name') border-red-500 @enderror" >

                <p>
                    @error('name')
                        <p class="text-red-500 text-xl mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </p>
            </div>

            <button class="bg-white border-2 p-2" type="submit">
                Cadastrar Hábito
            </button>
        </form>
    </section>
</x-layout>
