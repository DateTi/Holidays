<?php
declare(strict_types=1);

namespace DateTi\Holidays;

interface HolidaysInterface
{
    public function isHoliday(): bool;
}
