<?php

namespace DTO\Fields\Block;

use Symfony\UX\QuillJs\DTO\Fields\BlockField\BackgroundColorField;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Symfony\UX\QuillJs\DTO\Fields\BlockField\BackgroundColorField
 */
final class BackgroundColorFieldTest extends TestCase
{
    /**
     * @covers ::getOption
     */
    public function testGetOptionWithTrueValues(): void
    {
        $field = new BackgroundColorField(
            'green', 'red', 'yellow'
        );

        $result = $field->getOption();

        $expectedResult = [
            'background' => [
                'green', 'red', 'yellow',
            ],
        ];

        $this->assertEquals($expectedResult, $result);
    }
}
