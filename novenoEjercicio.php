<?php
class EdadInvalidaException extends Exception {}

function verificarEdad($edad) {
    if ($edad < 0) {
        throw new EdadInvalidaException(
            "La edad no puede ser negativa."
        );
    }

    return "Edad válida.";
}

try {
    echo verificarEdad(-5);
} catch (EdadInvalidaException $e) {
    echo "Error: " . $e->getMessage();
}
?>