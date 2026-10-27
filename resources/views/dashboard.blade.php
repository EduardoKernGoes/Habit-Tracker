<x-layout>
    <x-navbar />

    <div>
        <x-title>
            {{ \Carbon\Carbon::now()->locale('pt_BR')->translatedFormat('l, d \d\e F') }}
        </x-title>

        <ul class="flex flex-col gap-2">
            @forelse ($habits as $h)
                <li class="habit-shadow p-2 bg-[#FFDAAC]">
                    <form
                        action="{{ route('habits.toggle', $h->id) }}"
                        method="POST"
                        class="flex gap-2 items-center"
                        id="form-{{ $h->id }}"
                    >
                        @csrf
                        <input
                            type="checkbox"
                            class="w-5 h-5"
                            {{ $h->wasCompletedToday() ? 'checked' : '' }}
                            onchange="document.getElementById('form-{{ $h->id }}').submit()"
                        />
                        <p class="font-bold text-lg {{ $h->wasCompletedToday() ? 'line-through italic' : '' }}">
                            {{ $h->name }}
                        </p>

                    </form>
                </li>
            @empty
            <p class="text-center text-xl">
                Você ainda não tem nenhum hábito cadastrado.
            </p>
            @endforelse
        </ul>
    </div>
</x-layout>
