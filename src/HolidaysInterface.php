<?php
declare(strict_types=1);

namespace DateTi\Holidays;

use DateTi\Time\DateTimeInterface;

interface HolidaysInterface
{
    public function isHoliday(DateTimeInterface $date): bool;

    public function isAllowedEaster();

    public function isAllowedGoodFriday(): bool;

    public function getHollidays(): array;

    public function getEaster(): EasterHolidayInterface;
}
