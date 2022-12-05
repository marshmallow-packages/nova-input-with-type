<?php

namespace Marshmallow\InputWithType;

use Laravel\Nova\Fields\Field;

class InputWithType extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'input-with-type';

    public function type(string $type): self
    {
        return $this->withMeta([
            'type' => $type,
        ]);
    }

    public function min($min): self
    {
        return $this->withMeta([
            'min' => $min,
        ]);
    }

    public function max($max): self
    {
        return $this->withMeta([
            'max' => $max,
        ]);
    }

    public function step($step): self
    {
        return $this->withMeta([
            'step' => $step,
        ]);
    }

    public function text()
    {
        return $this->type('text');
    }

    public function color()
    {
        return $this->type('color');
    }

    public function date()
    {
        return $this->type('date');
    }

    public function datetimeLocal()
    {
        return $this->type('datetime-local');
    }

    public function email()
    {
        return $this->type('email');
    }

    public function hidden()
    {
        return $this->type('hidden');
    }

    public function number()
    {
        return $this->type('number');
    }

    public function password()
    {
        return $this->type('password');
    }

    public function range()
    {
        return $this->type('range');
    }

    public function tel()
    {
        return $this->type('tel');
    }

    public function time()
    {
        return $this->type('time');
    }

    public function url()
    {
        return $this->type('url');
    }

    public function week()
    {
        return $this->type('week');
    }

    public function month()
    {
        return $this->type('month');
    }

    public function search()
    {
        return $this->type('search');
    }
}
