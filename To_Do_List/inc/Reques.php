<?php

 namespace Requst;

 class Requst{

        public function get(string $key = null)
        {
            return ($key == null) ? $_GET :((isset($_GET[$key]))? $_GET[$key] :null );

        }   
        
        public function post($key)
        {
            if($key == null)
            {
                return $_POST;
            }else{
                if(isset($_POST[$key]))
                {
                    return $_POST[$key];

                }else{
                    return null;
                }
            }
        }

        public function method()
        {
            return $_SERVER['REQUEST_METHOD'];
        }

        public function cleanInput($key)
        {
            return trim(htmlspecialchars($_POST[$key]));
        }

        public function hasGet()
        {
            return isset ($_GET['$key']);
        }
 }