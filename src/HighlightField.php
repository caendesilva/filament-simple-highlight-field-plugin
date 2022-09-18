<?php

namespace Desilva\FilamentSimpleHighlightField;

use Filament\Forms\Components\Field;

class HighlightField extends Field
{
    protected string $view = 'filament-simple-highlight-field::highlight-field';

    public static function canHighlight(string $string): bool
    {
        if (config('filament-simple-highlight-field.disable_highlighting_for_compact_files', true)) {
            if (static::areLinesTooLongToBeHighlighted($string)) {
                return false;
            }
        }

        return true;
    }

    protected static function areLinesTooLongToBeHighlighted(string $string): bool
    {
        $lines = substr_count($string, "\n");
        $chars = strlen($string);

        $threshold = config('filament-simple-highlight-field.compact_file_line_threshold', 256);

        return ($lines > 0) && ($chars / $lines > $threshold);
    }
}
