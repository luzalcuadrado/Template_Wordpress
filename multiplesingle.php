<?php
    if (in_category(1)) { // Si el post pertenece a la cat 1, redirigir a single-1.php
    include(TEMPLATEPATH . '/single1.php');
    } elseif (in_category(2)) { // Si el post pertenece a la cat 2, redirigir a single-2.php
    include(TEMPLATEPATH . '/single2.php');
    } else { // Si el post pertenece a la cat 3, redirigir a single-3.php
    include(TEMPLATEPATH . '/single3.php');
    } ?>