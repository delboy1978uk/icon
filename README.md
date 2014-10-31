icon
====

PHP Class for generating Font Awesome icons.

How to use
----------

Make sure you are using FontAwesome. Stick this in your `<head>` section:<br />
<?= \Del\Icon::fontAwesomeHeadCssLink(); ?>
That will generate the CSS <link> tag:
`<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">`

Simplest use
<?= \Del\Icon::UNIVERSITY ;?>

Adding extra classes
<?= \Del\Icon::custom(Del\Icon::UNIVERSITY,'fa-5x'); ?>

Adding extra classes, and a space(&nbsp;) following it
<?= \Del\Icon::custom(Del\Icon::UNIVERSITY,'fa-5x',true); ?>

