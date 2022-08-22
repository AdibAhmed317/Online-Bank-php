function validateForm() {
  let username = document.getElementById('username').value;
  let userPhone = document.getElementById('userPhone').value;
  let userEmail = document.getElementById('userEmail').value;
  let userNid = document.getElementById('userNid').value;
  let dob = document.getElementById('dob').value;
  let userPermanentAdd = document.getElementById('userPermanentAdd').value;
  let userTemporaryAdd = document.getElementById('userTemporaryAdd').value;
  let userAreaCode = document.getElementById('userAreaCode').value;
  let userPassword = document.getElementById('userPassword').value;
  let userConfirmPassword = document.getElementById(
    'userConfirmPassword'
  ).value;
  // let userGender = document.getElementById('userGender').value;
  // let accountType = document.getElementById('accountType').value;

  if (username == '') {
    document.getElementById('usernameP').innerHTML = 'Name must be filled out';
    return false;
  } else if (userPhone == '') {
    document.getElementById('userPhoneP').innerHTML =
      'Phone must be filled out';
    return false;
  } else if (userEmail == '') {
    document.getElementById('userEmailP').innerHTML =
      'Email must be filled out';
    return false;
  } else if (userNid == '') {
    document.getElementById('userNidP').innerHTML = 'Nid must be filled out';
    return false;
  } else if (dob == '') {
    document.getElementById('dobP').innerHTML =
      'Date of Birth must be filled out';
    return false;
  } else if (userPermanentAdd == '') {
    document.getElementById('userPermanentAddP').innerHTML =
      'Address must be filled out';
    alert('Address must be filled out');
    return false;
  } else if (userTemporaryAdd == '') {
    document.getElementById('userTemporaryAddP').innerHTML =
      'Address must be filled out';
    return false;
  } else if (userAreaCode == '') {
    document.getElementById('userAreaCodeP').innerHTML =
      'Area code must be filled out';
    return false;
  } else if (userPassword == '') {
    document.getElementById('userPasswordP').innerHTML =
      'This section must be filled out';
    return false;
  } else if (userConfirmPassword == '') {
    document.getElementById('userConfirmPasswordP').innerHTML =
      'This section must be filled out';
    return false;
  } else if (userPassword != userConfirmPassword) {
    alert('Password did not matched!');
  }
}
