// Au clic sur le bouton #search je lance la fonction
setInterval(function(){

    // J'initialise le variable box
    var box = $('#result');

    // Je définis ma requête ajax
    $.ajax({

        // Adresse à laquelle la requête est envoyée
        url: '/tests/minichat/inc.php',

        // La fonction à apeller si la requête aboutie
        success: function (data) {
            // Je charge les données dans box
            box.html(data);
        },

        // La fonction à appeler si la requête n'a pas abouti
        error: function() {
            // J'affiche un message d'erreur
            box.html("Désolé, aucun résultat trouvé.");
        }

    });

}, 2000);


//deuxième requète AJAX
function storeMessage(event, form) {
    let $form = $(form);
    let $button = $form.find("button");
    if(!$button.data('originalText')) {
        $button.data('originalText', $button.text())
    }
    let $originalButtonText = $button.data('originalText');

    event.preventDefault();

    let requestData = $form.serialize();

    $.post({
        url: $form.attr( 'action' ),
        data: requestData,
        success: function(error) {
            if(error) {
                console.log("storeMessage Error", error);
                $button.text("✘");
            }
            else {
                $button.text("✔");
            }
            setTimeout(function () {
                $button.text($originalButtonText);
            }, 1000);
        }
    });

document.getElementById('message').value = "";

}

