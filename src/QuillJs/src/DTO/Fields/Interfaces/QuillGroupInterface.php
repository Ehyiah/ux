<?php

namespace Symfony\UX\QuillJs\DTO\Fields\Interfaces;

interface QuillGroupInterface
{
    /**
     * @return array<QuillInlineFieldInterface>
     */
    public static function build(QuillInlineFieldInterface ...$fields): array;
}
