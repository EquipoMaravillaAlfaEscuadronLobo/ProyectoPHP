<?php 
include_once '../repositorios/repositorio_categoria.php';   
include_once '../app/Conexion.php'; 
include_once '../modelos/Categoria.php';
                                Conexion::abrir_conexion();  
                                Repositorio_categoria::obtener_categorias(Conexion::obtener_conexion());
                                                                  
                                ?> 
