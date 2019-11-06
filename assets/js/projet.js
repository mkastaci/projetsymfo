let app = {
    init:function(){
        let formElement = document.querySelector('.commentaire-form'); //permet de retourner un element . Note: getEelementById fonctionne et retourne exactement la meme chose

        //j'applique l'evenement submit sur mon formulaire
        formElement.addEventListener('submit', app.isFormValid);

        $('.delete_com').on('click', app.deletecom);
        
    },

    isFormValid:function(evt){
        evt.preventDefault();

        let message = document.querySelector('#commentaire_commentaire');

        
        message.style.border = "none";
  
        let error = 0;
      
        let testmessage = /^[A-Z0-9çéà:=;&è.@_,\#\-\"\' \(\)\?\!\r\n]+$/i;
        
        if(testmessage.test(message.value) == false){
            error++;
            message.style.border = "1px solid red";
        }      
        
        if (error == 0){ 
        evt.target.submit();
       }
    },


    deletecom: function(evt){
        let test = $(evt.currentTarget);
        let idcom = test.data('comid');
        test.parent().remove();

        $.ajax(
            {
              url: 'http://127.0.0.1:8000/deletecom/'+idcom, // URL sur laquelle faire l'appel Ajax
              method: 'POST', // La méthode HTTP souhaité pour l'appel Ajax (GET ou POST)
              dataType: '', // Le type de données attendu en réponse (text, html, xml, json)
            }
          ).done(
            function() {
                console.log('ajax ok');
              }
          ).fail(
            function() {
              alert('Réponse ajax incorrecte');
            }
          ); 
    },


};

document.addEventListener('DOMContentLoaded', app.init);
