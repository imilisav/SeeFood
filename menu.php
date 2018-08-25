<?php include("base.html") ?>
<?php include("database.php") ?>

<?php
    // Get the database object
    $db = new DB;
    if (!$db) {
        echo "Error (DB): Database has not initialized correctly.";
    }

    // Get the store name, enforce it to be only one store name
    $sql = "SELECT DISTINCT store_name FROM stores WHERE USID='".pg_escape_string($_GET['USID'])."'";
    $ret = $db->query($sql);
    $store_name = "";
    while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        $store_name = $row['store_name'];
    }

    // Get the items from the menu
    $sql = "SELECT * FROM MenuItems WHERE USID='".pg_escape_string($_GET['USID'])."'";
    $ret = $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        //get the menu items...
    }

?>
<h1> {{ Store }} Menu </h1>
