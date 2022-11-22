<?php

namespace Flexsim\FlexnetOperations\Type;

abstract class FlexnetType
{
    /**
     * Fill this objects attributes
     *
     * @param  array  $attributes
     * @return $this
     */
    public function fill(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            $this->$key = $value;
        }

        return $this;
    }
}
