<x-filament-panels::page class="fi-content-page">
    <div class="container mx-auto py-8">
        <div class="prose max-w-none">
        {!! str($this->record->content)->markdown()->sanitizeHtml() !!}
        </div>
    </div>
</x-filament-panels::page>