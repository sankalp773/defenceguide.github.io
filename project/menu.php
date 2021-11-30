<table width="100%">
<tr>
     <th> <div class="heading">
	 <img src="https://lh3.googleusercontent.com/HaalnGp1lbzmhe5JLEUnjOprdeqcxX4nafl89ipzIE1aN4XdXznCDPDJQmGFtGTS8PSRP6xMt_F6t4ZycFy-Zycfldtfqco8MMokTVL9tJ4t01EfmDxf4g2mYFQ6DnkcKCq1MT6-eeoj3I3BlsAbyKQbJGwomGtJGkIqSnfZZfM7kzQqGFzkSUNgz64wn-lTQeVXhyuT5qAHQ1-H9r89mgYRhM4gqujmCCwmV0PnkjgM7MPrFLHsFRePU8d8IA1_LlwA4HAnrtSjYt0xcnuz8XX9z30FiRQfTByX6oEfVuqwl2mrN7HCYsnq3yVV5lf-hKccgu06q3CjTCW3uo1yWvHEWzqW2Iedxa2ZvXT9RwyeuPJu4AG5vZeOQTSQS0Y-8O3_nx2n02EM_dHgaUBZfvhJjEyINjA6rBQo3GsTV2HwVIRv8KzX2rJbWHEkgaPeQxZo2nIMyXNCKHsKdXJgV2fXfPveFa8SoGpdYdJXsQ8_yUySXCmzUzKOaosD078R8ONFGifzAfwNAs6GUv_-gRgSMUbExsz15__A3rMKhQLjLnCfg5DJKxM0XPchfnArXtuht5abo73dUAgkOdfcnvqSXYU2ei1Nm-GrzhVjCa20qhchG5EzPiOB6HAsgVLqhbVQaBF5mkE1cLkKoHVBq9XpS9Vy_U10Q8prmtKZBFVpyi8bGKWMSdDkOZWeH1XtdFPfYQGqX4k_3b3EeIlX4d77CQJ43cixrO80Ardz11KhVhSc6CssxQpC_vcgHSdD-VISeXoTjPtCiNqU-A=s500-no?authuser=0" style="text-align:center;" width="50px" height="40px" alt="logo">
	
   <a href="index.php">DEFENCE GUIDE</a><br>
    </div></th>
    <th><div class="dropdown">
<button class="dropbtn"><b>Choice of force <b></button>
 <div class="dropdown-content">
   <a href="army.php" >Army</a><br>
   <a href="navy.php" >Navy</a><br>
   <a href="airforce.php" >Airforce</a><br>
   </div>
   </div></th>
   
   <th><div class="dropdown">
<button class="dropbtn"><b>Library <b></button>
 <div class="dropdown-content">
   <a href="techmat.php">written exam material</a><br>
   <a href="ugmat.php">ssb material</a><br>
   <a href="medmat.php">youtube playlists</a><br>
   </div>
   </div></th>
   <th>
   <a href="notifs.php" target="_blank">Notifications</a><br></th>
   <th>
    <button class="open-button" onclick="openForm()"><b>Login<b></button>
	<div class="form-popup" id="myForm">
	<form action="userinfo.php" class="form-container" method="post">
	<h1>Login</h1>
	
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form></div>
  <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
   </th>
   <th><form class="srch" action="search.php" method="POST">
<input type="text" placeholder="search.." name="query">
<button type="submit" name="submit" onclick="openresult()"><i class="fa fa-search"></i></button>
</form>

   </th>
   </tr>
   </table>