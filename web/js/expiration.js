function verifier(expiration) {

    if(expiration != null)
    {
        date_expiration = expiration;

        var date_day = new Date();

        var difference = new Date(date_expiration) - date_day;

        var days = difference / 1000 / 60 / 60 / 24;

        var day = parseInt(days)

        return day;
    }
    else
    {
        return false;
    }
    
}

$(document).ready(function(){ 

    var notifications= new Array();

    $("#piecebundle_piece_datexpiration").on("change",function(e){
        
        e.preventDefault();

        var expirer = verifier($(this).val())

        if (expirer < 0 ) {

            alertify.error("Votre pièce est expiréé. Veillez mettre une pièce valide");
        }

        else if (expirer >= 0 && expirer <= 24 )
        { 
            alertify.warning("Votre pièce va bientot expirée !!!, il reste exactement " + expirer + " jours");
        }
        
        else
        {
           
        }
        
        //toastr.error(poi)
        // // notifications.push('Votre pièce est expirée', 'Veuillez changer vos pièces', 'Votre numéro de pièce est invalide', 'Votre passeport expire bientot','tadam!!!!')
        // notifications.push(poi);
        // var count=notifications.length;
        // console.log(count);
        //     $('#notific').html(count)
        //     $("#notification").click(function(ev){
        //         ev.preventDefault();
        //         document.getElementById('body_notif').innerHTML ="";
        //         for(let i of notifications)
        //         {
        //             //$('#body_notif').html(i)
        // document.getElementById('body_notif').innerHTML += i + '<br><hr></hr>';
        //         }
                
        //         $('#modalNotif').modal('show')
            //});
    })
   
});