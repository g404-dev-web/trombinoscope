
// requête Ajax pour rafréchir la page avec la fonction SetInterval
setInterval(function(){
    $('#messages').load('include/post.php'); 
    
 }, 2000) 

 // a partir de la requête Ajax lors de l'envoie du message je n'ai plus besoin du header dans store
function storeMessage(event, form)
{
    //n'envoie pas le formulaire
    event.preventDefault();
    $(form).find('.btn').text('En cours');
    
    $.post({
        url: $(form).attr('action'),
        data: $(form).serialize(),
        success: function(error) {
            if (error){
                alert(error);
            }   

            // ma reqûete à fonctionné 
            $(form).find('.btn').text('Envoyer');
            window.scroll(0,9999);

        }
    }
)};