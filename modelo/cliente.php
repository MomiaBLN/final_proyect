<?php
class Cliente
{
    public int $id;
    public string $nombre;
    public string $telefono;
    public $empresas;

    public function __construct(string $nombre, string $telefono, Empresa ...$empresas)
    {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->empresas = $empresas;
    }

    public function Anhadir(Empresa $empresaAAnhadir)
    {
        $empresas[] = $empresaAAnhadir;
    }

    public function Eliminar(int $idDeEmpresa)
    {
        $empresaAEliminar = this->Buscar($idDeEmpresa);
        
        for ($i = 0; $i < count($this->empresas); $i++)
        {
            if ($this->empresas[$i] == $clienteAEliminar)
            {
                array_splice($this->empresas, $i);
                break;
            }
        }
    }

    public function Buscar(int $idDeEmpresa) : ?Empresa
    {
        foreach ($this->empresas as $empresa)
        {
            if ($empresa->id == $idDeEmpresa)
            {
                return $empresa;
            }
        }

        return null;
    }
}
?>