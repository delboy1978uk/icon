<?php

namespace Del;

use ReflectionClass;

class Icon
{
    const ADD = '<i class="fa fa-plus"></i>';
    const ADJUST = '<i class="fa fa-adjust"></i>';
    const ADN = '<i class="fa fa-adn"></i>';
    const ALIGN_CENTER = '<i class="fa fa-align-center"></i>';
    const ALIGN_JUSTIFY = '<i class="fa fa-align-justify"></i>';
    const ALIGN_LEFT = '<i class="fa fa-align-left"></i>';
    const ALIGN_RIGHT = '<i class="fa fa-align-right"></i>';
    const AMBULANCE = '<i class="fa fa-ambulance"></i>';
    const ANCHOR = '<i class="fa fa-anchor"></i>';
    const ANDROID = '<i class="fa fa-android"></i>';
    const ANGELLIST = '<i class="fa fa-angellist"></i>';
    const ANGLE_DOUBLE_DOWN = '<i class="fa fa-angle-double-down"></i>';
    const ANGLE_DOUBLE_LEFT = '<i class="fa fa-angle-double-left"></i>';
    const ANGLE_DOUBLE_RIGHT = '<i class="fa fa-angle-double-right"></i>';
    const ANGLE_DOUBLE_UP = '<i class="fa fa-angle-double-up"></i>';
    const ANGLE_DOWN = '<i class="fa fa-angle-down"></i>';
    const ANGLE_LEFT = '<i class="fa fa-angle-left"></i>';
    const ANGLE_RIGHT = '<i class="fa fa-angle-right"></i>';
    const ANGLE_UP = '<i class="fa fa-angle-up"></i>';
    const APPLE = '<i class="fa fa-apple"></i>';
    const ARCHIVE = '<i class="fa fa-archive"></i>';
    const AREA_CHART = '<i class="fa fa-area-chart"></i>';
    const ARROW_CIRCLE_DOWN = '<i class="fa fa-arrow-circle-down"></i>';
    const ARROW_CIRCLE_LEFT = '<i class="fa fa-arrow-circle-left"></i>';
    const ARROW_CIRCLE_O_DOWN = '<i class="fa fa-arrow-circle-o-down"></i>';
    const ARROW_CIRCLE_O_LEFT = '<i class="fa fa-arrow-circle-o-left"></i>';
    const ARROW_CIRCLE_O_RIGHT = '<i class="fa fa-arrow-circle-o-right"></i>';
    const ARROW_CIRCLE_O_UP = '<i class="fa fa-arrow-circle-o-up"></i>';
    const ARROW_CIRCLE_RIGHT = '<i class="fa fa-arrow-circle-right"></i>';
    const ARROW_CIRCLE_UP = '<i class="fa fa-arrow-circle-up"></i>';
    const ARROW_DOWN = '<i class="fa fa-arrow-down"></i>';
    const ARROW_LEFT = '<i class="fa fa-arrow-left"></i>';
    const ARROW_RIGHT = '<i class="fa fa-arrow-right"></i>';
    const ARROW_UP = '<i class="fa fa-arrow-up"></i>';
    const ARROWS = '<i class="fa fa-arrows"></i>';
    const ARROWS_ALT = '<i class="fa fa-arrows-alt"></i>';
    const ARROWS_H = '<i class="fa fa-arrows-h"></i>';
    const ARROWS_V = '<i class="fa fa-arrows-v"></i>';
    const ASTERISK = '<i class="fa fa-asterisk"></i>';
    const AT = '<i class="fa fa-at"></i>';
    const AUTOMOBILE = '<i class="fa fa-automobile"></i>';
    const BACKWARD = '<i class="fa fa-backward"></i>';
    const BAN = '<i class="fa fa-ban"></i>';
    const BANK = '<i class="fa fa-bank"></i>';
    const BAR_CHART = '<i class="fa fa-bar-chart"></i>';
    const BAR_CHART_O = '<i class="fa fa-bar-chart-o"></i>';
    const BARCODE = '<i class="fa fa-barcode"></i>';
    const BARS = '<i class="fa fa-bars"></i>';
    const BED = '<i class="fa fa-bed"></i>';
    const BEER = '<i class="fa fa-beer"></i>';
    const BEHANCE = '<i class="fa fa-behance"></i>';
    const BEHANCE_SQUARE = '<i class="fa fa-behance-square"></i>';
    const BELL = '<i class="fa fa-bell"></i>';
    const BELL_O = '<i class="fa fa-bell-o"></i>';
    const BELL_SLASH = '<i class="fa fa-bell-slash"></i>';
    const BELL_SLASH_O = '<i class="fa fa-bell-slash-o"></i>';
    const BICYCLE = '<i class="fa fa-bicycle"></i>';
    const BINOCULARS = '<i class="fa fa-binoculars"></i>';
    const BIRTHDAY_CAKE = '<i class="fa fa-birthday-cake"></i>';
    const BITBUCKET = '<i class="fa fa-bitbucket"></i>';
    const BITBUCKET_SQUARE = '<i class="fa fa-bitbucket-square"></i>';
    const BITCOIN = '<i class="fa fa-bitcoin"></i>';
    const BOLD = '<i class="fa fa-bold"></i>';
    const BOLT = '<i class="fa fa-bolt"></i>';
    const BOMB = '<i class="fa fa-bomb"></i>';
    const BOOK = '<i class="fa fa-book"></i>';
    const BOOKMARK = '<i class="fa fa-bookmark"></i>';
    const BOOKMARK_O = '<i class="fa fa-bookmark-o"></i>';
    const BRIEFCASE = '<i class="fa fa-briefcase"></i>';
    const BTC = '<i class="fa fa-btc"></i>';
    const BUG = '<i class="fa fa-bug"></i>';
    const BUILDING = '<i class="fa fa-building"></i>';
    const BUILDING_O = '<i class="fa fa-building-o"></i>';
    const BULLHORN = '<i class="fa fa-bullhorn"></i>';
    const BULLSEYE = '<i class="fa fa-bullseye"></i>';
    const BUS = '<i class="fa fa-bus"></i>';
    const BUYSELLADS = '<i class="fa fa-buysellads"></i>';
    const CAB = '<i class="fa fa-cab"></i>';
    const CALCULATOR = '<i class="fa fa-calculator"></i>';
    const CALENDAR = '<i class="fa fa-calendar"></i>';
    const CALENDAR_O = '<i class="fa fa-calendar-o"></i>';
    const CAMERA = '<i class="fa fa-camera"></i>';
    const CAMERA_RETRO = '<i class="fa fa-camera-retro"></i>';
    const CAR = '<i class="fa fa-car"></i>';
    const CARET_DOWN = '<i class="fa fa-caret-down"></i>';
    const CARET_LEFT = '<i class="fa fa-caret-left"></i>';
    const CARET_RIGHT = '<i class="fa fa-caret-right"></i>';
    const CARET_SQUARE_O_DOWN = '<i class="fa fa-caret-square-o-down"></i>';
    const CARET_SQUARE_O_LEFT = '<i class="fa fa-caret-square-o-left"></i>';
    const CARET_SQUARE_O_RIGHT = '<i class="fa fa-caret-square-o-right"></i>';
    const CARET_SQUARE_O_UP = '<i class="fa fa-caret-square-o-up"></i>';
    const CARET_UP = '<i class="fa fa-caret-up"></i>';
    const CART_ARROW_DOWN = '<i class="fa fa-cart-arrow-down"></i>';
    const CART_PLUS = '<i class="fa fa-cart-plus"></i>';
    const CC = '<i class="fa fa-cc"></i>';
    const CC_AMEX = '<i class="fa fa-cc-amex"></i>';
    const CC_DISCOVER = '<i class="fa fa-cc-discover"></i>';
    const CC_MASTERCARD = '<i class="fa fa-cc-mastercard"></i>';
    const CC_PAYPAL = '<i class="fa fa-cc-paypal"></i>';
    const CC_STRIPE = '<i class="fa fa-cc-stripe"></i>';
    const CC_VISA = '<i class="fa fa-cc-visa"></i>';
    const CERTIFICATE = '<i class="fa fa-certificate"></i>';
    const CHAIN = '<i class="fa fa-chain"></i>';
    const CHAIN_BROKEN = '<i class="fa fa-chain-broken"></i>';
    const CHECK = '<i class="fa fa-check"></i>';
    const CHECK_CIRCLE = '<i class="fa fa-check-circle"></i>';
    const CHECK_CIRCLE_O = '<i class="fa fa-check-circle-o"></i>';
    const CHECK_SQUARE = '<i class="fa fa-check-square"></i>';
    const CHECK_SQUARE_O = '<i class="fa fa-check-square-o"></i>';
    const CHEVRON_CIRCLE_DOWN = '<i class="fa fa-chevron-circle-down"></i>';
    const CHEVRON_CIRCLE_LEFT = '<i class="fa fa-chevron-circle-left"></i>';
    const CHEVRON_CIRCLE_RIGHT = '<i class="fa fa-chevron-circle-right"></i>';
    const CHEVRON_CIRCLE_UP = '<i class="fa fa-chevron-circle-up"></i>';
    const CHEVRON_DOWN = '<i class="fa fa-chevron-down"></i>';
    const CHEVRON_LEFT = '<i class="fa fa-chevron-left"></i>';
    const CHEVRON_RIGHT = '<i class="fa fa-chevron-right"></i>';
    const CHEVRON_UP = '<i class="fa fa-chevron-up"></i>';
    const CHILD = '<i class="fa fa-child"></i>';
    const CIRCLE = '<i class="fa fa-circle"></i>';
    const CIRCLE_O = '<i class="fa fa-circle-o"></i>';
    const CIRCLE_O_NOTCH = '<i class="fa fa-circle-o-notch"></i>';
    const CIRCLE_THIN = '<i class="fa fa-circle-thin"></i>';
    const CLIPBOARD = '<i class="fa fa-clipboard"></i>';
    const CLOCK = '<i class="fa fa-clock-o"></i>';
    const CLOCK_O = '<i class="fa fa-clock-o"></i>';
    const CLOSE = '<i class="fa fa-close"></i>';
    const CLOUD = '<i class="fa fa-cloud"></i>';
    const CLOUD_DOWNLOAD = '<i class="fa fa-cloud-download"></i>';
    const CLOUD_UPLOAD = '<i class="fa fa-cloud-upload"></i>';
    const CNY = '<i class="fa fa-cny"></i>';
    const CODE = '<i class="fa fa-code"></i>';
    const CODE_FORK = '<i class="fa fa-code-fork"></i>';
    const CODEPEN = '<i class="fa fa-codepen"></i>';
    const COFFEE = '<i class="fa fa-coffee"></i>';
    const COG = '<i class="fa fa-cog"></i>';
    const COGS = '<i class="fa fa-cogs"></i>';
    const COLUMNS = '<i class="fa fa-columns"></i>';
    const COMMENT = '<i class="fa fa-comment"></i>';
    const COMMENT_O = '<i class="fa fa-comment-o"></i>';
    const COMMENTS = '<i class="fa fa-comments"></i>';
    const COMMENTS_O = '<i class="fa fa-comments-o"></i>';
    const COMPASS = '<i class="fa fa-compass"></i>';
    const COMPRESS = '<i class="fa fa-compress"></i>';
    const CONNECTDEVELOP = '<i class="fa fa-connectdevelop"></i>';
    const COPY = '<i class="fa fa-copy"></i>';
    const COPYRIGHT = '<i class="fa fa-copyright"></i>';
    const CREDIT_CARD = '<i class="fa fa-credit-card"></i>';
    const CROP = '<i class="fa fa-crop"></i>';
    const CROSSHAIRS = '<i class="fa fa-crosshairs"></i>';
    const CSS3 = '<i class="fa fa-css3"></i>';
    const CUBE = '<i class="fa fa-cube"></i>';
    const CUBES = '<i class="fa fa-cubes"></i>';
    const CUT = '<i class="fa fa-cut"></i>';
    const CUTLERY = '<i class="fa fa-cutlery"></i>';
    const DASHBOARD = '<i class="fa fa-dashboard"></i>';
    const DASHCUBE = '<i class="fa fa-dashcube"></i>';
    const DATABASE = '<i class="fa fa-database"></i>';
    const DEDENT = '<i class="fa fa-dedent"></i>';
    const DELETE = '<i class="fa fa-times"></i>';
    const DELICIOUS = '<i class="fa fa-delicious"></i>';
    const DESKTOP = '<i class="fa fa-desktop"></i>';
    const DEVIANTART = '<i class="fa fa-deviantart"></i>';
    const DEC = '<i class="fa fa-signal fa-rotate-90"></i>';
    const DIAMOND = '<i class="fa fa-diamond"></i>';
    const DIGG = '<i class="fa fa-digg"></i>';
    const DOLLAR = '<i class="fa fa-dollar"></i>';
    const DOT_CIRCLE_O = '<i class="fa fa-dot-circle-o"></i>';
    const DOWNLOAD = '<i class="fa fa-download"></i>';
    const DRIBBBLE = '<i class="fa fa-dribbble"></i>';
    const DROPBOX = '<i class="fa fa-dropbox"></i>';
    const DRUPAL = '<i class="fa fa-drupal"></i>';
    const EDIT = '<i class="fa fa-edit"></i>';
    const EJECT = '<i class="fa fa-eject"></i>';
    const ELLIPSIS_H = '<i class="fa fa-ellipsis-h"></i>';
    const ELLIPSIS_V = '<i class="fa fa-ellipsis-v"></i>';
    const EMPIRE = '<i class="fa fa-empire"></i>';
    const ENVELOPE = '<i class="fa fa-envelope"></i>';
    const ENVELOPE_O = '<i class="fa fa-envelope-o"></i>';
    const ENVELOPE_SQUARE = '<i class="fa fa-envelope-square"></i>';
    const ERASER = '<i class="fa fa-eraser"></i>';
    const EUR = '<i class="fa fa-eur"></i>';
    const EURO = '<i class="fa fa-euro"></i>';
    const EXCHANGE = '<i class="fa fa-exchange"></i>';
    const EXCLAMATION = '<i class="fa fa-exclamation"></i>';
    const EXCLAMATION_CIRCLE = '<i class="fa fa-exclamation-circle"></i>';
    const EXCLAMATION_TRIANGLE = '<i class="fa fa-exclamation-triangle"></i>';
    const EXPAND = '<i class="fa fa-expand"></i>';
    const EXTERNAL_LINK = '<i class="fa fa-external-link"></i>';
    const EXTERNAL_LINK_SQUARE = '<i class="fa fa-external-link-square"></i>';
    const EYE = '<i class="fa fa-eye"></i>';
    const EYE_SLASH = '<i class="fa fa-eye-slash"></i>';
    const EYEDROPPER = '<i class="fa fa-eyedropper"></i>';
    const FACEBOOK = '<i class="fa fa-facebook"></i>';
    const FACEBOOK_F = '<i class="fa fa-facebook-f"></i>';
    const FACEBOOK_OFFICIAL = '<i class="fa fa-facebook-official"></i>';
    const FACEBOOK_SQUARE = '<i class="fa fa-facebook-square"></i>';
    const FAST_BACKWARD = '<i class="fa fa-fast-backward"></i>';
    const FAST_FORWARD = '<i class="fa fa-fast-forward"></i>';
    const FAX = '<i class="fa fa-fax"></i>';
    const FEMALE = '<i class="fa fa-female"></i>';
    const FIGHTER_JET = '<i class="fa fa-fighter-jet"></i>';
    const FILE = '<i class="fa fa-file"></i>';
    const FILE_ARCHIVE_O = '<i class="fa fa-file-archive-o"></i>';
    const FILE_AUDIO_O = '<i class="fa fa-file-audio-o"></i>';
    const FILE_CODE_O = '<i class="fa fa-file-code-o"></i>';
    const FILE_EXCEL_O = '<i class="fa fa-file-excel-o"></i>';
    const FILE_IMAGE_O = '<i class="fa fa-file-image-o"></i>';
    const FILE_MOVIE_O = '<i class="fa fa-file-movie-o"></i>';
    const FILE_O = '<i class="fa fa-file-o"></i>';
    const FILE_PDF_O = '<i class="fa fa-file-pdf-o"></i>';
    const FILE_PHOTO_O = '<i class="fa fa-file-photo-o"></i>';
    const FILE_PICTURE_O = '<i class="fa fa-file-picture-o"></i>';
    const FILE_POWERPOINT_O = '<i class="fa fa-file-powerpoint-o"></i>';
    const FILE_SOUND_O = '<i class="fa fa-file-sound-o"></i>';
    const FILE_TEXT = '<i class="fa fa-file-text"></i>';
    const FILE_TEXT_O = '<i class="fa fa-file-text-o"></i>';
    const FILE_VIDEO_O = '<i class="fa fa-file-video-o"></i>';
    const FILE_WORD_O = '<i class="fa fa-file-word-o"></i>';
    const FILE_ZIP_O = '<i class="fa fa-file-zip-o"></i>';
    const FILES_O = '<i class="fa fa-files-o"></i>';
    const FILM = '<i class="fa fa-film"></i>';
    const FILTER = '<i class="fa fa-filter"></i>';
    const FIRE = '<i class="fa fa-fire"></i>';
    const FIRE_EXTINGUISHER = '<i class="fa fa-fire-extinguisher"></i>';
    const FLAG = '<i class="fa fa-flag"></i>';
    const FLAG_CHECKERED = '<i class="fa fa-flag-checkered"></i>';
    const FLAG_O = '<i class="fa fa-flag-o"></i>';
    const FLASH = '<i class="fa fa-flash"></i>';
    const FLASK = '<i class="fa fa-flask"></i>';
    const FLICKR = '<i class="fa fa-flickr"></i>';
    const FLOPPY_O = '<i class="fa fa-floppy-o"></i>';
    const FOLDER = '<i class="fa fa-folder"></i>';
    const FOLDER_O = '<i class="fa fa-folder-o"></i>';
    const FOLDER_OPEN = '<i class="fa fa-folder-open"></i>';
    const FOLDER_OPEN_O = '<i class="fa fa-folder-open-o"></i>';
    const FONT = '<i class="fa fa-font"></i>';
    const FORUMBEE = '<i class="fa fa-forumbee"></i>';
    const FORWARD = '<i class="fa fa-forward"></i>';
    const FOURSQUARE = '<i class="fa fa-foursquare"></i>';
    const FROWN_O = '<i class="fa fa-frown-o"></i>';
    const FUTBOL_O = '<i class="fa fa-futbol-o"></i>';
    const GAMEPAD = '<i class="fa fa-gamepad"></i>';
    const GAVEL = '<i class="fa fa-gavel"></i>';
    const GBP = '<i class="fa fa-gbp"></i>';
    const GE = '<i class="fa fa-ge"></i>';
    const GEAR = '<i class="fa fa-gear"></i>';
    const GEARS = '<i class="fa fa-gears"></i>';
    const GENDERLESS = '<i class="fa fa-genderless"></i>';
    const GIFT = '<i class="fa fa-gift"></i>';
    const GIT = '<i class="fa fa-git"></i>';
    const GIT_SQUARE = '<i class="fa fa-git-square"></i>';
    const GITHUB = '<i class="fa fa-github"></i>';
    const GITHUB_ALT = '<i class="fa fa-github-alt"></i>';
    const GITHUB_SQUARE = '<i class="fa fa-github-square"></i>';
    const GITTIP = '<i class="fa fa-gittip"></i>';
    const GLASS = '<i class="fa fa-glass"></i>';
    const GLOBE = '<i class="fa fa-globe"></i>';
    const GOOGLE = '<i class="fa fa-google"></i>';
    const GOOGLE_PLUS = '<i class="fa fa-google-plus"></i>';
    const GOOGLE_PLUS_SQUARE = '<i class="fa fa-google-plus-square"></i>';
    const GOOGLE_WALLET = '<i class="fa fa-google-wallet"></i>';
    const GRADUATION_CAP = '<i class="fa fa-graduation-cap"></i>';
    const GRATIPAY = '<i class="fa fa-gratipay"></i>';
    const GROUP = '<i class="fa fa-group"></i>';
    const H_SQUARE = '<i class="fa fa-h-square"></i>';
    const HACKER_NEWS = '<i class="fa fa-hacker-news"></i>';
    const HAND_O_DOWN = '<i class="fa fa-hand-o-down"></i>';
    const HAND_O_LEFT = '<i class="fa fa-hand-o-left"></i>';
    const HAND_O_RIGHT = '<i class="fa fa-hand-o-right"></i>';
    const HAND_O_UP = '<i class="fa fa-hand-o-up"></i>';
    const HDD_O = '<i class="fa fa-hdd-o"></i>';
    const HEADER = '<i class="fa fa-header"></i>';
    const HEADPHONES = '<i class="fa fa-headphones"></i>';
    const HEART = '<i class="fa fa-heart"></i>';
    const HEART_O = '<i class="fa fa-heart-o"></i>';
    const HEARTBEAT = '<i class="fa fa-heartbeat"></i>';
    const HISTORY = '<i class="fa fa-history"></i>';
    const HOME = '<i class="fa fa-home"></i>';
    const HOSPITAL_O = '<i class="fa fa-hospital-o"></i>';
    const HOTEL = '<i class="fa fa-hotel"></i>';
    const HTML5 = '<i class="fa fa-html5"></i>';
    const ILS = '<i class="fa fa-ils"></i>';
    const IMAGE = '<i class="fa fa-image"></i>';
    const INBOX = '<i class="fa fa-inbox"></i>';
    const INDENT = '<i class="fa fa-indent"></i>';
    const INFO = '<i class="fa fa-info"></i>';
    const INFO_CIRCLE = '<i class="fa fa-info-circle"></i>';
    const INR = '<i class="fa fa-inr"></i>';
    const INSTAGRAM = '<i class="fa fa-instagram"></i>';
    const INSTITUTION = '<i class="fa fa-institution"></i>';
    const IOXHOST = '<i class="fa fa-ioxhost"></i>';
    const ITALIC = '<i class="fa fa-italic"></i>';
    const JOOMLA = '<i class="fa fa-joomla"></i>';
    const JPY = '<i class="fa fa-jpy"></i>';
    const JSFIDDLE = '<i class="fa fa-jsfiddle"></i>';
    const KEY = '<i class="fa fa-key"></i>';
    const KEYBOARD_O = '<i class="fa fa-keyboard-o"></i>';
    const KRW = '<i class="fa fa-krw"></i>';
    const LANGUAGE = '<i class="fa fa-language"></i>';
    const LAPTOP = '<i class="fa fa-laptop"></i>';
    const LASTFM = '<i class="fa fa-lastfm"></i>';
    const LASTFM_SQUARE = '<i class="fa fa-lastfm-square"></i>';
    const LEAF = '<i class="fa fa-leaf"></i>';
    const LEANPUB = '<i class="fa fa-leanpub"></i>';
    const LEGAL = '<i class="fa fa-legal"></i>';
    const LEMON_O = '<i class="fa fa-lemon-o"></i>';
    const LEVEL_DOWN = '<i class="fa fa-level-down"></i>';
    const LEVEL_UP = '<i class="fa fa-level-up"></i>';
    const LIFE_BOUY = '<i class="fa fa-life-bouy"></i>';
    const LIFE_BUOY = '<i class="fa fa-life-buoy"></i>';
    const LIFE_RING = '<i class="fa fa-life-ring"></i>';
    const LIFE_SAVER = '<i class="fa fa-life-saver"></i>';
    const LIGHTBULB_O = '<i class="fa fa-lightbulb-o"></i>';
    const LINE_CHART = '<i class="fa fa-line-chart"></i>';
    const LINK = '<i class="fa fa-link"></i>';
    const LINKEDIN = '<i class="fa fa-linkedin"></i>';
    const LINKEDIN_SQUARE = '<i class="fa fa-linkedin-square"></i>';
    const LINUX = '<i class="fa fa-linux"></i>';
    const LIST_ = '<i class="fa fa-list"></i>';
    const LIST_ALT = '<i class="fa fa-list-alt"></i>';
    const LIST_OL = '<i class="fa fa-list-ol"></i>';
    const LIST_UL = '<i class="fa fa-list-ul"></i>';
    const LOCATION_ARROW = '<i class="fa fa-location-arrow"></i>';
    const LOCK = '<i class="fa fa-lock"></i>';
    const LONG_ARROW_DOWN = '<i class="fa fa-long-arrow-down"></i>';
    const LONG_ARROW_LEFT = '<i class="fa fa-long-arrow-left"></i>';
    const LONG_ARROW_RIGHT = '<i class="fa fa-long-arrow-right"></i>';
    const LONG_ARROW_UP = '<i class="fa fa-long-arrow-up"></i>';
    const MAGIC = '<i class="fa fa-magic"></i>';
    const MAGNET = '<i class="fa fa-magnet"></i>';
    const MAIL_FORWARD = '<i class="fa fa-mail-forward"></i>';
    const MAIL_REPLY = '<i class="fa fa-mail-reply"></i>';
    const MAIL_REPLY_ALL = '<i class="fa fa-mail-reply-all"></i>';
    const MALE = '<i class="fa fa-male"></i>';
    const MAP_MARKER = '<i class="fa fa-map-marker"></i>';
    const MARS = '<i class="fa fa-mars"></i>';
    const MARS_DOUBLE = '<i class="fa fa-mars-double"></i>';
    const MARS_STROKE = '<i class="fa fa-mars-stroke"></i>';
    const MARS_STROKE_H = '<i class="fa fa-mars-stroke-h"></i>';
    const MARS_STROKE_V = '<i class="fa fa-mars-stroke-v"></i>';
    const MAXCDN = '<i class="fa fa-maxcdn"></i>';
    const MEANPATH = '<i class="fa fa-meanpath"></i>';
    const MEDIUM = '<i class="fa fa-medium"></i>';
    const MEDKIT = '<i class="fa fa-medkit"></i>';
    const MEH_O = '<i class="fa fa-meh-o"></i>';
    const MERCURY = '<i class="fa fa-mercury"></i>';
    const MICROPHONE = '<i class="fa fa-microphone"></i>';
    const MICROPHONE_SLASH = '<i class="fa fa-microphone-slash"></i>';
    const MINUS = '<i class="fa fa-minus"></i>';
    const MINUS_CIRCLE = '<i class="fa fa-minus-circle"></i>';
    const MINUS_SQUARE = '<i class="fa fa-minus-square"></i>';
    const MINUS_SQUARE_O = '<i class="fa fa-minus-square-o"></i>';
    const MOBILE = '<i class="fa fa-mobile"></i>';
    const MOBILE_PHONE = '<i class="fa fa-mobile-phone"></i>';
    const MONEY = '<i class="fa fa-money"></i>';
    const MOON_O = '<i class="fa fa-moon-o"></i>';
    const MORTAR_BOARD = '<i class="fa fa-mortar-board"></i>';
    const MOTORCYCLE = '<i class="fa fa-motorcycle"></i>';
    const MUSIC = '<i class="fa fa-music"></i>';
    const NAVICON = '<i class="fa fa-navicon"></i>';
    const NEUTER = '<i class="fa fa-neuter"></i>';
    const NEWSPAPER_O = '<i class="fa fa-newspaper-o"></i>';
    const OPENID = '<i class="fa fa-openid"></i>';
    const OUTDENT = '<i class="fa fa-outdent"></i>';
    const PAGELINES = '<i class="fa fa-pagelines"></i>';
    const PAINT_BRUSH = '<i class="fa fa-paint-brush"></i>';
    const PAPER_PLANE = '<i class="fa fa-paper-plane"></i>';
    const PAPER_PLANE_O = '<i class="fa fa-paper-plane-o"></i>';
    const PAPERCLIP = '<i class="fa fa-paperclip"></i>';
    const PARAGRAPH = '<i class="fa fa-paragraph"></i>';
    const PASTE = '<i class="fa fa-paste"></i>';
    const PAUSE = '<i class="fa fa-pause"></i>';
    const PAW = '<i class="fa fa-paw"></i>';
    const PAYPAL = '<i class="fa fa-paypal"></i>';
    const PENCIL = '<i class="fa fa-pencil"></i>';
    const PENCIL_SQUARE = '<i class="fa fa-pencil-square"></i>';
    const PENCIL_SQUARE_O = '<i class="fa fa-pencil-square-o"></i>';
    const PHONE = '<i class="fa fa-phone"></i>';
    const PHONE_SQUARE = '<i class="fa fa-phone-square"></i>';
    const PHOTO = '<i class="fa fa-photo"></i>';
    const PICTURE_O = '<i class="fa fa-picture-o"></i>';
    const PIE_CHART = '<i class="fa fa-pie-chart"></i>';
    const PIED_PIPER = '<i class="fa fa-pied-piper"></i>';
    const PIED_PIPER_ALT = '<i class="fa fa-pied-piper-alt"></i>';
    const PINTEREST = '<i class="fa fa-pinterest"></i>';
    const PINTEREST_P = '<i class="fa fa-pinterest-p"></i>';
    const PINTEREST_SQUARE = '<i class="fa fa-pinterest-square"></i>';
    const PLANE = '<i class="fa fa-plane"></i>';
    const PLAY = '<i class="fa fa-play"></i>';
    const PLAY_CIRCLE = '<i class="fa fa-play-circle"></i>';
    const PLAY_CIRCLE_O = '<i class="fa fa-play-circle-o"></i>';
    const PLUG = '<i class="fa fa-plug"></i>';
    const PLUS = '<i class="fa fa-plus"></i>';
    const PLUS_CIRCLE = '<i class="fa fa-plus-circle"></i>';
    const PLUS_SQUARE = '<i class="fa fa-plus-square"></i>';
    const PLUS_SQUARE_O = '<i class="fa fa-plus-square-o"></i>';
    const POWER_OFF = '<i class="fa fa-power-off"></i>';
    const PRINT_ = '<i class="fa fa-print"></i>';
    const PUZZLE_PIECE = '<i class="fa fa-puzzle-piece"></i>';
    const QQ = '<i class="fa fa-qq"></i>';
    const QRCODE = '<i class="fa fa-qrcode"></i>';
    const QUESTION = '<i class="fa fa-question"></i>';
    const QUESTION_CIRCLE = '<i class="fa fa-question-circle"></i>';
    const QUOTE_LEFT = '<i class="fa fa-quote-left"></i>';
    const QUOTE_RIGHT = '<i class="fa fa-quote-right"></i>';
    const RA = '<i class="fa fa-ra"></i>';
    const RANDOM = '<i class="fa fa-random"></i>';
    const REBEL = '<i class="fa fa-rebel"></i>';
    const RECYCLE = '<i class="fa fa-recycle"></i>';
    const REDDIT = '<i class="fa fa-reddit"></i>';
    const REDDIT_SQUARE = '<i class="fa fa-reddit-square"></i>';
    const REFRESH = '<i class="fa fa-refresh"></i>';
    const REMOVE = '<i class="fa fa-remove"></i>';
    const RENREN = '<i class="fa fa-renren"></i>';
    const REORDER = '<i class="fa fa-reorder"></i>';
    const REPEAT = '<i class="fa fa-repeat"></i>';
    const REPLY = '<i class="fa fa-reply"></i>';
    const REPLY_ALL = '<i class="fa fa-reply-all"></i>';
    const RETWEET = '<i class="fa fa-retweet"></i>';
    const RMB = '<i class="fa fa-rmb"></i>';
    const ROAD = '<i class="fa fa-road"></i>';
    const ROCKET = '<i class="fa fa-rocket"></i>';
    const ROTATE_LEFT = '<i class="fa fa-rotate-left"></i>';
    const ROTATE_RIGHT = '<i class="fa fa-rotate-right"></i>';
    const ROUBLE = '<i class="fa fa-rouble"></i>';
    const RSS = '<i class="fa fa-rss"></i>';
    const RSS_SQUARE = '<i class="fa fa-rss-square"></i>';
    const RUB = '<i class="fa fa-rub"></i>';
    const RUBLE = '<i class="fa fa-ruble"></i>';
    const RUPEE = '<i class="fa fa-rupee"></i>';
    const SAVE = '<i class="fa fa-save"></i>';
    const SCISSORS = '<i class="fa fa-scissors"></i>';
    const SEARCH = '<i class="fa fa-search"></i>';
    const SEARCH_MINUS = '<i class="fa fa-search-minus"></i>';
    const SEARCH_PLUS = '<i class="fa fa-search-plus"></i>';
    const SELLSY = '<i class="fa fa-sellsy"></i>';
    const SEND = '<i class="fa fa-send"></i>';
    const SEND_O = '<i class="fa fa-send-o"></i>';
    const SERVER = '<i class="fa fa-server"></i>';
    const SHARE = '<i class="fa fa-share"></i>';
    const SHARE_ALT = '<i class="fa fa-share-alt"></i>';
    const SHARE_ALT_SQUARE = '<i class="fa fa-share-alt-square"></i>';
    const SHARE_SQUARE = '<i class="fa fa-share-square"></i>';
    const SHARE_SQUARE_O = '<i class="fa fa-share-square-o"></i>';
    const SHEKEL = '<i class="fa fa-shekel"></i>';
    const SHEQEL = '<i class="fa fa-sheqel"></i>';
    const SHIELD = '<i class="fa fa-shield"></i>';
    const SHIP = '<i class="fa fa-ship"></i>';
    const SHIRTSINBULK = '<i class="fa fa-shirtsinbulk"></i>';
    const SHOPPING_CART = '<i class="fa fa-shopping-cart"></i>';
    const SIGN_IN = '<i class="fa fa-sign-in"></i>';
    const SIGN_OUT = '<i class="fa fa-sign-out"></i>';
    const SIGNAL = '<i class="fa fa-signal"></i>';
    const SIMPLYBUILT = '<i class="fa fa-simplybuilt"></i>';
    const SITEMAP = '<i class="fa fa-sitemap"></i>';
    const SKYATLAS = '<i class="fa fa-skyatlas"></i>';
    const SKYPE = '<i class="fa fa-skype"></i>';
    const SLACK = '<i class="fa fa-slack"></i>';
    const SLIDERS = '<i class="fa fa-sliders"></i>';
    const SLIDESHARE = '<i class="fa fa-slideshare"></i>';
    const SMILE_O = '<i class="fa fa-smile-o"></i>';
    const SOCCER_BALL_O = '<i class="fa fa-soccer-ball-o"></i>';
    const SORT = '<i class="fa fa-sort"></i>';
    const SORT_ALPHA_ASC = '<i class="fa fa-sort-alpha-asc"></i>';
    const SORT_ALPHA_DESC = '<i class="fa fa-sort-alpha-desc"></i>';
    const SORT_AMOUNT_ASC = '<i class="fa fa-sort-amount-asc"></i>';
    const SORT_AMOUNT_DESC = '<i class="fa fa-sort-amount-desc"></i>';
    const SORT_ASC = '<i class="fa fa-sort-asc"></i>';
    const SORT_DESC = '<i class="fa fa-sort-desc"></i>';
    const SORT_DOWN = '<i class="fa fa-sort-down"></i>';
    const SORT_NUMERIC_ASC = '<i class="fa fa-sort-numeric-asc"></i>';
    const SORT_NUMERIC_DESC = '<i class="fa fa-sort-numeric-desc"></i>';
    const SORT_UP = '<i class="fa fa-sort-up"></i>';
    const SOUNDCLOUD = '<i class="fa fa-soundcloud"></i>';
    const SPACE_SHUTTLE = '<i class="fa fa-space-shuttle"></i>';
    const SPINNER = '<i class="fa fa-spinner"></i>';
    const SPOON = '<i class="fa fa-spoon"></i>';
    const SPOTIFY = '<i class="fa fa-spotify"></i>';
    const SQUARE = '<i class="fa fa-square"></i>';
    const SQUARE_O = '<i class="fa fa-square-o"></i>';
    const STACK_EXCHANGE = '<i class="fa fa-stack-exchange"></i>';
    const STACK_OVERFLOW = '<i class="fa fa-stack-overflow"></i>';
    const STAR = '<i class="fa fa-star"></i>';
    const STAR_HALF = '<i class="fa fa-star-half"></i>';
    const STAR_HALF_EMPTY = '<i class="fa fa-star-half-empty"></i>';
    const STAR_HALF_FULL = '<i class="fa fa-star-half-full"></i>';
    const STAR_HALF_O = '<i class="fa fa-star-half-o"></i>';
    const STAR_O = '<i class="fa fa-star-o"></i>';
    const STEAM = '<i class="fa fa-steam"></i>';
    const STEAM_SQUARE = '<i class="fa fa-steam-square"></i>';
    const STEP_BACKWARD = '<i class="fa fa-step-backward"></i>';
    const STEP_FORWARD = '<i class="fa fa-step-forward"></i>';
    const STETHOSCOPE = '<i class="fa fa-stethoscope"></i>';
    const STOP = '<i class="fa fa-stop"></i>';
    const STREET_VIEW = '<i class="fa fa-street-view"></i>';
    const STRIKETHROUGH = '<i class="fa fa-strikethrough"></i>';
    const STUMBLEUPON = '<i class="fa fa-stumbleupon"></i>';
    const STUMBLEUPON_CIRCLE = '<i class="fa fa-stumbleupon-circle"></i>';
    const SUBSCRIPT = '<i class="fa fa-subscript"></i>';
    const SUBWAY = '<i class="fa fa-subway"></i>';
    const SUITCASE = '<i class="fa fa-suitcase"></i>';
    const SUN_O = '<i class="fa fa-sun-o"></i>';
    const SUPERSCRIPT = '<i class="fa fa-superscript"></i>';
    const SUPPORT = '<i class="fa fa-support"></i>';
    const TABLE = '<i class="fa fa-table"></i>';
    const TABLET = '<i class="fa fa-tablet"></i>';
    const TACHOMETER = '<i class="fa fa-tachometer"></i>';
    const TAG = '<i class="fa fa-tag"></i>';
    const TAGS = '<i class="fa fa-tags"></i>';
    const TASKS = '<i class="fa fa-tasks"></i>';
    const TAXI = '<i class="fa fa-taxi"></i>';
    const TENCENT_WEIBO = '<i class="fa fa-tencent-weibo"></i>';
    const TERMINAL = '<i class="fa fa-terminal"></i>';
    const TEXT_HEIGHT = '<i class="fa fa-text-height"></i>';
    const TEXT_WIDTH = '<i class="fa fa-text-width"></i>';
    const TH = '<i class="fa fa-th"></i>';
    const TH_LARGE = '<i class="fa fa-th-large"></i>';
    const TH_LIST = '<i class="fa fa-th-list"></i>';
    const THUMB_TACK = '<i class="fa fa-thumb-tack"></i>';
    const THUMBS_DOWN = '<i class="fa fa-thumbs-down"></i>';
    const THUMBS_O_DOWN = '<i class="fa fa-thumbs-o-down"></i>';
    const THUMBS_O_UP = '<i class="fa fa-thumbs-o-up"></i>';
    const THUMBS_UP = '<i class="fa fa-thumbs-up"></i>';
    const TICKET = '<i class="fa fa-ticket"></i>';
    const TIMES = '<i class="fa fa-times"></i>';
    const TIMES_CIRCLE = '<i class="fa fa-times-circle"></i>';
    const TIMES_CIRCLE_O = '<i class="fa fa-times-circle-o"></i>';
    const TINT = '<i class="fa fa-tint"></i>';
    const TOGGLE_DOWN = '<i class="fa fa-toggle-down"></i>';
    const TOGGLE_LEFT = '<i class="fa fa-toggle-left"></i>';
    const TOGGLE_OFF = '<i class="fa fa-toggle-off"></i>';
    const TOGGLE_ON = '<i class="fa fa-toggle-on"></i>';
    const TOGGLE_RIGHT = '<i class="fa fa-toggle-right"></i>';
    const TOGGLE_UP = '<i class="fa fa-toggle-up"></i>';
    const TRAIN = '<i class="fa fa-train"></i>';
    const TRANSGENDER = '<i class="fa fa-transgender"></i>';
    const TRANSGENDER_ALT = '<i class="fa fa-transgender-alt"></i>';
    const TRASH = '<i class="fa fa-trash"></i>';
    const TRASH_O = '<i class="fa fa-trash-o"></i>';
    const TREE = '<i class="fa fa-tree"></i>';
    const TRELLO = '<i class="fa fa-trello"></i>';
    const TROPHY = '<i class="fa fa-trophy"></i>';
    const TRUCK = '<i class="fa fa-truck"></i>';
    const TRY_ = '<i class="fa fa-try"></i>';
    const TTY = '<i class="fa fa-tty"></i>';
    const TUMBLR = '<i class="fa fa-tumblr"></i>';
    const TUMBLR_SQUARE = '<i class="fa fa-tumblr-square"></i>';
    const TURKISH_LIRA = '<i class="fa fa-turkish-lira"></i>';
    const TWITCH = '<i class="fa fa-twitch"></i>';
    const TWITTER = '<i class="fa fa-twitter"></i>';
    const TWITTER_SQUARE = '<i class="fa fa-twitter-square"></i>';
    const UMBRELLA = '<i class="fa fa-umbrella"></i>';
    const UNDERLINE = '<i class="fa fa-underline"></i>';
    const UNDO = '<i class="fa fa-undo"></i>';
    const UNIVERSITY = '<i class="fa fa-university"></i>';
    const UNLINK = '<i class="fa fa-unlink"></i>';
    const UNLOCK = '<i class="fa fa-unlock"></i>';
    const UNLOCK_ALT = '<i class="fa fa-unlock-alt"></i>';
    const UNSORTED = '<i class="fa fa-unsorted"></i>';
    const UPLOAD = '<i class="fa fa-upload"></i>';
    const USD = '<i class="fa fa-usd"></i>';
    const USER = '<i class="fa fa-user"></i>';
    const USER_MD = '<i class="fa fa-user-md"></i>';
    const USER_PLUS = '<i class="fa fa-user-plus"></i>';
    const USER_SECRET = '<i class="fa fa-user-secret"></i>';
    const USER_TIMES = '<i class="fa fa-user-times"></i>';
    const USERS = '<i class="fa fa-users"></i>';
    const VENUS = '<i class="fa fa-venus"></i>';
    const VENUS_DOUBLE = '<i class="fa fa-venus-double"></i>';
    const VENUS_MARS = '<i class="fa fa-venus-mars"></i>';
    const VIACOIN = '<i class="fa fa-viacoin"></i>';
    const VIDEO_CAMERA = '<i class="fa fa-video-camera"></i>';
    const VIMEO_SQUARE = '<i class="fa fa-vimeo-square"></i>';
    const VINE = '<i class="fa fa-vine"></i>';
    const VK = '<i class="fa fa-vk"></i>';
    const VOLUME_DOWN = '<i class="fa fa-volume-down"></i>';
    const VOLUME_OFF = '<i class="fa fa-volume-off"></i>';
    const VOLUME_UP = '<i class="fa fa-volume-up"></i>';
    const WARNING = '<i class="fa fa-warning"></i>';
    const WECHAT = '<i class="fa fa-wechat"></i>';
    const WEIBO = '<i class="fa fa-weibo"></i>';
    const WEIXIN = '<i class="fa fa-weixin"></i>';
    const WHATSAPP = '<i class="fa fa-whatsapp"></i>';
    const WHEELCHAIR = '<i class="fa fa-wheelchair"></i>';
    const WIFI = '<i class="fa fa-wifi"></i>';
    const WINDOWS = '<i class="fa fa-windows"></i>';
    const WON = '<i class="fa fa-won"></i>';
    const WORDPRESS = '<i class="fa fa-wordpress"></i>';
    const WRENCH = '<i class="fa fa-wrench"></i>';
    const XING = '<i class="fa fa-xing"></i>';
    const XING_SQUARE = '<i class="fa fa-xing-square"></i>';
    const YAHOO = '<i class="fa fa-yahoo"></i>';
    const YELP = '<i class="fa fa-yelp"></i>';
    const YEN = '<i class="fa fa-yen"></i>';
    const YOUTUBE = '<i class="fa fa-youtube"></i>';
    const YOUTUBE_PLAY = '<i class="fa fa-youtube-play"></i>';

    /**
     * @param $icon
     * @param $extra_classes
     * @param bool $with_space
     * @return string|string[]
     */
    public static function custom($icon, $extra_classes = '', $with_space = false)
    {
        if (!strstr($icon, '<i class="fa')) {
            $icon = '<i class="fa ' . $icon  . '"></i>';
        }

        $icon = str_replace('">', ' '.$extra_classes.'">', $icon);

        return ($with_space) ? $icon . '&nbsp;' : $icon;
    }

    /**
     * @param string $version
     * @return string
     */
    public static function fontAwesomeHeadCssLink($version = '4.3.0')
    {
        switch ($version) {
            case '4.7.1':
                $link = '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
                break;
            default:
                $link = '//netdna.bootstrapcdn.com/font-awesome/' . $version . '/css/font-awesome.css';
        }

        return '<link type="text/css" rel="stylesheet" media="screen" href="' . $link . '">';
    }

    /**
     * @return array
     * @throws \ReflectionException
     */
    public static function toArray()
    {
        $mirror = new ReflectionClass(__CLASS__);
        return $mirror->getConstants();
    }
}
