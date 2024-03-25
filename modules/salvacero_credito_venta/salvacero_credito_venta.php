<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class MiModulo extends Module
{
    public function __construct()
    {
        $this->name = 'Salvacero Credito Venta';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Jorge Alvarado';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Salvacero Credito Venta');
        $this->description = $this->l('Agregar Credito');
    }

    public function install()
    {
        // Lógica de instalación del módulo
        return parent::install();
    }

    public function uninstall()
    {
        // Lógica de desinstalación del módulo
        return parent::uninstall();
    }
}