<?php

namespace Symfony\UX\QuillJs\Tests\DTO\Fields\Inline;

use Symfony\UX\QuillJs\DTO\Fields\InlineField\ItalicField;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Symfony\UX\QuillJs\DTO\Fields\InlineField\ItalicField
 */
final class ItalicInlineFieldTest extends TestCase
{
    /**
     * @covers ::getOption
     */
    public function testGetOption(): void
    {
        $field = new ItalicField();

        $result = $field->getOption();

        $this->assertEquals('italic', $result);
    }
}
