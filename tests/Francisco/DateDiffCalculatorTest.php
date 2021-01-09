<?php

declare(strict_types=1);

namespace Test\Francisco;

use PHPUnit\Framework\TestCase;
use Taller\Francisco\DateDiffCalculator;

final class DateDiffCalculatorTest extends TestCase
{

    /**
     * @test
     */
    public function try_diff_two_dates_and_get_result_on_days()
    {
        $dateOne = new \DateTimeImmutable('2021-01-08 00:00:00');
        $dateTwo = new \DateTimeImmutable('2021-01-18 00:00:00');
        $calculator = new DateDiffCalculator($dateOne, $dateTwo);
        $diff = $calculator->diffOnDays();

        $this->assertEquals(10, $diff);
    }

    /**
     * @test
     */
    public function try_diff_two_dates_and_get_result_on_months()
    {
        $dateOne = new \DateTimeImmutable('2021-01-08 00:00:00');
        $dateTwo = new \DateTimeImmutable('2022-01-08 00:00:00');
        $calculator = new DateDiffCalculator($dateOne, $dateTwo);
        $diff = $calculator->diffOnMonths();

        $this->assertEquals(12, $diff);
    }

}