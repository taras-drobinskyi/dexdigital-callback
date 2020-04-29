<?php


namespace App\Console;


class Constants
{
    const FAIL = 'fail';
    const DECLINED = 'declined';
    const CREATES = 'created';
    const SUCCESS = 'success';


    const STATUSES = [
        self::CREATES,
        self::FAIL,
        self::SUCCESS,
        self::DECLINED
    ];
}
