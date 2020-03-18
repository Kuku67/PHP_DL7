<?php

$inputs = ['Nom', 'Prénom', 'Mail', 'Ville'];
$sexe = ['Homme', 'Femme', 'Ne souhaite pas préciser'];
$courses = ['Développeur Logiciel', 'Designer Web', 'Intégrateur', 'Chef de projet'];

function showForm($sexeArray, $coursesArray, $inputs) {
    $form = "";
    // FORM BASE
    $form.= "<form method='post' action='post.php'>";

    // LAYOUT OF BASIC INPUTS
    foreach($inputs as $input) {
        $inputValue = strtolower($input);
        $form.= "<label for='$inputValue'>$input :</label><br>
              <input type='text' id='$inputValue' name='$inputValue' required><br><br>";
    }

    // SELECT LIST FOR GENDERS
    $form.= "<label for='sexe'>Sexe :</label><br>
          <select name='sexe' id='select'>";
    foreach($sexeArray as $value) {
        $sexeValue = strtolower($value);
        $form.= "<option value='$sexeValue'>$value</option>";
    }
    $form.= "</select><br><br>";

    // RADIO BUTTONS FOR COURSES
    $form.= "<label for='course'>Choix de la Formation :</label><br>";
    foreach($coursesArray as $course) {
        $courseValue = strtolower($course);
        $form.= "<div>
                <input type='radio' id='$courseValue' name='$courseValue'>
                <label for='$courseValue'>$course</label>
             </div>";
    }

    // SUBMIT BUTTON
    $form.= "<br><input type='submit' value='Envoyer le formulaire'>";

    // CLOSING FORM
    $form.= "</form>";

    return $form;
}

echo showForm($sexe, $courses, $inputs);