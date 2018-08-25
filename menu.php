<?php include("base.html") ?>
<?php include("database.php") ?>

<div id="menu-content">
<?php
    // Get the database object
    $db = new DB;
    if (!$db) {
        echo "Error (DB): Database has not initialized correctly.";
    }

    // Get the store name, enforce it to be only one store name
    $usid = $_GET['usid'];
    $sql =<<<EOF
      SELECT name FROM Restaurants WHERE usid="$usid";
EOF;
    $ret = $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        echo "<h1>" . $row['name'] . "&nbsp;Menu</h1>";
    }
?>
<?php
    // Get the items from the menu
    $sql =<<<EOF
      SELECT * FROM MenuItems WHERE usid="$usid";
EOF;
    $ret = $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        echo "<div class='mui-panel' onclick='scanAR(\"" . $row['umiid'] . "\")'>
            <h2>" . $row['name'] . "</h2>
            <p>" . $row['description'] . "</p>
        </div>";
    }
?>
</div>
