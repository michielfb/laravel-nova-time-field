<?php

namespace Michielfb\Time;

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
     * @param string $format
     *
     * @return $this
     */
    public function format(string $format = 'hh:mm A')
    {
        return $this->withMeta([
            'format' => $format,
        ]);
    }

    /**
     * Set step attribute on time field.
     *
     * @param int $step
     *
     * @return $this
     */
    public function withSteps(int $step)
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
}
