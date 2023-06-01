<div class="space-y-1">
    <x-helium-ui::menu.item url="#" icon="tabler-air-balloon">Menu 1</x-helium-ui::menu.item>
    <x-helium-ui::menu.item url="#" icon="tabler-artboard">
        Menu 2
        <x-slot:sublevel>
            <x-helium-ui::menu.sub url="#">Menu 2.1</x-helium-ui::menu.sub>
            <x-helium-ui::menu.sub url="#">Menu 2.2</x-helium-ui::menu.sub>
            <x-helium-ui::menu.sub url="#">Menu 2.3</x-helium-ui::menu.sub>
        </x-slot:sublevel>
    </x-helium-ui::menu.item>
    <x-helium-ui::menu.item url="#" icon="tabler-shopping-cart" current>Menu 3</x-helium-ui::menu.item>
    <x-helium-ui::menu.item url="#" icon="tabler-chart-pie">Menu 4</x-helium-ui::menu.item>
    <x-helium-ui::menu.item url="#" icon="tabler-cactus">Menu 5</x-helium-ui::menu.item>
    <x-helium-ui::menu.item url="#" icon="tabler-settings">Menu 6</x-helium-ui::menu.item>
</div>
