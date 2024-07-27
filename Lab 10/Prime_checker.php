<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Prime Number Checker</title>
 <style>
 input, button {
 width: 50%;
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
 <div class="form-container">
 <h1>Prime Number Checker</h1>
 <form method="post" action="">
 <input type="number" name="number" placeholder="Enter a number" 
required><br><br>
 <button type="submit">Check</button>
 </form>
 <?php
 function is_prime($num) {
 if ($num < 2) {
 return false;
 }
for ($i = 2; $i <= sqrt($num); $i++) {
 if ($num % $i == 0) {
 return false;
 }
 }
return true;
 }
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $number = intval($_POST["number"]);
if (is_prime($number)) {
 echo "<p>$number is a prime number.</p>";
 } else {
 echo "<p>$number is not a prime number.</p>";
 }
 }
 ?>
 </div>
</body>
</html>
