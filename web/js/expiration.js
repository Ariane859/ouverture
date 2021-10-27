function verifier(expiration) {
    if(expiration != null)
    {
        date_expiration = expiration;
        var reg=new RegExp("^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$","i");
        if(reg.test(date_expiration)){
            var elem_n = date_expiration.split('-');
            console.log(elem_n);
            annee_n = elem_n[0];
            mois_n = elem_n[1];
            jour_n = elem_n[2];

            var date_day = new Date();
            jour_day = date_day.getDate();
            mois_day = date_day.getMonth()+1;
            annee_day = date_day.getFullYear();

            var ans; 
            var mois; 
            var age="";

            // if(mois_day >= mois_n){
            //     ans =  annee_day - annee_n;
            //     mois= mois_day - mois_n;
            // }
            // else
            // {
            //     ans =  (annee_day - annee_n) -1;
            //     mois= mois_day +( 12 - mois_n);
            // }
            // if(jour_day < jour_n){
            //     mois= mois -1;
            //     if(mois_day < mois_n){
            //         ans =  ans -1;
            //     }
            // }

            // if(ans >0 && ans <=1) age += ans //+' an ';
            // if(ans >1) age += ans //+' ans ';
            // //if(mois >0) age +=mois+' mois ';
            // return age;
            if(annee_n > annee_day)
            {
                console.log('il reste!!!')
            }
            else if (annee_n < annee_day)
            {
                console.log('Votre pièce est expiréé.Veuillez entrez une pièce valide!!!')
            }
            else
            {
                console.log('Votre pièce va bientot expirée!! ')
            }
        }
        else
        {
            return false;
        }
    }
}

$(document).ready(function(){
    $("#piecebundle_piece_datexpiration").on("change",function(e){
        e.preventDefault();
        verifier($(this).val());
    // if(verifier($(this).val())<18)
    // {
    //     console.log("Attention!!!!! Votre pièce s'expire ");
    //     // document.getElementById('physiquebundle_physique_tuteur').disabled = false;
    //     // document.getElementById('physiquebundle_physique_prenomTuteur').disabled = false;
    //     // document.getElementById('physiquebundle_physique_tuteur').style.cursor="auto";
    //     // document.getElementById('physiquebundle_physique_prenomTuteur').style.cursor="auto"
    // }
    // else
    // {
    //     console.log("Bien!!!!");
    //     // var telephone=document.getElementById("physiquebundle_physique_telephone").value;
    //     // var email=document.getElementById("physiquebundle_physique_email").value;
    //     // console.log(telephone);
    //     // console.log(email);
    //     // document.getElementById('physiquebundle_physique_tuteur').disabled = true;
    //     // document.getElementById('physiquebundle_physique_prenomTuteur').disabled = true;
        
    // }
    // // var telephone=document.getElementById("physiquebundle_physique_telephone").value;
    // // var email=document.getElementById("physiquebundle_physique_email").value;
    // // console.log(telephone);
    // // console.log(email);
    })
   
});