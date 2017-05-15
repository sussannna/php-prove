EL FORMULARIO

<form ACTION="enviar.php" METHOD="POST">
      User<input type="text" name="username" /><br />
      Email<input type="text" name="email" /><br />
      Password<input type="password" name="password"/></br>
      Sex<input type="radio" name="sex" value="F" ></br>
      <input type="radio" name="sexo" value="M"></br>
     Date of Birth<input type="date" value="date_of_birth"></br>
      Languages<select multiple size="4" name="languages">
        <option value="spanish">Spanish</option></br>
        <option value="english">English</option></br>
        <option value="german">German</option></br>
        <option value="french">French</option></br>
        </select>
      Country<select name="country">
        <option value="Spain">Spain</option></br>
        <option value="England">England</option></br>
        <option value="Germany">Germany</option></br>
       <option value="France">France</option></br>
      Rate<input type="checkbox" name="extras" value="excellent">Excelent</br>
      <input type="checkbox" name="extras" value="good">Good</br>
      <input type="checkbox" name="extras" value="bad">Bad</br>
      Captcha:
      Submit<input type="submit" name="send" value="send data">Send data</br>
  </form>

<?php
$username = $_REQUEST[‘username’];
print ($username);
$password = $_REQUEST[‘password];
print ($password);

$sex = $_REQUEST['sex'];
print ($sex);

$date_of_birth= date("d-m-Y", strtotime($row['date_of_birth']));
print ($date_of_birth);

$languages = $_REQUEST['$languages'];
foreach ($languages as $languages => $value) {
print ("$idioma\n");
}
$country =$_REQUEST['country'];
foreach ($country as $country => $value) {
print ("$country");
}
$extras=$_REQUEST['extras'];
foreach ($extras as $extras {
print ("$extras\n");
}
$send = $_REQUEST['$send'];
if ($send) {
print ('Se ha pulsado el botón Enviar');
}

//checked? 
 ?>
