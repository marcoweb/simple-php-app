<?php
namespace SimplePHPApp;

class Application {
    private $configurations = null;

    public $entityManager;

    public function getConfigurations() {
        if(is_null($this->configurations)) {
            $general_config_base_path = __DIR__ . '../config/';
            $application_config_base_path =  '../config/';
        }

        return [
            $general_config_base_path, $application_config_base_path
        ];

        //return $this->configurations;
    }
}