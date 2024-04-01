<?php


/**
 * connects view parts as solid one
 *
 * @param string $viewFile
 * @param array $data
 * @return false|string
 */
function view(string $viewFile, array $data = []): false|string
{

    try {
        [$folder, $file] = explode('->', $viewFile);

        if (!is_dir("." . VIEWS . "/$folder")) {
            throw new \RuntimeException("Such folder not found: $folder");
        }


        if (!file_exists("." . VIEWS . "/$folder/$file.php")) {
            throw new \RuntimeException("Such view file not found: $file");
        }


        // Извлекаем данные для использования в представлении
        extract($data);

        // Начинаем буферизацию вывода
        ob_start();


        require "./app/views/$folder/$file.php";


        // Получаем содержимое буфера вывода
        $content = ob_get_clean();

        // Возвращаем содержимое представления
        return $content;
    } catch (Exception $e) {
        echo $e->getMessage();
        return '';
    }
}