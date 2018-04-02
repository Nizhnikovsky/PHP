<?php


class View
{
   protected $data;
   
   protected $path;
   
   protected static function getDefaultViewPath()
   {
       $router = App::getRoute();
       if(!$router)
       {
           return false;
       }
       $controller_dir = $router->getController();
       $template_name = $router->getMethodPrefix().$router->getAction().'.php';
       
       return VIEWS_PATH.DS.$controller_dir.DS.$template_name;
   }
   
   public function __construct($data = array(),$path = null)
   {
       if(!$path)
       {
           $path = self::getDefaultViewPath();
       }
       if(!file_exists($path))
       {
           throw new Exception('Template file is not found in path '.$path);
       }
       $this->path = $path;
       $this->data = $data;
   }
   
   public function render()
   {
       $data = $this->data;
       
       ob_start();
       include ($this->path);
       $content = ob_get_clean();
       
       return $content;
   }
    public static function getImage()
    {
        // Путь к папке с товарами
        $path = '/upload/images/products/';
        
        // Путь к изображению товара
        $pathToProductImage = $path . '.jpg';
        
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage))
        {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }
    }
    
}