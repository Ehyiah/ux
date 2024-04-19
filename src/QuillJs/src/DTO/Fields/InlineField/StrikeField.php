<?php

namespace Symfony\UX\QuillJs\DTO\Fields\InlineField;

use Symfony\UX\QuillJs\DTO\Fields\Interfaces\QuillInlineFieldInterface;

class StrikeField implements QuillInlineFieldInterface
{
    public function getOption(): string
    {
        return 'strike';
    }
}
