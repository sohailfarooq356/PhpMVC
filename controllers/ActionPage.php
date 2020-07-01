<?php


class ActionPage extends Controller
{
    public static function Insert($PostVars){
        self::query("INSERT INTO subjects (sub_name) VALUES ('".$PostVars."')");
        Success::CreateView('Success');
    }
}