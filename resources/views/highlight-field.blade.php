<x-dynamic-component
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    <pre><code
        id="{{ $getId() }}"
        dusk="filament.forms.{{ $getStatePath() }}"
        {{ $attributes ->class([
            'bg-white px-3 py-2 rounded-md block w-full transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 disabled:opacity-70 filament-forms-textarea-component',
            'dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:border-primary-600' => config('forms.dark_mode'),
        ])->merge(['style' => 'background: '.(config('forms.dark_mode') ? '#292d3e' : 'white').'; border: 1px solid #'.(config('forms.dark_mode') ? '38414f' : 'dbdee3').'; font-family: monospace; font-size: 1.1em; overflow: auto;']) }}
    >{{ $getState() }}</code></pre>
</x-dynamic-component>

@if(\Desilva\FilamentSimpleHighlightField\HighlightField::canHighlight($getState()))
    @once
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/{{ config('filament-simple-highlight-field.theme', 'default') }}.min.css">

        @push('scripts')
            <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/highlight.min.js"></script>

            <script type="text/javascript">
                window.addEventListener('DOMContentLoaded', function() {
                    hljs.highlightAll();
                });
            </script>
        @endpush
    @endonce
@endif
