<?php
class Cartera
{
    public string $clave;
    public $clientes; //Lista de clientes

    //Este método dice cómo se crea el objeto
    public function __construct()
    {

    }

    public function Anhadir(Cliente $clienteAAnhadir)
    {
        $clientes[] = $clienteAAnhadir;
    }

    public function Eliminar(int $idDeCliente)
    {
        $clienteAEliminar = this->Buscar($idDeCliente);
        
        for ($i = 0; $i < count($this->clientes); $i++)
        {
            if ($this->clientes[$i] == $clienteAEliminar)
            {
                array_splice($this->clientes, $i);
                break;
            }
        }
    }

    //alcance palabra_clave nombre_del_comportamiento (complementos) : tipo_de_respuesta
    public function Buscar(int $idDeCliente) : ?Cliente
    {
        //palabra_clave_para_bucle (nombre_de_la_lista palabra_clave nombre_que_damos_a_los_elementos)
        foreach ($this->clientes as $cliente)
        {
            if ($cliente->id == $idDeCliente)
            {
                return $cliente;
            }
        }

        return null;
    }
}
?>