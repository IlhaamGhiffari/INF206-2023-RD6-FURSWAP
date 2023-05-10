@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-solid border-2 border-black focus:border-indigo-500 rounded-xl shadow-sm p-2']) !!}>
