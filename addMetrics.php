<?php
include 'conn.php';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)
{
    echo 'Connection failed: ' . $e->getMessage();
    exit(); //Stops if connection fails
}

//Process Form Data if Submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $metricRead = $_POST['metric_read_time'];
    $metricLength = $_POST['metric_page_length'];
    $metricRating = $_POST['metric_book_rating'];

    //SQL Statement
    $sql = "INSERT INTO bookmetrics(metric_read_time, metric_page_length, metric_book_rating]values('3','100' '4')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['metric_read_time' => $metricRead, 'metric_page_length' => $metricLength, 'metric_book_rating' => $metricRating]);

    echo "Added Metric";
}
?>

<form action="" method="post">
<label for = "metric_read_time"></label>
<input type = "text" id="metric_read_time" name="metric_read_time required" required><br>
<label for = "metric_page_length"></label>
<input type = "text" id="metric_page_length" name="metric_page_length" required><br>
<label for = "metric_book_rating"></label>
<input type = "text" id="metric_book_rating" name="metric_book_rating" required><br>

<button type="submit">Submit</button>


</form>