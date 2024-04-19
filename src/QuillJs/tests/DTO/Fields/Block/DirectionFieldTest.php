<?php

namespace Symfony\UX\QuillJs\Tests\DTO\Fields\Block;

use Symfony\UX\QuillJs\DTO\Fields\BlockField\DirectionField;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Symfony\UX\QuillJs\DTO\Fields\BlockField\DirectionField
 */
final class DirectionFieldTest extends TestCase
{
    /**
     * @covers ::getOption
     */
    public function testGetOptionWithTrueValues(): void
    {
        $field = new DirectionField('rtl');
        $result = $field->getOption();
        $expectedResult = ['direction' => 'rtl'];

        $this->assertEquals($expectedResult, $result);
    }
}
