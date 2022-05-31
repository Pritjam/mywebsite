<!DOCTYPE html>
<html>

<body>

<!-- TODO: a js script that sanitizes inputs? -->

    <?php
        $book = fopen("guestbook.txt", "a") or die("Unable to open guestbook for appending!");
        $name = $_POST["name"];
        // fwrite(date("Y-m-d", time()));

        // fwrite("\t ========");
        // fwrite($book, $name);
        // fwrite($book, "\t");
        // $message = $_POST["message"];
        // fwrite($book, $message);
        // fwrite($book, "\n");
        fclose($book);

        header("Location: guestbookview.php");
        exit();
    ?>

</body>

</html>