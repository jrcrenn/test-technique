<?php

if (!defined('_PS_VERSION_'))
    exit();

class Mon_Module extends Module
{
    public function __construct()
    {
        $this->name = 'mon_module';
        $this->tab = 'front_office_features';
        $this->version = '1.0';
        $this->author = 'Jean-Robert';
        $this->need_instance = 1;
        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('Mon Module', 'mon_module');
        $this->description = $this->l('Ce module est développé pour un test technique', 'mon_module');
        $this->confirmUninstall = $this->l('Vous êtes sûr de vouloir le désinstaller ?', 'mon_module');
    }

    public function install()
    {
        if (parent::install()) {
            return true;
        }
        return false;
    }
 
    public function uninstall()
    {
        if (parent::uninstall()) {
            return true;
        }
        return false;
    }
}

?>