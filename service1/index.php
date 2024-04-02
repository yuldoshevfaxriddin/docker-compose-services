<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta author="Yuldoshev Faxriddin">
    <title>Docker </title>
    <style>
    * {
    box-sizing: border-box;
    }

    /* Create two equal columns that floats next to each other */
    .column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }
</style>
</head>
<body>
    <h2>This is service 1</h4>
    <h4>Bu servis 2 xizmatidagi api qismi</h6>
    <table border=3>
        <thead>
            <tr><th>Ismi</th><th>Yoshi</th><th>Millati</th></tr>
        </thead>
        <?php
            $api = json_decode(file_get_contents('http://service2/api.php'));
            foreach($api as $a){
                echo "<tr><td>{$a->name}</td><td>{$a->age}</td><td>{$a->nation}</td></tr>";
            }
            ?>
    </table>
    <div class="row">
    <div class="column" >
        <h4>Bu servis 1 server info</h6>
        <ul>
            <?php
                $info = $_SERVER;
                foreach($info as $k=>$v){
                    echo "<li>".$k." ".$v."</li>";
                }
            ?>
        </ul>
        </div>
        <div class="column" >
        <h4>Bu servis 2 server info</h6>
        <ul>
            <?php
                $info = json_decode(file_get_contents('http://service2/info.php'));
                foreach($info as $k=>$v){
                    echo "<li>".$k." ".$v."</li>";
                }
            ?>
        </ul>
        <footer>&copy Yuldoshev Faxriddin</footer>
        </div>
    </div>

</body>
</html>