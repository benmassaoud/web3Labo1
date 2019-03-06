//On récupère le nom du formulaire et le paramètre envoyé, traitement.php qui va traiter tout cela
function valider(name, param) {
    $.ajax({
        url: "./traitement.php?form=" + name + "&param=" + param,
        type: "get",
        success: function (result) {
            $("#contenu").html(result);
        }
    });
    
    return false;
}