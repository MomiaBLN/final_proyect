<?php
class Empresa
{
    public int $id;

    public string $nombre;
    public string $telefono;
    public string $nif;
    public string $direccion;

    public function __construct(string $nombre,
                                    string $telefono,
                                    string $nif,
                                    string $direccion)
    {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->nif = $nif;
        $this->direccion = $direccion;
    }
}