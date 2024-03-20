<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["word"])) {
    $word = $_POST["word"];
    echo $word;
} else {
    http_response_code(400);
}
?>
