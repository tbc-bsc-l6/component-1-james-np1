<?php


namespace awe;


class GameProduct extends ShopProduct
{
    private $PegiRating;

    public function __construct(
        string $id,
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $PegiRating
    )

    {

        parent::__construct(
            $id,
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->PegiRating = $PegiRating;
    }

    public function getNumberOfPegiRating()
    {
        return $this->PegiRating;
    }
}