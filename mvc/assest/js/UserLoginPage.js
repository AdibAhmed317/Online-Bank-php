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
