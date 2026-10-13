@props(['tipe'])

@php
    $warna = match($tipe) {
        'sukses' => 'green',
        'bahaya' => 'red',
        'info' => 'blue',
        default => 'gray',
    };
@endphp

<div style="background-color: {{ $warna }}; color: white; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
    {{ $slot }}
</div>