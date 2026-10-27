<x-layout>
    <main class="max-w-5xl mx-auto py-10 min-h-[calc(100vh-130px)] px-4">
        <x-navbar />

        @session('success')
            <p class="bg-green-100 border border-green-500 text-green-700 p-3 my-4">
                {{ session('success') }}
            </p>
        @endsession

        <div>
            <h2 class="text-lg mt-8 mb-2">
                {{ date('d/m/Y') }}
            </h2>

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
                            <p class="font-bold text-lg">
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
    </main>
</x-layout>
