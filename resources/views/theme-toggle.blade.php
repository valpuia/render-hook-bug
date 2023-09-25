<div
    x-data="{
        theme: null,

        init: function () {
            this.theme = localStorage.getItem('theme') || 'system'

            $dispatch('theme-changed', theme)

            $watch('theme', (theme) => {
                $dispatch('theme-changed', theme)
            })
        },
    }"
    class="hidden md:flex gap-x-1"
>
    <x-filament-panels::theme-switcher.button
        icon="heroicon-o-sun"
        theme="light"
    />

    <x-filament-panels::theme-switcher.button
        icon="heroicon-o-moon"
        theme="dark"
    />

    <x-filament-panels::theme-switcher.button
        icon="heroicon-o-computer-desktop"
        theme="system"
    />
</div>
