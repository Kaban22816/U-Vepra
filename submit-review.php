<?php
header('Content-Type: text/html; charset=utf-8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $review = $_POST["review"];
    
    echo "Дякуємо, $name! Ваш відгук: \"$review\" успішно надісланий.";
} else {
    echo "Помилка: форму потрібно відправляти методом POST.";
}
?>
