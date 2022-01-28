<?php

class PropertiesHooks{

    public function setImages($bean = null,$event = null,$args = null){
        $GLOBALS['log']->fatal("SE GUARDARÁN LAS IMÁGENES");

        $rel_name = "mi_images_e2_properties";

        if(!$args['isUpdate']){
            $GLOBALS['log']->fatal("ES NUEVO EL REGISTRO");

            foreach($bean->images as $image){
                $GLOBALS['log']->fatal("-------------------------");
                $GLOBALS['log']->fatal("NOMBRE IMAGEN: ".$image['name']);
                $GLOBALS['log']->fatal("BASE64 IMAGEN: ".$image['base64']);
                //Creamos el registro de la imagen
                $beanImage = BeanFactory::newBean("MI_images");
                $beanImage->name = $image['name'];
                $GLOBALS['log']->fatal("-------------------------");
                $GLOBALS['log']->fatal("NOMBRE IMAGEN: ".$beanImage->name);
                $beanImage->description = $image['base64'];
                $GLOBALS['log']->fatal("-------------------------");
                $GLOBALS['log']->fatal("NOMBRE IMAGEN: ".$beanImage->description);

                //Guardamos el registro
                $beanImage->save();

                $bean->load_relationship($rel_name);
                $bean->$rel_name->add($beanImage->id);

                $GLOBALS['log']->fatal("IMAGEN GUARDADA");
            }

        }else{
            $GLOBALS['log']->fatal("-------------SE EDITARÁ EL REGISTRO------------");
            if($bean->load_relationship($rel_name)){
                $imagesBean = $bean->$rel_name->getBeans();
                //Verificamos si se borró alguna imagen ya existente
                foreach($imagesBean as $imageBean){
                    $isInArray = false; 
                    foreach($bean->images as $image){
                        if(in_array($imageBean->name,$image)){
                            $isInArray = true;
                            $GLOBALS['log']->fatal("SI SE ENCUENTRA EN EL ARRAY IMAGEN: ".$image['name']);
                        }
                    }
                    if(!$isInArray){
                        $GLOBALS['log']->fatal("SE PROCEDERÁ A ELIMINAR LA IMAGEN: ".$imageBean->name);

                        $beanToDelete = BeanFactory::retrieveBean("MI_images",$imageBean->id);

                        //Establecemos atributo deleted cómo verdadero 
                        $beanToDelete->mark_deleted($imageBean->id);

                        //Guardamos
                        $beanToDelete->save();

                        $GLOBALS['log']->fatal("IMAGEN BORRADA");

                    }
                }
                //Verificamos si se agregó alguna imagen nueva
                foreach($bean->images as $image){
                    $isInDataBase = false;
                    foreach($imagesBean as $imageBean){
                        if($image['name'] == $imageBean->name){
                            $isInDataBase = true;
                            $GLOBALS['log']->fatal("LA IMAGEN: ".$imageBean->name." YA SE ENCUENTRA EN LA BASE DE DATOS");
                        }
                    }
                    if(!$isInDataBase){
                        $GLOBALS['log']->fatal("SE PROCEDERÁ A GUARDAR LA IMAGEN: ".$image['name']);
                         //Creamos el registro de la imagen
                        $beanImage = BeanFactory::newBean("MI_images");
                        $beanImage->name = $image['name'];
                        $GLOBALS['log']->fatal("-------------------------");
                        $GLOBALS['log']->fatal("NOMBRE IMAGEN: ".$beanImage->name);
                        $beanImage->description = $image['base64'];
                        $GLOBALS['log']->fatal("-------------------------");
                        $GLOBALS['log']->fatal("NOMBRE IMAGEN: ".$beanImage->description);
        
                        //Guardamos el registro
                        $beanImage->save();
        
                        $bean->load_relationship($rel_name);
                        $bean->$rel_name->add($beanImage->id);
        
                        $GLOBALS['log']->fatal("IMAGEN GUARDADA");
                    }
                }
            }
        }
    }
    
}

?>