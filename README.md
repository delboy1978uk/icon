icon
====

PHP Class for generating Font Awesome icons.

How to use
----------
First use the namespace:<br />
```
use Del\Icon;
```
Make sure you are using FontAwesome. Stick this in your `<head>` section:<br />
```
<?= Icon::fontAwesomeHeadCssLink(); ?>
```
That will generate the CSS <link> tag:<br />
`<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">`

Simplest use
```
<?= Icon::UNIVERSITY ;?>
```

Adding extra classes
```
<?= Icon::custom(Del\Icon::UNIVERSITY,'fa-5x'); ?>
```

Adding extra classes, and a space(&nbsp;) following it
```
<?= Icon::custom(Del\Icon::UNIVERSITY,'fa-5x',true); ?>
```
