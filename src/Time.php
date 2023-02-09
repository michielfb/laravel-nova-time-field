<?php

namespace Michielfb\Time;

use DateTimeImmutable;
use Laravel\Nova\Fields\Field;

class Time extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'time';

    /**
     * Format the value using PHP date format.
     *
     * @param string $format
     * @param string $default
     *
     * @return $this
     */
    public function format(string $format = 'H:i', string $default = '-')
    {
        $this->displayCallback = function ($value) use ($format, $default) {
            return $value
                ? (new DateTimeImmutable($value))->format($format)
                : $default;
        };

        return $this;
    }

    /**
     * Set step attribute on time field.
     *
     * For seconds:
     *  - use integers that will eventually reach 60 - e.g.: 1, 2, 10, 30
     * For milliseconds:
     *  - use floats that eventually will reach 1 - e.g.: 0.001, 0.050, 0.200, etc.
     *
     * @param int|float $step
     *
     * @return $this
     */
    public function withSteps($step)
    {
        return $this->withMeta([
            'step' => $step
        ]);
    }

    /**
     * Allow users to enter seconds.
     *
     * @return $this
     */
    public function withSeconds()
    {
        return $this->withMeta([
            'step' => 1,
        ]);
    }

    /**
     * Allow users to enter milliseconds.
     *
     * @return $this
     */
    public function withMilliseconds()
    {
        return $this->withMeta([
            'step' => 0.001,
        ]);
    }
}
