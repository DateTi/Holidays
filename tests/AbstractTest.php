<?php

namespace DateTiTests;

use DateTi\Holidays\EasterHolidayInterface;
use DateTi\Holidays\HolidaysInterface;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

abstract class AbstractTest extends TestCase
{
    /** @var HolidaysInterface */
    protected $holiday;

    /** @var EasterHolidayInterface|MockInterface */
    protected $easterHoliday;

    protected function setUp(): void
    {
        $this->easterHoliday = Mockery::mock(EasterHolidayInterface::class);
        parent::setUp();
    }
}
