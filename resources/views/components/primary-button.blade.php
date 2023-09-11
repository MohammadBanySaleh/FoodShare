<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary my-4']) }}>
    {{ $slot }}
</button>
