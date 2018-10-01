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
}
