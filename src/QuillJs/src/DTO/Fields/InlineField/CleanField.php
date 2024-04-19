<?php

namespace Symfony\UX\QuillJs\DTO\Fields\InlineField;

use Symfony\UX\QuillJs\DTO\Fields\Interfaces\QuillInlineFieldInterface;

class CleanField implements QuillInlineFieldInterface
{
    public function getOption(): string
    {
        return 'clean';
    }
}
