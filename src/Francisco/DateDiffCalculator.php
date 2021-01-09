<?php

declare(strict_types=1);

namespace Taller\Francisco;

final class DateDiffCalculator
{
    private $dateOne;
    private $dateTwo;

    public function __construct(\DateTimeImmutable $dateOne, \DateTimeImmutable $dateTwo)
    {
        $this->dateOne = $dateOne;
        $this->dateTwo = $dateTwo;
    }

    public function diffOnDays(): int
    {
        $dateOne = $this->dateOne;
        $dateTwo = $this->dateTwo;

        return $dateTwo->diff($dateOne, true)->days;
    }

    public function diffOnMonths(): int
    {
        $dateOne = $this->dateOne;
        $dateTwo = $this->dateTwo;
        $diff = $dateTwo->diff($dateOne, true);

        return $diff->y
            ? $diff->y * 12
            : $diff->m;
    }
}