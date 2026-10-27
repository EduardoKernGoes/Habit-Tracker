<x-layout>
    <x-navbar />

    @session('success')
    <p class="bg-green-100 border border-green-500 text-green-700 p-3 my-4">
        {{ session('success') }}
    </p>
    @endsession

    <div>
        <div class="flex items-center justify-between">
            <x-title>
                {{ 'Gerenciar Hábitos' }}
            </x-title>
            <a href="{{ route('habits.create') }}" class="text-lg habit-btn bg-habit-orange px-2 py-1 habit-shadow">
                Criar Hábito
            </a>
        </div>
        <ul class="flex flex-col gap-5">
            @forelse ($habits as $h)
                <li class="habit-shadow p-2 bg-[#FFDAAC]">
                    <div class="flex gap-2 items-center justify-between">
                        <p class="font-bold text-lg">
                            {{ $h->name }}
                        </p>

                        <div class="flex gap-2">
                            <a
                                href="{{ route('habits.edit', $h->id) }}"
                                class="habit-shadow bg-blue-300 p-1 border-2 hover:opacity-50 rounded"
                            >
                                <x-icons.edit class="text-blue-900" />
                            </a>

                            <form action="{{ route('habits.destroy', $h) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="habit-shadow bg-red-300 p-1 border-2 hover:opacity-50 rounded">
                                    <x-icons.trash class="text-red-900" />
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            @empty
                <p class="text-center text-xl">
                    Você ainda não tem nenhum hábito cadastrado.
                </p>
            @endforelse
        </ul>
    </div>
</x-layout>
