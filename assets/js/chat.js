let app = {
  init: function () {

   
    $('.chatform').submit(app.sendmessage);
    var ladate = new Date()
    $test = ladate.getFullYear() + '-' + (ladate.getMonth() + 1) + '-' + ladate.getDate()
    app.date = $test + ' 00:00:00';
    console.log(app.date);
  },
  
    date: '',


  deletemessage: function (evt) {
    let test = $(evt.currentTarget);
    let idmessage = test.data('idmessage');
    test.parent().remove();

    $.ajax(
      {
        url: 'http://127.0.0.1:8000/deletemessage/' + idmessage, // URL sur laquelle faire l'appel Ajax
        method: 'POST', // La méthode HTTP souhaité pour l'appel Ajax (GET ou POST)
        dataType: '', // Le type de données attendu en réponse (text, html, xml, json)
      }
    ).done(
      function () {

      }
    ).fail(
      function () {
        alert('Réponse ajax incorrecte');
      }
    );
  },

  sendmessage: function (evt) {
    evt.preventDefault();
    let message = $('.chatmessage');

    let messagevalue = $('.chatmessage').val();


    message.css('border', 'none');

    let error = 0;

    let testmessage = /^[A-Z0-9çéà:=;&è.@_,\#\-\"\' \(\)\?\!\r\n]+$/i;

    if (testmessage.test(messagevalue) == false) {
      error++;
      message.css('border', '1px solid red');
    }

    if (error == 0) {
      $('.chatmessage').val('');
      $.ajax(
        {
          url: 'http://127.0.0.1:8000/addmessage', // URL sur laquelle faire l'appel Ajax
          method: 'POST', // La méthode HTTP souhaité pour l'appel Ajax (GET ou POST)
          dataType: '', // Le type de données attendu en réponse (text, html, xml, json)
          data: { // (optionnel) Tableau contenant les données à envoyer avec la requête
            message: messagevalue
          }
        }
      ).done(
        function () {
        }
      ).fail(
        function () {
          alert('Réponse ajax incorrecte');
        }
      );
    }
  },


  loadchatmessage: function () {
    $.ajax(
      {
        url: 'http://127.0.0.1:8000/loadmessage', // URL sur laquelle faire l'appel Ajax
        method: 'POST', // La méthode HTTP souhaité pour l'appel Ajax (GET ou POST)
        dataType: 'json', // Le type de données attendu en réponse (text, html, xml, json)
        data: { // (optionnel) Tableau contenant les données à envoyer avec la requête
          date: app.date,
        }
      }
    ).done(
      function (messages) {


        $.each(messages, function (currentIndex, message) {
          let $newmessage = $('#messageTemplate').contents().clone();
          $newmessage.find('.pseudo').text(message.Username);
          $newmessage.find('.msg').text(message.message);
          $newmessage.find('.msg_date').text(message.insert_at.date);
          $newmessage.find('.delete_message').attr("data-idmessage", message.id);
          $newmessage.find('.delete_message').on('click', app.deletemessage);
          $('#messages').append($newmessage);
          app.date = message.insert_at;

        });



        var elem = document.getElementById('messages');
        elem.scrollTop = elem.scrollHeight;
      }
    ).fail(
      function () {
        alert('Réponse ajax incorrecte');
      }
    );
  },

};

document.addEventListener('DOMContentLoaded', app.init);
setInterval(app.loadchatmessage, 2000);
