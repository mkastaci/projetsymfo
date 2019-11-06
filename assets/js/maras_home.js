let app ={
    init: function(){
        globalmenu = $('.menu');
        globaltop = globalmenu[0].getBoundingClientRect().y + scrollY + 30;
        $(window).on('scroll', app.menucollant);
        $(window).on('resize', app.calcultop);

        $('.platmenu ul li a').on('click', app.trieplat);
    },


    lasttrie: 0,
    trieplat: function(evt){
        evt.preventDefault();
        $('.platmenu ul li a').css('color', '#7F8289');
        $(evt.currentTarget).css('color', '#DE5E60');
        let typeid = $(evt.currentTarget).data('type');

        if(app.lasttrie != typeid){
        app.lasttrie = typeid;
        $('.imgplat').animate({opacity:0}, 500,"linear",function()
        {
            $(this).remove();
        });

        $.ajax(
            {
              url: 'http://127.0.0.1:8000/checktype', // URL sur laquelle faire l'appel Ajax
              method: 'POST', // La méthode HTTP souhaité pour l'appel Ajax (GET ou POST)
              dataType: 'JSON', // Le type de données attendu en réponse (text, html, xml, json)
              data: { // (optionnel) Tableau contenant les données à envoyer avec la requête
                type:  typeid,
              }
            }
          ).done(
            function(reponse) {

               reponse.forEach(function(plat) {
                let newplat = app.createimg(plat);
                $(".platimage" ).append(newplat);
              });

              $(".imgplat").animate({opacity:1}, 1000, "linear");

              }
          ).fail(
            function() {
              alert('Réponse ajax incorrecte');
            }
          );

        }
    },
    createimg: function(plat){
        let $newplat= $('#platTemplate').contents().clone();
        $newplat.css("opacity", "0");
        $newplat.find('a').attr("href", './plat/'+plat.id);
        $newplat.find('img').attr("src", 'image/'+plat.img);
        $newplat.find('.descimg p').text(plat.name);

        return $newplat;
    },


    calcultop: function(){
        console.log('changement d\'écran');
        globaltop = globalmenu[0].getBoundingClientRect().y + scrollY + 30;
    },


    fakemenu: function(){
        let div = document.createElement('div');
        div.classList.add('fake');
        div.style.width = globalmenu[0].getBoundingClientRect().width;
        div.style.height = globalmenu[0].getBoundingClientRect().height;
        div.style.padding = '3em 0';
        div.style.background = "#2F3238";
        return div;
    },


    menucollant: function(){
        if(scrollY > globaltop && !globalmenu.hasClass('fixed')){
            globalmenu.addClass("fixed");
            let fake = app.fakemenu;
            $( "header" ).append(fake);

        }
        else if(scrollY < globaltop && globalmenu.hasClass('fixed')){
            globalmenu.removeClass("fixed");
            $( ".fake" ).remove();
        }
    }
}



document.addEventListener('DOMContentLoaded', app.init);