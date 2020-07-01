<?php


class AboutUs extends Controller
{
    public static function Select(){
        print_r(self::query('SELECT * FROM teachers'));
    }
}