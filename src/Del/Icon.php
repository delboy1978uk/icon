<?php

namespace Del;

class Icon
{
    const ADD = '<i class="fa fa-plus"></i>';
    const ANGLE_DOWN = '<i class="fa fa-angle-down"></i>';
    const ANGLE_LEFT = '<i class="fa fa-angle-left"></i>';
    const ANGLE_RIGHT = '<i class="fa fa-angle-right"></i>';
    const ANGLE_UP = '<i class="fa fa-angle-up"></i>';
    const ARROWS_V = '<i class="fa fa-arrows-v"></i>';
    const ASTERISK = '<i class="fa fa-asterisk"></i>';
    const BACK = '<i class="fa fa-caret-left"></i>';
    const BAN = '<i class="fa fa-ban"></i>';
    const BARS = '<i class="fa fa-bars"></i>';
    const BOLT = '<i class="fa fa-bolt"></i>';
    const BUILDING = '<i class="fa fa-building"></i>';
    const BOMB = '<i class="fa fa-bomb"></i>';
    const BUG = '<i class="fa fa-bug"></i>';
    const CAR = '<i class="fa fa-car"></i>';
    const CARET_DOWN = '<i class="fa fa-caret-down"></i>';
    const CARET_LEFT = '<i class="fa fa-caret-left"></i>';
    const CARET_RIGHT = '<i class="fa fa-caret-right"></i>';
    const CARET_UP = '<i class="fa fa-caret-up"></i>';
    const CHECK = '<i class="fa fa-check"></i>';
    const CHECK_CIRCLE = '<i class="fa fa-check-circle"></i>';
    const CHECK_SQUARE = '<i class="fa fa-check-square"></i>';
    const CIRCLE = '<i class="fa fa-circle-o"></i>';
    const CLOCK = '<i class="fa fa-clock-o"></i>';
    const CLOUD_DOWNLOAD = '<i class="fa fa-cloud-download"></i>';
    const CLOUD_UPLOAD = '<i class="fa fa-cloud-upload"></i>';
    const COMMENT = '<i class="fa fa-comment"></i>';
    const COMMENT_O = '<i class="fa fa-comment-o"></i>';
    const COMMENTS = '<i class="fa fa-comments"></i>';
    const COMMENTS_O = '<i class="fa fa-comments-o"></i>';
    const CREDIT_CARD = '<i class="fa fa-credit-card"></i>';
    const CROSS = '<i class="fa fa-cross"></i>';
    const COG = '<i class="fa fa-cog"></i>';
    const COGS = '<i class="fa fa-cogs"></i>';
    const DATABASE = '<i class="fa fa-database"></i>';
    const DEC = '<i class="fa fa-signal fa-rotate-90"></i>';
    const DELETE = '<i class="fa fa-times"></i>';
    const DOT_CIRCLE = '<i class="fa fa-dot-circle-o"></i>';
    const DOWN = '<i class="fa fa-caret-down"></i>';
    const EDIT = '<i class="fa fa-edit"></i>';
    const ENVELOPE = '<i class="fa fa-envelope"></i>';
    const ENVELOPE_O = '<i class="fa fa-envelope-o"></i>';
    const EXCLAMATION_CIRCLE = '<i class="fa fa-exclamation-circle"></i>';
    const EXPAND = '<i class="fa fa-expand"></i>';
    const FACEBOOK = '<i class="fa fa-facebook"></i>';
    const FILE = '<i class="fa fa-file-text-o"></i>';
    const FIRE = '<i class="fa fa-fire"></i>';
    const FLAG_CHECKERED = '<i class="fa fa-flag-checkered"></i>';
    const FLOPPY = '<i class="fa fa-floppy-o"></i>';
    const FORWARD = '<i class="fa fa-caret-right"></i>';
    const GBP = '<i class="fa fa-gbp"></i>';
    const GLOBE = '<i class="fa fa-globe"></i>';
    const GOOGLE_PLUS = '<i class="fa fa-google_plus"></i>';
    const HOME = '<i class="fa fa-home"></i>';
    const INFO = '<i class="fa fa-info"></i>';
    const INFO_CIRCLE = '<i class="fa fa-info-circle"></i>';
    const LIGHTBULB = '<i class="fa fa-lightbulb-o"></i>';
    const LINE_CHART = '<i class="fa fa-line-chart"></i>';
    const LINKEDIN = '<i class="fa fa-linkedin"></i>';
    const MAP_MARKER = '<i class="fa fa-map-marker"></i>';
    const MEH = '<i class="fa fa-meh-o"></i>';
    const MONEY = '<i class="fa fa-money"></i>';
    const NAVICON = '<i class="fa fa-bars"></i>';
    const NEWSPAPER = '<i class="fa fa-newspaper-o"></i>';
    const PENCIL = '<i class="fa fa-pencil"></i>';
    const PHONE = '<i class="fa fa-phone"></i>';
    const PIE_CHART = '<i class="fa fa-pie-chart"></i>';
    const PLAY = '<i class="fa fa-play"></i>';
    const PLUG = '<i class="fa fa-plug"></i>';
    const PLUS = '<i class="fa fa-plus"></i>';
    const PLUS_SQUARE = '<i class="fa fa-plus-square"></i>';
    const POWER_OFF = '<i class="fa fa-power-off"></i>';
    const PRINTER = '<i class="fa fa-print"></i>';
    const QUESTION = '<i class="fa fa-question"></i>';
    const QUESTION_CIRCLE = '<i class="fa fa-question-circle"></i>';
    const REFRESH = '<i class="fa fa-refresh"></i>';
    const RSS = '<i class="fa fa-rss"></i>';
    const SEND = '<i class="fa fa-send"></i>';
    const SHARE_ALT = '<i class="fa fa-share-alt"></i>';
    const SIGN_IN = '<i class="fa fa-sign-in"></i>';
    const SIGN_OUT = '<i class="fa fa-sign-out"></i>';
    const SPINNER = '<i class="fa fa-spinner fa-spin"></i>';
    const TACHOMETER = '<i class="fa fa-tachometer"></i>';
    const THUMBS_DOWN = '<i class="fa fa-thumbs-down"></i>';
    const THUMBS_UP = '<i class="fa fa-thumbs-up"></i>';
    const THUMBS_O_DOWN = '<i class="fa fa-thumbs-o-down"></i>';
    const THUMBS_O_UP = '<i class="fa fa-thumbs-o-up"></i>';
    const TWITTER = '<i class="fa fa-twitter"></i>';
    const UNIVERSITY = '<i class="fa fa-university"></i>';
    const UP = '<i class="fa fa-caret-up"></i>';
    const USER = '<i class="fa fa-user"></i>';
    const USERS = '<i class="fa fa-users"></i>';
    const VISA = '<i class="fa fa-cc-visa"></i>';
    const WARNING = '<i class="fa fa-warning"></i>';
    const WHEELCHAIR = '<i class="fa fa-wheelchair"></i>';
    const WRENCH = '<i class="fa fa-wrench"></i>';
    const YOUTUBE = '<i class="fa fa-youtube"></i>';
     
    public static function custom($icon, $extra_classes, $with_space = false)
    {
        $icon = str_replace('">', ' '.$extra_classes.'">', $icon);
        return ($with_space) ? $icon.'&nbsp;' : $icon;
    }

    public static function fontAwesomeHeadCssLink()
    {
        return '<link type="text/css" rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css">';
    }
}
