<?php

$session = new Source\Support\Session;

if($session->has("errors")) {
    echo "<div class='alert alert-danger'>";
        foreach ($session->flash("errors") as $error) {
            echo "<p class='mb-0'><b>$error<b></p>";
        }
    echo "</div>";
}