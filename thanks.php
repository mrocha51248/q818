<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        $subjects = [
            'subject1' => "Sujet 1",
            'subject2' => "Sujet 2",
            'subject3' => "Sujet 3",
            'subject4' => "Sujet 4",
            'subject5' => "Sujet 5",
        ];
        echo "Merci " . $_POST['firstName'] . " " . $_POST['lastName'] . " de nous avoir contacté à propos de " . $subjects[$_POST['subject']] . ".";
        echo "<br>";
        echo "Un de nos conseiller vous contactera soit à l’adresse " . $_POST['email'] . " ou par téléphone au " . $_POST['phone'] . " dans les plus brefs délais pour traiter votre demande : ";
        echo "<br>";
        echo $_POST['message'];
        ?>
    </p>
</body>

</html>
