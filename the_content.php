<?php
if ( have_posts() ) : // ¿Hay entradas?
    while ( have_posts() ) : the_post(); // Mientras haya, muéstralas
        the_title('<h2>', '</h2>'); // Título
        the_excerpt(); // Extracto
    endwhile;
else :
    echo '<p>No hay contenido.</p>';
endif;
?>
