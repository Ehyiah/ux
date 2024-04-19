<?php

namespace Symfony\UX\QuillJs\Tests\DTO\Fields\Inline;

use Symfony\UX\QuillJs\DTO\Fields\InlineField\BlockQuoteField;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Symfony\UX\QuillJs\DTO\Fields\InlineField\BlockQuoteField
 */
final class BlockQuoteInlineFieldTest extends TestCase
{
    /**
     * @covers ::getOption
     */
    public function testGetOption(): void
    {
        $field = new BlockQuoteField();
        $result = $field->getOption();

        $this->assertEquals('blockquote', $result);
    }
}
