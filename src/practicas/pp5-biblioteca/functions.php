<?php
session_start();

if (!isset($_SESSION["libros"])) {
    $_SESSION["libros"] = [

        [
            "titulo" => "El principito",
            "autor" => "Antoine de Saint-Exupéry",
            "imagen" => "css/imagenes/principito.jpg",
            "descripcion" => "Un pequeño príncipe viaja por diferentes planetas."
        ],

        [
            "titulo" => "Don Quijote de la Mancha",
            "autor" => "Miguel de Cervantes",
            "imagen" => "css/imagenes/quijote.jpg",
            "descripcion" => "Las aventuras de Don Quijote y Sancho Panza."
        ],

        [
            "titulo" => "Harry Potter",
            "autor" => "J.K. Rowling",
            "imagen" => "css/imagenes/harry.jpg",
            "descripcion" => "Un joven descubre que es un mago."
        ]

    ];
}



function agregarLibro($titulo, $autor, $imagen, $descripcion) {

    $_SESSION["libros"][] = [
        "titulo" => $titulo,
        "autor" => $autor,
        "imagen" => $imagen,
        "descripcion" => $descripcion
    ];

}

function editarLibro($id, $titulo, $autor, $imagen, $descripcion) {

    if (isset($_SESSION["libros"][$id])) {

        $_SESSION["libros"][$id] = [
            "titulo" => $titulo,
            "autor" => $autor,
            "imagen" => $imagen,
            "descripcion" => $descripcion
        ];

    }

}

function eliminarLibro($id) {

    if (isset($_SESSION["libros"][$id])) {
        unset($_SESSION["libros"][$id]);
        $_SESSION["libros"] = array_values($_SESSION["libros"]);
    }
}

?>