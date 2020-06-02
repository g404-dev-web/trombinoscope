// Rafraichit la page toutes les 2secondes
setInterval(function() {
    $('#messages').load('inc.php');
} , 2000);



function storeMessage(event, form) {
    // N'envoie pas le formulaire
    event.preventDefault();

    $('form').find('.btn').text('En cours ...');

    $.post({
        url: $('form').attr('action'),
        data: $('form').serialize(),
        success: function(error) {
            if (error) {
                alert(error);
            }
            // Ma requête a fonctionnée
            $('form').find('.btn').text('Envoyer');
        }
    })
}


function updateScroll() {
    window.scrollTo(0, 9999);
}
   window.scrollTo(0, 9999);