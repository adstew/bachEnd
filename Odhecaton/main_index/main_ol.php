<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Odhecaton</title>
        <meta charset="UTF-8">
        <link href="style_ol.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <div id="main">
        <div id="header">
            <h1>Odhecaton Database</h1>
        </div>
        <div id="middle">
            <div id="menu">
                </br><h2 style="font-size:18px;">INSERT COMPOSER</h2>
                <form action="insert_music.php" method="POST" style="padding-left:4px;">
                    <input type="text" name="c_name" placeholder="Full Name">
                    <input type="text" name="c_nat" placeholder="Nationality">
                    <input type="text" name="c_time" placeholder="Time Period">
                    <input type="text" name="c_birth" placeholder="Birth Year">
                    <input type="text" name="c_death" placeholder="Death Year">
                    </br><button type="submit" name="in_button">INSERT</button>
                </form>
                </br><h2 style="font-size:18px;">DELETE COMPOSER</h2>
                <form action="delete_music.php" method="POST" style="padding-left:4px;">
                    <input type="text" name="c_nameD" placeholder="Full Name">
                    </br><button type="submit" name="del_button">DELETE</button>
                </form>
                </br><h2 style="font-size:18px;">UPDATE COMPOSER</h2>
                <form action="update_music.php" method="POST" style="padding-left:4px;">
                    <input type="text" name="c_nameU" placeholder="Current Name">
                    <input type="text" name="c_newU" placeholder="New Name">
                    </br><button type="submit" name="up_button">UPDATE</button>
                </form>
            </div>
            <div id="sheets">
                <embed name="sheet_display" src="../music_files/seikilos" width="100%" height="816px" alt="pdf" />
            </div>
            <div id="query">
                <div id="search">
                    <form action="search_music.php" method="POST">
                        <input type="text" name="search_bar" placeholder="Search...">
                    </form>
                    <ul class="nav">
                        <li><a onclick="set_search('period')" id="period">Period</a></li>
                        <li><a onclick="set_search('composer')" id="composer">Composer</a></li>
                        <li><a onclick="set_search('title')" id="title">Title</a></li>
                    </ul>
                </div>
                <div id="results"><?php include 'search_music.php';?></div>
                <div class="bar">
                    <h2 align="center">Featured Composers</h2>
                    <p style="float:left">Name</p><p style="float:right">Period</p>
                </div>
                <div id="info">
                    <?php include 'c_bytime.php'; ?>
                </div>
            </div>
        </div>
        <div id="footer">
            <?php include 'old_new.php'; ?>
        </div>
    </div>
    <script type="text/javascript">
        var i = false;
        function set_search(search_name) {
            if (i) {
                document.getElementById('period').style.backgroundColor = "rgb(29, 29, 29)";
                document.getElementById('composer').style.backgroundColor = "rgb(29, 29, 29)";
                document.getElementById('title').style.backgroundColor = "rgb(29, 29, 29)";
            }
                i = true;
                document.getElementById(search_name).style.backgroundColor = "rgb(138, 73, 73)";
        }
        document.getElementById("title").click();
    </script>
</body>
</html>