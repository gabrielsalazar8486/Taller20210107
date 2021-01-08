<?php

final class Directorio{

    private $file;
    private $datos;

    public function __construct()
    {
        $this->datos = $_POST;
        $this->file = './directorio';
    }

    public function guardar(): void
    {
        if (!empty($this->datos))
            $this->agregar_registro();
        $this->redireccionar_a_home();
    }

    private function agregar_registro(): void
    {
        $datos = $this->datos;
        $file = $this->file;

        $directorio = fopen($file, 'r+');
        fseek($directorio,0, SEEK_END);
        fwrite($directorio, json_encode($datos).'--');
        fclose($directorio);

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

    protected function redireccionar_a_home(): void
    {
        header('Location: http://localhost:8000/Gabriel_Salazar/Taller.php');
        exit();
    }

    protected function separar_registros(string $json_directory): array
    {
        $result = !empty($json_directory) ? explode('--', $json_directory) : [];
        return array_filter($result);
    }
}

if (!empty($_POST)){
    $directorio = new Directorio();
    $directorio->guardar();
}

?>