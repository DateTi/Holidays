<?php
declare(strict_types=1);

namespace DateTi\Holidays;

interface HolidaysInterface
{
    public function isHoliday(): bool;

    public function isAllowedEaster();

    public function isAllowedGoodFriday(): bool;

    public function getHollidays(): array;

    public function getEaster(): EasterHolidayInterface;
}
