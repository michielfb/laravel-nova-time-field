<?php


namespace Michielfb\Time\Tests;


use Michielfb\Time\Time;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Michielfb\Time\Time
 */
class TimeTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @covers ::format
     *
     * @param string $format
     * @param string $default
     * @param mixed  $value
     * @param string $expected
     */
    public function testFormat(
        string $format,
        string $default,
        $value,
        string $expected
    ): void {
        $subject = new Time('foo');

        $subject->format($format, $default);

        $formatted = call_user_func(
            $subject->displayCallback,
            $value
        );

        $this->assertEquals(
            $expected,
            $formatted
        );
    }

    /**
     * @covers ::withSeconds
     * @covers ::withMilliseconds
     * @covers ::withSteps
     */
    public function testSteps(): void
    {
        $subject = new Time('foo');

        $subject->withSeconds();

        $this->assertEquals(
            $subject->meta()['step'],
            1
        );

        $subject->withMilliseconds();

        $this->assertEquals(
            $subject->meta()['step'],
            0.001
        );

        $subject->withSteps(30);

        $this->assertEquals(
            $subject->meta()['step'],
            30
        );
    }

    /**
     * Data provider.
     *
     * @return iterable
     */
    public function dataProvider(): iterable
    {
        yield [
            '$format' => 'H:i',
            '$default' => '-',
            '$value' => '01:15',
            '$expected' => '01:15'
        ];

        yield [
            '$format' => 'H:i',
            '$default' => '-',
            '$value' => '07:15',
            '$expected' => '07:15'
        ];

        yield [
            '$format' => 'H:i',
            '$default' => '-',
            '$value' => '22:59',
            '$expected' => '22:59'
        ];

        //
        yield [
            '$format' => 'H:i:s',
            '$default' => '-',
            '$value' => '01:15',
            '$expected' => '01:15:00'
        ];

        yield [
            '$format' => 'H:i:s',
            '$default' => '-',
            '$value' => '07:15:32',
            '$expected' => '07:15:32'
        ];

        yield [
            '$format' => 'H:i:s',
            '$default' => '-',
            '$value' => '22:59:55',
            '$expected' => '22:59:55'
        ];

        //
        yield [
            '$format' => 'h:i A',
            '$default' => '-',
            '$value' => '01:15',
            '$expected' => '01:15 AM'
        ];

        yield [
            '$format' => 'h:i A',
            '$default' => '-',
            '$value' => '07:15',
            '$expected' => '07:15 AM'
        ];

        yield [
            '$format' => 'h:i A',
            '$default' => '-',
            '$value' => '22:59',
            '$expected' => '10:59 PM'
        ];
    }
}
