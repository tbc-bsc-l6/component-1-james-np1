<?php


namespace awe;


class GameProduct extends ShopProduct
{
    private $numLevels;

    public function __construct(
        string $id,
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $numLevels
    )

    {

        parent::__construct(
            $id,
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->numLevels = $numLevels;
    }

    public function getNumberOfLevels()
    {
        return $this->numLevels;
    }
}