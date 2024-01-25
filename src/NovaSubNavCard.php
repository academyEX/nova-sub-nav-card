<?php

namespace AcademyEX\NovaSubNavCard;

use Laravel\Nova\Card;

class NovaSubNavCard extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = parent::FULL_WIDTH;

    public $height = parent::DYNAMIC_HEIGHT;

    public array $items = [];

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component(): string
    {
        return 'nova-sub-nav-card';
    }
    public function setItems(array $items): static
    {
        $this->items = $items;
        return $this;
    }

    public function render(): NovaSubNavCard
    {
        return $this->withMeta(['items' => $this->items]);
    }
}
