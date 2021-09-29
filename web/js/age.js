function calcul_age(naissance,reponse){
    var date_naissance = document.getElementById(naissance);
    if(date_naissance != null)
    {
        date_naissance = date_naissance.value;
            //console.log(date_naissance);
        //l'appel de la fonction se fait a chaque chiffre tapé, on verifie donc que tous les chiffres de la date ont été tapés pour faire le calcul
        var reg=new RegExp("^[0-9]{1,2}/[0-9]{1,2}/[0-9]{4}$","i");
        if(reg.test(date_naissance)){
            var elem_n = date_naissance.split('/');
            console.log(elem_n);
            mois_n = elem_n[0];
            jour_n = elem_n[1];
            annee_n = elem_n[2];
 
            var date_day = new Date();
            jour_day = date_day.getDate();
            mois_day = date_day.getMonth()+1;
            annee_day = date_day.getFullYear();
 
            //calcul age
            var ans; var mois; var age="";
 
            if(mois_day >= mois_n){
                ans =  annee_day - annee_n;
                mois= mois_day - mois_n;
            }else{
                ans =  (annee_day - annee_n) -1;
                mois= mois_day +( 12 - mois_n);
            }
            if(jour_day < jour_n){
                mois= mois -1;
                if(mois_day < mois_n){
                    ans =  ans -1;
                }
            }
 
            if(ans >0 && ans <=1) age += ans //+' an ';
            if(ans >1) age += ans //+' ans ';
            //if(mois >0) age +=mois+' mois ';
 
            // on affiche le résultat
            return document.getElementById(reponse).innerHTML = age;
        }else{
            return false;
        }
    }
 
}
 
$(document).ready(function(){
 
    $( ".datepicker" ).datepicker({
        dateFormat: 'mm/dd/yy',
        yearRange: '1920:c+10',
        changeMonth: true,
        changeYear: true
    });
 
 
 
     
    $("#naissance").focus(function () {
        $(this).change(function () {
           var resultat_age = calcul_age('naissance','reponse');
            $("#reponse").val(resultat_age);
        });
 
    })
     
});