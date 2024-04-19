<?php

namespace Symfony\UX\QuillJs\DTO\Fields\InlineField;

use Symfony\UX\QuillJs\DTO\Fields\Interfaces\QuillInlineFieldInterface;

final class EmojiField implements QuillInlineFieldInterface
{
    public function getOption(): string
    {
        return 'emoji';
    }
}
