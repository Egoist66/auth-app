<?php


function sanitize(string $data): string
{
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    return trim($data);
}
