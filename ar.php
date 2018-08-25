<?php include("base.html") ?>
<?php include("database.php") ?>

<div id="ar-content">
<?php
    $db = new DB;
    if (!$db) {
        echo "Error (DB): Database has not initialized correctly.";
    }

    $umiid = $_GET['umiid'];
    $statement =<<<EOF
      SELECT object_path FROM MenuItems WHERE umiid="$umiid";
EOF;

    $return = $db->query($statement);
    $object_path = "";
    while($row = $return->fetchArray(SQLITE3_ASSOC)) {
        $object_path = $row['object_path'];
    }
?>
    <a-scene embedded arjs>
        <a-marker preset="hiro">
            <a-obj-model src="../assets/img/<?php echo $object_path ?>"></a-obj-model>
        </a-marker>
  	    <a-entity camera></a-entity>
    </a-scene>
</div>
