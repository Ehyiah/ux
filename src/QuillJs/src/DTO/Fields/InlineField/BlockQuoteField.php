<?php

namespace Symfony\UX\QuillJs\DTO\Fields\InlineField;

use Symfony\UX\QuillJs\DTO\Fields\Interfaces\QuillInlineFieldInterface;

final class BlockQuoteField implements QuillInlineFieldInterface
{
    public function getOption(): string
    {
        return 'blockquote';
    }
}
