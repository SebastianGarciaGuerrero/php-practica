<?php
class Pedido
{
    public $descripcion;
    public $tipo;
    public $producto;
    public $unidades;
    public $observaciones;

    public function __construct($descripcion, $tipo, $producto, $unidades, $observaciones)
    {
        $this->descripcion = $descripcion;
        $this->tipo = $tipo;
        $this->producto = $producto;
        $this->unidades = $unidades;
        $this->observaciones = $observaciones;
    }

    public function mostrarResumen()
    {
        return "Pedido de {$this->unidades} unidades de {$this->producto} ({$this->tipo}): {$this->descripcion}. Observaciones: {$this->observaciones}";
    }

    public static function buscarPorProducto($productoBuscado, $pedidos)
    {
        return array_filter($pedidos, function ($pedido) use ($productoBuscado) {
            return $pedido->producto === $productoBuscado;
        });
    }
}
?>