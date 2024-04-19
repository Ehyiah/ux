<?php

namespace Symfony\UX\QuillJs\DTO\Fields\InlineField;

use Symfony\UX\QuillJs\DTO\Fields\Interfaces\QuillInlineFieldInterface;

final class FormulaField implements QuillInlineFieldInterface
{
    public function getOption(): string
    {
        return 'formula';
    }
}
