<!DOCTYPE html>
<html>

<head>
	<title>Pritjam</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/navbar.css">
</head>

<body>
	<div class="header">
		<h1>Prithvi Jamadagni's Webpage</h1>
		<p class="motd">Howdy, and welcome to my website!</p>
	</div>

	<!-- Site navigation menu -->
	<ul class="navbar">
		<li><a href="../index.html">Home</a></li>
		<li><a href="../games.html">My Games</a></li>
		<li><a href="../projects.html">Projects</a></li>
		<li><a href="../index.html">About Me</a></li>
	</ul>

	<div class="section">
        <table>
            <tr>
                <th>Name</th>
                <th>Message</th>
                <th>Timestamp</th>
            </tr>
		    <?php
                $book = fopen("guestbook.txt", "r") or die("Unable to open guestbook for reading!");
                while(!feof($book)) {
                    $output = "<tr><td>";
                    $line = fgetss($book);
                    $toks = explode("\t", $line);
                    if(count($toks) != 3) {
                        continue;
                    }
                    $output .= $toks[1];
                    $output .= "</td><td>";
                    $output .= $toks[2];
                    $output .= "</td><td>";
                    $output .= $toks[0];
                    $output .= "</td></tr>";
                    echo $output;
                }
                fclose($book);
            ?>
        </table>
	</div>
</body>

</html>