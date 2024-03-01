<x-filament-panels::page>
    @push('scripts')
        @vite([
                'resources/css/app.css',
                'resources/js/app.js',
            ])
    @endpush
    <div id="root">

    </div>
</x-filament-panels::page>
