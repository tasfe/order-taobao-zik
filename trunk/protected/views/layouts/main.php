<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="language" content="en"/>

<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
      media="screen, projection"/>
<![endif]-->


<title>Người Lạc Quan Nhất</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<style type="text/css">

/*
This was made by João Sardinha
Visit me at http://johnsardine.com/

The table style doesnt contain images, it contains gradients for browsers who support them as well as round corners and drop shadows.

It has been tested in all major browsers.

This table style is based on Simple Little Table By Orman Clark,
you can download a PSD version of this at his website, PremiumPixels.
http://www.premiumpixels.com/simple-little-table-psd/

PLEASE CONTINUE READING AS THIS CONTAINS IMPORTANT NOTES

*/

/*
Im reseting this style for optimal view using Eric Meyer's CSS Reset - http://meyerweb.com/eric/tools/css/reset/
------------------------------------------------------------------ */
body, html {
    height: 100%;
}

dl, dt, dd, ol, ul, li,
tbody, tfoot, thead, tr, th, td {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}

body {
    line-height: 1;
}

ol, ul {
    list-style: none;
}

blockquote, q {
    quotes: none;
}

blockquote:before, blockquote:after, q:before, q:after {
    content: '';
    content: none;
}

:focus {
    outline: 0;
}

del {
    text-decoration: line-through;
}

table {
    border-spacing: 0;
}

/* IMPORTANT, I REMOVED border-collapse: collapse; FROM THIS LINE IN ORDER TO MAKE THE OUTER BORDER RADIUS WORK */

/*------------------------------------------------------------------ */

/*This is not important*/
body {
    font-family: Arial, Helvetica, sans-serif;
    background: url(background.jpg);
    margin: 0 auto;
    width: 1000px;
}

a:link {
    color: #ffffff;
    font-weight: bold;
    text-decoration: none;
}

a:visited {
    color: #ffffff;
    font-weight: bold;
    text-decoration: none;
}

a:active,
a:hover {
    color: #ffffff;
    text-decoration: underline;
}

/*
Table Style - This is what you want
------------------------------------------------------------------ */
table a:link {
    color: #666;
    font-weight: bold;
    text-decoration: none;
}

table a:visited {
    color: #999999;
    font-weight: bold;
    text-decoration: none;
}

table a:active,
table a:hover {
    color: #bd5a35;
    text-decoration: underline;
}

table {

    font-family: Arial, Helvetica, sans-serif;
    color: #666;
    font-size: 12px;
    text-shadow: 1px 1px 0px #fff;
    background: #eaebec;
    margin: 20px;
    margin-left: 25%;
    border: #ccc 1px solid;

    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;

    -moz-box-shadow: 0 1px 2px #d1d1d1;
    -webkit-box-shadow: 0 1px 2px #d1d1d1;
    box-shadow: 0 1px 2px #d1d1d1;
}

table th {
    padding: 21px 25px 22px 25px;
    border-top: 1px solid #fafafa;
    border-bottom: 1px solid #e0e0e0;

    background: #ededed;
    background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
    background: -moz-linear-gradient(top, #ededed, #ebebeb);
}

table th:first-child {
    text-align: left;
    padding-left: 20px;
}

table tr:first-child th:first-child {
    -moz-border-radius-topleft: 3px;
    -webkit-border-top-left-radius: 3px;
    border-top-left-radius: 3px;
}

table tr:first-child th:last-child {
    -moz-border-radius-topright: 3px;
    -webkit-border-top-right-radius: 3px;
    border-top-right-radius: 3px;
}

table tr {
    text-align: center;
    padding-left: 20px;
}

table tr td:first-child {
    text-align: left;
    padding-left: 20px;
    border-left: 0;
}

table tr td {
    padding: 18px;
    border-top: 1px solid #ffffff;
    border-bottom: 1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;

    background: #fafafa;
    background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
    background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}

table tr.even td {
    background: #f6f6f6;
    background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
    background: -moz-linear-gradient(top, #f8f8f8, #f6f6f6);
}

table tr:last-child td {
    border-bottom: 0;
}

table tr:last-child td:first-child {
    -moz-border-radius-bottomleft: 3px;
    -webkit-border-bottom-left-radius: 3px;
    border-bottom-left-radius: 3px;
}

table tr:last-child td:last-child {
    -moz-border-radius-bottomright: 3px;
    -webkit-border-bottom-right-radius: 3px;
    border-bottom-right-radius: 3px;
}

table tr:hover td {
    background: #f2f2f2;
    background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
    background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}

.header-page p {
    margin-top: 6px;
}

.header-page h2 {
    margin-top: 3px;
}

.header-page {
    text-align: center;
}

.btn {
    background: #3498db;
    background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
    background-image: -moz-linear-gradient(top, #3498db, #2980b9);
    background-image: -ms-linear-gradient(top, #3498db, #2980b9);
    background-image: -o-linear-gradient(top, #3498db, #2980b9);
    background-image: linear-gradient(to bottom, #3498db, #2980b9);
    -webkit-border-radius: 28;
    -moz-border-radius: 28;
    border-radius: 28px;
    font-family: Arial;
    color: #ffffff;
    font-size: 100px;
    padding: 10px 20px 10px 20px;
    text-decoration: none;

}

.btn:hover {
    background: #3cb0fd;
    background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
    background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
    text-decoration: none;
}

.numpost {
    color: #000099;
    font-size: 40px;
    font-style: normal;
    text-align: center;
}

.numscore {
    color: #006600;
    font-size: 40px;
    font-style: normal;
    text-align: center;
}


</style>

<meta property="fb:app_id" content="1384479598504168"/>
<meta property="og:type" content="article"/>
<meta property="og:site_name" content="mobay.vn"/>
<meta property="og:title" content="Ứng dụng hay: Xem người Lạc Quan Nhất Facebook Bạn"/>
<meta property="og:image" content="http://mobay.vn/images/b.jpg"/>
<meta property="og:url" content="https://mobay.vn/happy/happy"/>
<meta property="og:description"
      content="Hãy cùng chúng tôi làm bài kiểm tra xem người nào lạc quan nhất Facebook của bạn :D"/>

</head>

<body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=1384479598504168";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<?php echo $content; ?>


</body>
</html>
