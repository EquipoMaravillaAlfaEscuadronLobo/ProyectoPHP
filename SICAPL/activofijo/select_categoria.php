<?php 
include_once '../repositorios/repositorio_categoria.php';   
include_once '../app/Conexion.php'; 
include_once '../modelos/Categoria.php';
                                <?php
                                Conexion::abrir_conexion();  
                                $lista_cat =Repositorio_categoria::obtener_categorias(Conexion::obtener_conexion());
                                 foreach ($lista_cat as $lista) { 
                                    echo"<option value='".$lista->getCodigo_tipo()."'>".$lista->getNombre()."</option>"; 
                                 }
                           ?>                                
                                ?> 
