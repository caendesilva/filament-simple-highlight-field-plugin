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
        ])->merge(['style' => 'background: '.(config('forms.dark_mode') ? '#292d3e' : 'white').'; font-size: 1.1em; border: 1px solid #dbdee3']) }}
    >{{ $getState() }}</code></pre>
</x-dynamic-component>

@once
    @push('scripts')
        <script type="text/javascript">
            window.addEventListener('load', function() {
                hljs.highlightAll();
            });
        </script>
    @endpush
@endonce
