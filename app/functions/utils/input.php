<?php




function input(array $attrs, array $required = []): array|null
{
     try {
          $result = [];

          foreach ($required as $key) {
               if (!array_key_exists($key, $attrs) || empty($_POST[$key])) {
                    throw new Exception(
                         view(
                              "errors->errors.template",
                              ["content" => "Field <b>{$key}</b> is required! Check your <code>input()</code> options"]
                         )
                    );
               }
          }

          foreach ($attrs as $key => $type) {

               if (!array_key_exists($key, $_POST)) {
                    throw new Exception("Key {$key} does not exist!");
               }

               if (gettype($_POST[$key]) !== $type) {
                    throw new Exception("Wrong input type for {$key}. Expected" . ' ' . gettype($_POST[$key]) . " instead of " . $type);
               }

               $result[$key] = sanitize($_POST[$key]);


          }
          return $result;
     } catch (Exception $e) {
          echo $e->getMessage();
          return null;
     }
}
