<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Demo | Bild Studio</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body style="background: <?php echo $backgroundColor; ?>; color: <?php echo $textColor; ?>">
<div class="container">
    <div class="row" style="padding-top: 40px">
        <div class="col-md-8">
            <h2 style="color: <?php echo $color; ?>">What is PHP?</h2>
            <p>
                PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.
            </p>
            <p>
                Instead of lots of commands to output HTML (as seen in C or Perl), PHP pages contain HTML with embedded code that does "something" (in this case, output "Hi, I'm a PHP script!"). The PHP code is enclosed in special <a style="color: <?php echo $color; ?>;" href="http://php.net/manual/en/language.basic-syntax.phpmode.php">start and end processing instructions</a> that allow you to jump into and out of "PHP mode."
            </p>
            <a target="_blank" role="button" class="btn btn-lg btn-primary" style="background: <?php echo $color; ?>; border-color: #fff" href="http://php.net/manual/en/intro-whatis.php">Read more</a>
        </div>
        <div class="col-md-4">
            <h2>Color: <span style="color:<?php echo $color; ?>"><?php echo $color; ?></span></h2>


            <div class="btn-group-vertical" role="group">
                <a href="?dark=true" role="button" class="btn btn-default">Dark theme</a>
                <a href="?dark=false" role="button" class="btn btn-default">Light theme</a>
            </div>

            <a href="" role="button" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span> </a>
        </div>
    </div>
</div>
</body>
</html>