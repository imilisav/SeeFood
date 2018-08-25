<?php
    class DB extends SQLite3 {
      function __construct() {
         $this->open('database.db');
      }
    }

//Error checking
$db = new DB();
if(!$db) {
  echo $db->lastErrorMsg();
}

// ================= CREATE THE TABLES ---- NEED ONLY FOR INIT ================
//    $sql =<<<EOF
//       CREATE TABLE Restaurants
//       (id  INTEGER PRIMARY KEY AUTOINCREMENT,
//       usid VARCHAR(255) NOT NULL,
//       name VARCHAR(140) NOT NULL,
//       address VARCHAR(50) NOT NULL);
// EOF;
//
//    $ret = $db->exec($sql);
//    if(!$ret){
//       echo $db->lastErrorMsg();
//    } else {
//       echo "Restaurants Table created successfully\n";
//    }
//
//    $sql =<<<EOF
//       CREATE TABLE MenuItems
//       (id INTEGER PRIMARY KEY AUTOINCREMENT,
//       umiid VARCHAR(255) NOT NULL,
//       usid  VARCHAR(255) NOT NULL,
//       name  TEXT NOT NULL,
//       description VARCHAR(255) NOT NULL,
//       object_path VARCHAR(255) NOT NULL,
//       FOREIGN KEY(usid) REFERENCES Restaurants(usid));
// EOF;
//
//     $ret = $db->exec($sql);
//     if(!$ret){
//        echo $db->lastErrorMsg();
//     } else {
//        echo "menuitems Table created successfully\n";
//     }
// ============================================================================

// ================= INSERT INTO TABLES ================
// $sql =<<<EOF
//       INSERT INTO Restaurants (id,usid,name,address)
//       VALUES (1, '34e13152-d53c-410d-9a74-665aa9d2a65c', 'Pizza Pizza', '826 Yonge St, Toronto, ON M4W 2H1');
//
//       INSERT INTO Restaurants (id,usid,name,address)
//       VALUES (2, 'e7ea7365-f8cf-4964-b9b3-60750957d340', 'Dessert Lady', '12 Cumberland St, Toronto, ON M4W 1J5');
//
//       INSERT INTO MenuItems (id, umiid, usid, name, description, object_path)
//       VALUES (1, '8e894756-54fe-4ad0-8922-f4cf5dce2b57', '34e13152-d53c-410d-9a74-665aa9d2a65c', '10" Pizza With Drink', 'Build your own 10" pizza with your favourite toppings and get a free drink as well! 8.99', '../assets/img/10_inch_pizza.obj');
//
//       INSERT INTO MenuItems (id, umiid, usid, name, description, object_path)
//       VALUES (2, 'a4c02ab6-f49e-40dc-9f58-c83169d575e5', 'e7ea7365-f8cf-4964-b9b3-60750957d340', 'Wedding Cake', 'Make your day special with one of our hand crafted cakes. Prices vary.', '../assets/img/wedding_cake.obj');
// EOF;

    // $ret = $db->exec($sql);
    // if(!$ret){
    //    echo $db->lastErrorMsg();
    // } else {
    //    echo "menuitems Table created successfully\n";
    // }

// $sql =<<<EOF
//     UPDATE MenuItems SET object_path = "10_inch_pizza.obj" WHERE id=1;
//     UPDATE MenuItems SET object_path = "wedding_cake.obj" WHERE id=2;
// EOF;
//
// $ret = $db->exec($sql);
// if(!$ret){
//    echo $db->lastErrorMsg();
// } else {
//    echo "menuitems Table updated successfully\n";
// }

// $umiid = "8e894756-54fe-4ad0-8922-f4cf5dce2b57";
// $sql =<<<EOF
//   SELECT * FROM MenuItems WHERE umiid="$umiid";
// EOF;
//
// $return = $db->exec($sql);
// while($row = $return->fetchArray(SQLITE3_ASSOC)) {
//     echo $row['object_path'];
// }

$db->close();
