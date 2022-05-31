<!DOCTYPE html>
<html>

<body>

    <?php
        $book = fopen("guestbook.txt", "a") or die("Unable to open file!");
        $name = $_POST["name"];
        fwrite($book, $name);
        fwrite($book, "\t");
        $message = $_POST["message"];
        fwrite($book, $message);
        fwrite($book, "\n");
        fclose($book);
    ?>
    
    <script>
        window.history.back();
    </script>

</body>

</html>