<!--[NOTE: before executing php file create a blank file named info.txt]
  Execution process: 1st open Php file in browser and type the information in the Input Box And then click submit.
next open text file, Whatever you typed in input box that will be displayed in the Text file
-->
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Form Input and Storage</title>
 <style>
 input, button {
 width: 80%;
 padding: 10px;
 margin: 10px 0;
 border: 1px solid #ccc;
 border-radius: 4px;
 font-size: 16px;
 }
 button {
 background-color: lightgreen;
 cursor: pointer;
 }
 button:hover {
 background-color: #45a049;
 }
 .form-container {
 width: 300px;
 margin: auto;
 background: #f0f0f0;
 padding: 20px;
 border-radius: 8px;
 box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
 text-align: center;
 }
 h1 {
 font-size: 24px;
 }
 </style>
</head>
<body>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $info = htmlspecialchars($_POST["info"]);
 $info_file = fopen("info.txt", "w");
 fwrite($info_file, $info);
 fclose($info_file);
 }
 ?>
 <div class="form-container">
 <h1>Personal Information</h1>
 <form method="POST">
 <input type="text" name="info" placeholder="Enter your information 
here">
 <div>
 <button type="submit">Save Data</button>
 </div>
 </form>
 <?php
 $file = fopen('info.txt', 'r');
 if ($file) {
 while (($line = fgets($file)) !== false) {
 echo "<p>$line</p>";
 }
 fclose($file);
 }
 ?>
 </div>
</body>
</html>
