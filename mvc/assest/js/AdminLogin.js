function ajax() {
  let adminName = document.getElementById('adminName').value;
  let adminEmail = document.getElementById('adminEmail').value;
  let adminId = document.getElementById('adminId').value;
  let adminPassword = document.getElementById('adminPassword').value;

  let data = {
    adminName: adminName,
    adminEmail: adminEmail,
    adminId: adminId,
    adminPassword: adminPassword,
  };

  let json = JSON.stringify(data);

  let xhttp = new XMLHttpRequest();
  xhttp.open('GET', '../../controller/AdminLoginCheck.php?data=', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.send('data' + json);

  xhttp.onreadystatechange = function () {
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementsByTagName('h3')[0].innerHTML = this.responseText;
        document.getElementsByTagName('h1')[0].innerHTML =
          '-----------------------------------------------------------------------------------------------------------';
      }
    };
  };
}
