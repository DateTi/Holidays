<?php
declare(strict_types=1);

namespace DateTi\Holidays;

use DateTime;

interface EasterHolidayInterface
{
    public function getMonday(int $year): DateTime;

    public function getEaster(int $year): DateTime;

    public function getGoodFriday(int $year): DateTime;

    public static function monday(int $year): DateTime;

    public static function easter(int $year): DateTime;

    public static function goodFriday(int $year): DateTime;
}
