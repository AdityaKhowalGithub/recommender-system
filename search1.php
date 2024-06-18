<html>

<head>
    <title>My Search</title>
    <style>
        h1 {
            color: #4e2b8e;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212;
            color: #ffffff;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        form {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 70%;
            padding: 10px;
            background: #333;
            color: #fff;
            border: 1px solid #555;
        }

        input[type="submit"] {
            padding: 10px 15px;
            background: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #555;
        }

        p {
            line-height: 1.6;
        }
    </style>

</head>

<body>

    <div class="container">

        <h1>My Search</h1>

        <h2>About this page</h2>

        <p>Please fill this out (what the collection is about)</p>

        <p>sample queries</p>

        <form action="search1.php" method="post">
            <input type="text" size=40 name="search_string" value="<?php echo $_POST["search_string"]; ?>" />
            <input type="submit" value="Search" />
        </form>

        <?php
        if (isset($_POST["search_string"])) {
            $search_string = $_POST["search_string"];

            /* file_put_contents("queries.txt", $search_string . "\n", FILE_APPEND); */
            $input_file = fopen("queries.txt", "w"); 
            fwrite($input_file, $search_string));
            fclose($input_file);

            exec("ls | nc -u 127.0.0.1 10036");
            sleep(3);

            $stream = fopen("output", "r");

            $line = fgets($stream);

            while (($line = fgets($stream)) != false) {
                $clean_line = preg_replace('/\s+/', ',', $line);
                $record = explode("./", $clean_line);
                $line = fgets($stream);
                echo "<a href=\"http://$record[1]\">" . $line . "</a><br/>\n";
            }

            fclose($stream);

            exec("rm output");
        } else {
            echo "no search strings found.";
        }
        ?>
    </div>
</body>

</html>
