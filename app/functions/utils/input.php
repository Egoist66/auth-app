<?php



function input(array $attrs, bool $required = false): array | null
{
     try {
          $result = [];
          foreach ($attrs as $key => $type) {
               if (!empty($_POST[$key]) || ($required && !isset($_POST[$key]))) {
                    if (gettype($_POST[$key]) === $type) {
                         $result[$key] = sanitize($_POST[$key]);
                    } else {
                         throw new Exception("Wrong input type! Expected" . ' ' . gettype($_POST[$key]) . " instead of " . $type);
                    }
               } else {
                    throw new Exception("Field {$key} is required");
               }
          }
          return $result;
     } catch (Exception $e) {
          echo $e->getMessage();
          return null;
     }
}