function openQRCamera(node) {
  var reader = new FileReader();
  reader.onload = function() {
    node.value = "";
    qrcode.callback = function(res) {
      if(res instanceof Error) {
        alert("No SeeFood-QR code found. Make sure the QR code is the only thing in the camera frame.");
      } else {
          //pass over the Unique Store ID
          location.href = "menu.php?usid=" + res;
      }
    };
    qrcode.decode(reader.result);
  };
  reader.readAsDataURL(node.files[0]);
}
