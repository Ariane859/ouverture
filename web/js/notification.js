// $(document).ready(function(){
//     var notifications= new Array()
//     notifications.push('Votre pièce est expirée', 'Veuillez changer vos pièces', 'Votre numéro de pièce est invalide', 'Votre passeport expire bientot','tadam!!!!')
//     var count=notifications.length;
//         $('#notific').html(count)
//         $("#notification").click(function(ev){
//             ev.preventDefault();
//             document.getElementById('body_notif').innerHTML ="";
//             for(let i of notifications)
//             {
//                 //$('#body_notif').html(i)
//     document.getElementById('body_notif').innerHTML += i + '<br><hr></hr>';
//             }
            
//             $('#modalNotif').modal('show')
//         });
//     })


$(document).ready(function(){
    $("#notification").click(function(){

        $('.modal1').modal();
        url = $(this).attr('data-target');
        console.log(url);
        
        $.get(url, function (data) {

        //on injecte le html dans la modale
        $('#body_notif').html(data);
        //on ouvre la modale
        $('#modalNotif').modal('show');
        });
    })
});