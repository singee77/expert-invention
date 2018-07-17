<?php

namespace Mock;


class MockTest
{
    public static function int()
    {
        return 1;
    }

    public static function string()
    {
        return '1';
    }

    public static function object()
    {
        return array(1);
    }

    public static function bool()
    {
        return 1 == 1;
    }
}