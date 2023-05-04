<?php

$products = [];

$products[0]["id"] = ""; // id товару
$products[0]["name"] = ""; // назва товару
$products[0]["costPerItem"] = ""; // ціна
$products[0]["amount"] = ""; // кількість
$products[0]["description"] = ""; // опис товарної позиції в заявці
$products[0]["discount"] = ""; // знижка, задається в % або в абсолютній величині
$products[0]["sku"] = ""; // артикул (SKU) товару

$_salesdrive_url = "https://hayali.salesdrive.me/handler/";
$_salesdrive_values = [
    "form" => "vcpf8t66SEnVvwxWpcqB4FTAN1wZdpsbUAt-E5QoFoRfDOEqRvIMiz3W6qAtgwFcBdL3U_ys9p",
    "getResultData" => "1", // Отримувати дані створеної заявки (0 - не отримувати, 1 - отримувати)
    "shipping_costs" => "", // Витрати на доставку
    "organizationId" => "", // id організації
    "products" => $products, //Товари/Послуги
    "comment" => "", // Коментар
    "payment_method" => "", // Спосіб оплати
    "shipping_method" => "", // Спосіб доставки
    "shipping_address" => "", // Адреса доставки
    "sajt" => "", // Сайт
    "externalId" => "", // Зовнішній номер заявки
    "lName" => "", // Прізвище
    "fName" => "", // Ім'я
    "mName" => "", // По батькові
    "phone" => "", // Телефон
    "email" => "", // E-mail
    "con_comment" => "", // Коментар
    "con_telegram" => "", // Telegram

    "stockId" => "", // id складу
    "prodex24source_full" => isset($_COOKIE["prodex24source_full"]) ? $_COOKIE["prodex24source_full"] : "",
    "prodex24source" => isset($_COOKIE["prodex24source"]) ? $_COOKIE["prodex24source"] : "",
    "prodex24medium" => isset($_COOKIE["prodex24medium"]) ? $_COOKIE["prodex24medium"] : "",
    "prodex24campaign" => isset($_COOKIE["prodex24campaign"]) ? $_COOKIE["prodex24campaign"] : "",
    "prodex24content" => isset($_COOKIE["prodex24content"]) ? $_COOKIE["prodex24content"] : "",
    "prodex24term" => isset($_COOKIE["prodex24term"]) ? $_COOKIE["prodex24term"] : "",
    "prodex24page" => isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : "",
];

$_salesdrive_ch = curl_init();
curl_setopt($_salesdrive_ch, CURLOPT_URL, $_salesdrive_url);
curl_setopt($_salesdrive_ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($_salesdrive_ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($_salesdrive_ch, CURLOPT_SAFE_UPLOAD, true);
curl_setopt($_salesdrive_ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($_salesdrive_ch, CURLOPT_POST, 1);
curl_setopt($_salesdrive_ch, CURLOPT_POSTFIELDS, json_encode($_salesdrive_values));
curl_setopt($_salesdrive_ch, CURLOPT_TIMEOUT, 15);

$_salesdrive_res = curl_exec($_salesdrive_ch);
