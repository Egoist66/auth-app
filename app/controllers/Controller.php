<?php

interface IController
{
    /**
     * shows some collection of data
     * @param mixed|null $data
     * @return string
     */
    public static function index(mixed $data = null): string;
}
abstract class Controller implements IController {}