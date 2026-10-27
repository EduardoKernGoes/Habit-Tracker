@php
    $type = session()->has('success') ? 'success'
        : (session()->has('error') ? 'error'
        : 'warning');

    $message = session($type);

    $style = [
        'success' => 'bg-green-100 border-green-500 text-green-700',
        'error' => 'bg-red-100 border-red-500 text-red-700',
        'warning' => 'bg-yellow-100 border-yellow-500 text-yellow-700'  
    ];
        
@endphp
@if (session()->has('success') || session()->has('error') || session()->has('warning'))
    <div id="toast" class="absolute top-20 right-10">
        <p class="border p-3 my-4 rounded {{ $style[$type] }}">
            {{ $message }}
        </p>
    </div>
@endif