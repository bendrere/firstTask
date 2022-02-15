<?php

/**
 *
 */
class SessionSaveHandler implements SessionHandlerInterface
{
    /**
     * @var string
     */
    private string $dir;

    /**
     * @param $dir
     */
    public function __construct($dir)
    {
        $this->dir = $dir;
    }

    /**
     * @return bool
     */
    public function close(): bool
    {
        return true;
    }

    /**
     * @param $id
     * @return bool
     */
    public function destroy($id): bool
    {
        $file = "$this->dir/sesid_$id.json";
        if (file_exists($file)) {
            unlink($file);
        }
        return true;

    }

    /**
     * @param $max_lifetime
     * @return bool
     */
    public function gc($max_lifetime): bool
    {
        foreach (glob("$this->dir/sesid*") as $file) {
            if (filemtime($file) + $max_lifetime < time() && file_exists($file)) {
                unlink($file);
            }
        }
        return true;
    }

    /**
     * @param $path
     * @param $name
     * @return bool
     */
    public function open($path, $name): bool
    {
        $this->dir = $path;
        if (!is_dir($this->dir)) {
            mkdir($this->dir, 0777, true);
        }
        return true;
    }

    /**
     * @param $id
     * @return string
     */
    public function read($id): string
    {
        return (string)@file_get_contents("$this->dir/sesid_$id.json");

    }

    /**
     * @param $id
     * @param $data
     * @return bool
     */
    public function write($id, $data): bool
    {
        $data = unserialize($data);
        if (file_put_contents("$this->dir/sesid_$id.json", json_encode($data, JSON_FORCE_OBJECT)) === false) {
            return false;
        } else {
            return true;
        }
    }
}