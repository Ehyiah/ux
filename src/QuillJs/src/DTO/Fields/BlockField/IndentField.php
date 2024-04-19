<?php

namespace Symfony\UX\QuillJs\DTO\Fields\BlockField;

use Symfony\UX\QuillJs\DTO\Fields\Interfaces\QuillBlockFieldInterface;

final class IndentField implements QuillBlockFieldInterface
{
    public const INDENT_FIELD_OPTION_MINUS = '-1';
    public const INDENT_FIELD_OPTION_PLUS = '+1';

    private string $option;

    public function __construct(string $option = self::INDENT_FIELD_OPTION_PLUS)
    {
        $this->option = $option;
    }

    /**
     * @return string[]
     */
    public function getOption(): array
    {
        $array = [];
        $array['indent'] = $this->option;

        return $array;
    }
}
