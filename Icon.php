<?php

namespace Del;

class Icon
{
    const ADD = '<i class="fa fa-plus"></i>';
    const ASTERISK = '<i class="fa fa-asterisk"></i>';
    const BACK = '<i class="fa fa-caret-left"></i>';
    const BAN = '<i class="fa fa-ban"></i>';
    const BOLT = '<i class="fa fa-bolt"></i>';
    const BUILDING = '<i class="fa fa-building"></i>';
    const CAR = '<i class="fa fa-car"></i>';
    const CHECK = '<i class="fa fa-check"></i>';
    const CHECK_CIRCLE = '<i class="fa fa-check-circle"></i>';
    const CLOCK = '<i class="fa fa-clock-o"></i>';
    const CLOUD_DOWNLOAD = '<i class="fa fa-cloud-download"></i>';
    const CLOUD_UPLOAD = '<i class="fa fa-cloud-upload"></i>';
    const COG = '<i class="fa fa-cog"></i>';
    const COGS = '<i class="fa fa-cogs"></i>';
    const DATABASE = '<i class="fa fa-database"></i>';
    const DEC = '<i class="fa fa-signal fa-rotate-90"></i>';
    const DELETE = '<i class="fa fa-times"></i>';
    const DOWN = '<i class="fa fa-caret-down"></i>';
    const EDIT = '<i class="fa fa-edit"></i>';
    const ENVELOPE = '<i class="fa fa-envelope"></i>';
    const FLOPPY = '<i class="fa fa-floppy-o"></i>';
    const FORWARD = '<i class="fa fa-caret-right"></i>';
    const HOME = '<i class="fa fa-home"></i>';
    const INFO_CIRCLE = '<i class="fa fa-info-circle"></i>';
    const LINE_CHART = '<i class="fa fa-line-chart"></i>';
    const MONEY = '<i class="fa fa-money"></i>';
    const PIE_CHART = '<i class="fa fa-pie-chart"></i>';
    const PLUS = '<i class="fa fa-plus"></i>';
    const TACHOMETER = '<i class="fa fa-tachometer"></i>';
    const UNIVERSITY = '<i class="fa fa-university"></i>';
    const UP = '<i class="fa fa-caret-up"></i>';
    const USER = '<i class="fa fa-user"></i>';
    const WARNING = '<i class="fa fa-warning"></i>';
    const WRENCH = '<i class="fa fa-wrench"></i>';
    
    public static function custom($icon, $extra_classes, $with_space = false)
    {
        $icon = str_replace('">', ' '.$extra_classes.'">', $icon);
        return ($with_space) ? $icon.'&nbsp;' : $icon;
    }
}
