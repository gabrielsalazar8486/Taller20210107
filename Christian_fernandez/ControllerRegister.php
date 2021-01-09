<?php


final class ControllerRegister
{
    private $file;
    private $datos;

    public function __construct()
    {
        $this->datos = $_POST;
        $this->file = './directorio';
    }

    public function buscar()
    {
        if (!empty($this->datos))
            $this->filtrar_registro();
    }

    public function getDirectorio(): array
    {

        $json_directory = $this->getDataInFile();
        $result = $this->separar_registros($json_directory);

        return $result;

    }

    protected function getDataInFile(): string
    {
        $file = $this->file;
        $directorio = fopen($file, 'r+');
        $result = fread($directorio, filesize($file));
        fclose($directorio);
        return $result;
    }

    protected function separar_registros(string $json_directory): array
    {
        $result = !empty($json_directory) ? explode('--', $json_directory) : [];
        return array_filter($result);
    }

    protected function filtrar_registro()
    {
        $datos = $this->datos;
    }
}