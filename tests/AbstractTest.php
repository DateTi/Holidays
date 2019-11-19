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

    /**
     * @test
     */
    public function isHolidayGoodFriday()
    {
        $this->easterHoliday->expects('getGoodFriday')->andReturn(new \DateTime('2018-04-02'));
        $this->easterHoliday->expects('getMonday')->andReturn(new \DateTime('2018-03-30'));
        $date = new DateTi('2018-03-30', new \DateTimeZone('Europe/Prague'));
        $this->assertEquals(true, $this->holiday->isHoliday($date));
    }

    /**
     * @test
     */
    public function isHolidayEasterMonday()
    {
        $this->easterHoliday->expects('getGoodFriday')->andReturn(new \DateTime('2018-04-02'));
        $this->easterHoliday->expects('getMonday')->andReturn(new \DateTime('2018-03-30'));
        $date = new DateTi('2018-04-02', new \DateTimeZone('Europe/Prague'));
        $this->assertEquals(true, $this->holiday->isHoliday($date));
    }

    /**
     * @test
     */
    public function isHolidayNewYear()
    {
        $this->easterHoliday->expects('getGoodFriday')->andReturn(new \DateTime('2018-04-02'));
        $this->easterHoliday->expects('getMonday')->andReturn(new \DateTime('2018-03-30'));
        $date = new DateTi('2020-01-01', new \DateTimeZone('Europe/Prague'));
        $this->assertEquals(true, $this->holiday->isHoliday($date));
    }

    /**
     * @test
     */
    public function isHolidayWorkDay()
    {
        $this->easterHoliday->expects('getGoodFriday')->andReturn(new \DateTime('2018-04-02'));
        $this->easterHoliday->expects('getMonday')->andReturn(new \DateTime('2018-03-30'));
        $date = new DateTi('2020-01-02', new \DateTimeZone('Europe/Prague'));
        $this->assertEquals(false, $this->holiday->isHoliday($date));
    }
}
