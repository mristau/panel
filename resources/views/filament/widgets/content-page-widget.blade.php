<x-filament-widgets::widget>
    @foreach($this->getFooterLinks() as $footerLink)
    <x-filament::link :href="$this->urlPart.$footerLink->slug">{{ $footerLink->title }}</x-filament::link>
    @endforeach
</x-filament-widgets::widget>
