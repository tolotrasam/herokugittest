<?php
require 'session.php';
?>
<!--<meta http-equiv="refresh" content="0; url=app" />-->
<html>
<head>
    <title>Tolotra | Welcome to your new app!</title>
    <style type="text/css">
        body {
            background-color: white;
            color: #333333;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 36px;
            line-height: 1;
            font-size: 14px;
        }

        .section {
            margin-bottom: 36px;
        }

        .section.friendly {
            color: #222222;
        }

        .section.friendly h1 {
            font-size: 26px;
            background-color: #dad8e4;
            padding: 18px 22px 15px 22px;
            margin: 0;
            overflow: hidden;
        }

        .section.friendly h1 strong {
            display: inline-block;
            float: left;
        }

        .section.friendly h1 small {
            display: inline-block;
            float: right;
            text-align: right;
            font-size: 18px;
            padding-top: 4px;
            color: #333333;
        }

        .section.friendly .article {
            border: 4px solid #dad8e4;
            padding: 24px 18px 18px 18px;
        }

        .section.friendly .article h3 {
            font-size: 20px;
            margin: 0 0 18px 0;
        }

        .section.friendly .article a {
            color: #6b6ceb;
        }

        .section.friendly .article a:visited {
            color: #1d1d3b;
        }

        .section.friendly .article p {
            font-size: 14px;
        }

        .section.friendly .article ul {
            list-style-type: square;
        }

        .section.original {
            background-color: #eeeeee;
            color: #444444;
        }

        .section.original h2 {
            background-color: #dddddd;
            margin: 0;
            padding: 18px 22px 18px 22px;
            font-size: 20px;
        }

        .section.original pre {
            margin: 0;
            padding: 18px 22px 18px 22px;
            overflow: auto;
            font-family: monaco, monospaced;
        }

        .section.original pre code {
            display: block;
            font-size: 11px;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="section friendly">
        <h1><strong>Heroku | Welcome to your new app!</strong></h1>
        <div class="article">
            <p>Refer to the <a href="//devcenter.heroku.com/">documentation</a> if you need help deploying.</p>
        </div>
	    <?php
	    /**
	     * Created by PhpStorm.
	     * User: Tolotra Samuel
	     * Date: 11/04/2017
	     * Time: 20:56
	     */

	    require 'app/config.php';

	    $sql = "SELECT essay_id, essay_title FROM essay";

	    $result = $conn->query( $sql );
	    echo '<ul>';
	    echo '<li><a href = "essay.php">New Essay</a></li>';
	    echo'<br>';
	    while ( $row = mysqli_fetch_array( $result ) ) {

		    $id    = $row['essay_id'];
		    $title = $row['essay_title'];
		    echo '<li><a href = "app/essay.php?essay_id=' . $id . '">' . $title . '</a></li>';

	    }

	    echo '</ul>';

	    ?>

    </div>
</div>

</body>
</html>


