<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator</title>
</head>
<body>
  <h1>Simple Calculator</h1>
  <form method="post">
    <input type="number" name="num1" required>
    <select name="operator">
      <option value="+">+</option>
      <option value="-">−</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>
    <input type="number" name="num2" required>
    <button type="submit" name="calculate">Calculate</button>
  </form>

  <?php
  if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = 0;

    switch ($operator) {
      case '+': $result = $num1 + $num2; break;
      case '-': $result = $num1 - $num2; break;
      case '*': $result = $num1 * $num2; break;
      case '/': 
        if ($num2 == 0) {
          echo "<p style='color:red;'>Cannot divide by zero!</p>";
          exit;
        }
        $result = $num1 / $num2; 
        break;
    }

    echo "<h2>Result: $result</h2>";
  }
  ?>
</body>
</html>
