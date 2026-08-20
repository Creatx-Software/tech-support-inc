<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Quick Actions
        </x-slot>

        <x-slot name="description">
            Jump straight into the most common tasks
        </x-slot>

        <style>
            .qa-grid {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 0.75rem;
            }

            @media (min-width: 640px) {
                .qa-grid {
                    grid-template-columns: repeat(4, minmax(0, 1fr));
                }
            }

            .qa-card {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 0.5rem;
                text-align: center;
                padding: 1rem;
                border-radius: 0.75rem;
                border: 1px solid rgb(229 231 235);
                transition: border-color 0.15s ease, background-color 0.15s ease;
            }

            .qa-card:hover {
                border-color: rgb(251 191 36);
                background-color: rgb(255 251 235);
            }

            .qa-icon {
                width: 1.5rem;
                height: 1.5rem;
                color: rgb(156 163 175);
                transition: color 0.15s ease;
            }

            .qa-card:hover .qa-icon {
                color: rgb(217 119 6);
            }

            .qa-label {
                font-size: 0.875rem;
                font-weight: 500;
                color: rgb(55 65 81);
            }

            :root[class~="dark"] .qa-card {
                border-color: rgb(255 255 255 / 0.1);
            }

            :root[class~="dark"] .qa-card:hover {
                border-color: rgb(217 119 6);
                background-color: rgb(217 119 6 / 0.1);
            }

            :root[class~="dark"] .qa-icon {
                color: rgb(107 114 128);
            }

            :root[class~="dark"] .qa-card:hover .qa-icon {
                color: rgb(251 191 36);
            }

            :root[class~="dark"] .qa-label {
                color: rgb(229 231 235);
            }
        </style>

        <div class="qa-grid">
            @foreach ($this->getActions() as $action)
                <a href="{{ $action['url'] }}" class="qa-card">
                    <x-filament::icon :icon="$action['icon']" class="qa-icon" />
                    <span class="qa-label">{{ $action['label'] }}</span>
                </a>
            @endforeach
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
