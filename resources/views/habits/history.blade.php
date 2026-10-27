<x-layout>
    <x-navbar />
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