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