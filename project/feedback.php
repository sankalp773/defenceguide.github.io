<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: sans-serif;display: flex;background-image:url(https://images.pexels.com/photos/1242348/pexels-photo-1242348.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #0066ff;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #0052cc;
}

.container {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 20px;
  width:40%;
  height:80%;
  margin:auto;
  margin-top:5%;
}
</style>
<script>
function validateForm(){
	let x=document.forms["f_form"]["fname"].value;
	let y=document.forms["f_form"]["eml"].value;
	
	if (x=="" || y=="" ){
		alert('All fields must be filled out');
		return false;
	}
}
</script>
</head>
<body>


<div class="container">
  <h3>Feedback Form</h3>
  <form name="f_form"action="feeds.php" onsubmit="return validateForm()" method="post">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." required>

    <label for="lname">Email</label>
    <input type="text" id="eml" name="eml" placeholder="Your email.." required>

    <label for="state">State/UT</label>
    <select id="state" name="state">
      <option value="Uttrakhand" required>Uttrakhand</option>
      <option value="New Delhi">New Delhi</option>
      <option value="Punjab">Punjab</option>
    </select>

    <label for="subject" required>Feedback</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>