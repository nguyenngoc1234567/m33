</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('maytinh') }}" method = "POST" >
    @csrf
  <label for="fname">số thứ nhất:</label><br>
  <input type="text" id="fname" name="number1"><br>
  <select name="pheptinh">
  <option value="+">cộng</option>
  <option value="-">trừ</option>
  <option value="*">nhân</option>
  <option value="/" >chia</option>
</select><br>
  <label for="lname">số thứ hai:</label><br>

  <input type="text" id="lname" name="number2" ><br><br>
  <input type="submit" value="Submit">

</form>