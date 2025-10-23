<x-filament-panels::page.simple class="fi-content-page">
    <div class="container mx-auto py-8">
        <div class="prose max-w-none">
        {!! str($page->content)->markdown()->sanitizeHtml() !!}
        </div>
    </div>
</x-filament-panels::page.simple>