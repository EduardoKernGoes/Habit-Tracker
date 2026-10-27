<x-layout>
    <x-navbar />

    <div class="flex justify-between items-center">
        <x-title>
            {{ 'Histórico' }}
        </x-title>
        <div>
            @foreach ($avaliableYears as $ay)
                <a
                    href="{{ route('habits.history', $ay) }}"
                    class="habit-btn habit-shadow px-2 py-1 inline-block {{ $selectedYear == $ay ? 'bg-habit-orange' : 'bg-white' }}"
                >
                    {{ $ay }}
                </a>
            @endforeach
        </div>
    </div>

    <div class="mt-5">
        @forelse($habits as $habit)
            <x-contribution :$habit :year="$selectedYear" />
        @empty
            <div>
                <p class="text-black">
                Nenhum hábito para exibir histórico.
                </p>
                <a href="{{ route('habits.create') }}" class="underline ">
                Crie um novo hábito
                </a>
            </div>
        @endforelse
    </div>
</x-layout>