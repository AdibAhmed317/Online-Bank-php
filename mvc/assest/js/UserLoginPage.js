function validateForm() {
  let userNid = document.getElementById('userNid').value;
  let userPassword = document.getElementById('userPassword').value;

  if (userNid == '') {
    document.getElementById('userNidP').innerHTML =
      'Account Number must be filled out';
    return false;
  } else if (userPassword == '') {
    document.getElementById('userPasswordP').innerHTML =
      'Password must be filled out';
    return false;
  }
}

// function ajax() {
//   let userNid = document.getElementById('userNid').value;
//   let userPassword = document.getElementById('userPassword').value;

//   let data = {
//     userNid: userNid,
//     userPassword: userPassword,
//   };

//   let json = JSON.stringify(data);

//   let xhttp = new XMLHttpRequest();
//   xhttp.open('POST', '../../controller/UserLoginCheck.php', true);
//   xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
//   xhttp.send('data=' + json);

//   xhttp.onreadystatechange = function () {
//     if (this.readyState == 4 && this.status == 200) {
//       if (this.responseText == 'success') {
//         window.location.href =
//           '../../controller/UserLoginCheck.php?accNumber=' + userNid;
//       } else if (this.responseText == 'failed') {
//         alert('Invalid Credentials');
//       } else if (this.responseText == 'null') {
//         alert('null');
//       }
//     }
//   };
// }

//
