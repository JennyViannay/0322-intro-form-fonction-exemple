<?php

function login()
{
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        var_dump('ok email + password');
        $userExist = verifyUserExist($_POST['email']);
            // si user exist, je verifie le password
                logUser();
                // sinon je renvoie une erreur 'password incorrect'
            // sinon je renvoie une erreur 'user inconnu'
    } else {
        // si un des 2 champs est vide je retourne une erreur
        var_dump("Veuillez remplir tous les champs !");
    }
}

function register()
{
    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])) {
        var_dump('ok email + password');
        // si les password sont identiques alors
        $userExist = verifyUserExist($_POST['email']);
                // si user existe deja
                    // je renvoie message d'erreur 'email déjà utilisé'
                // sinon 
                // je hash password 
                // je stocke user en bdd 
        logUser();
    } else {
        // si un des 2 champs est vide je retourne une erreur
        var_dump("Veuillez remplir tous les champs !");
    }
}

function verifyUserExist(string $email)
{
    var_dump('on passe dans verifyUserExist fonction');
    // je vais verifier en bdd si user existe
    // si user existe
        // return true;
    // sinon 
       // return false;
}

function logUser()
{
    var_dump('on passe dans logUser fonction');
}