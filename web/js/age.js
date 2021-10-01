    function calcul_age(naissance){

        if(naissance != null)
        {
            date_naissance = naissance;
            var reg=new RegExp("^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$","i");
            if(reg.test(date_naissance)){
                var elem_n = date_naissance.split('-');
                console.log(elem_n);
                mois_n = elem_n[1];
                jour_n = elem_n[0];
                annee_n = elem_n[0];
    
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
                return age;
            }
            else
            {
                return false;
            }
        }
    
    }
    
    $(document).ready(function(){

        $("#physiquebundle_physique_datnais").on("change",function(e){
            e.preventDefault();
            console.log(calcul_age($(this).val()));
        if(calcul_age($(this).val())<18)
        {
            console.log("Toujours mineur!!!!");
            // document.getElementById('physiquebundle_physique_tuteur').disabled = false;
            // document.getElementById('physiquebundle_physique_prenomTuteur').disabled = false;
            // document.getElementById('physiquebundle_physique_tuteur').style.cursor="auto";
            // document.getElementById('physiquebundle_physique_prenomTuteur').style.cursor="auto";
            document.getElementById('tuteur').style.display= "block";
            document.getElementById('prenom_tuteur').style.display= "block";

            
        }
        else
        {
            console.log("Vous etes majeur");
            document.getElementById('tuteur').style.display= "none";
            document.getElementById('prenom_tuteur').style.display= "none";
            let email=$("#physiquebundle_physique_email").val();
            // document.getElementById('physiquebundle_physique_tuteur').disabled = true;
            // document.getElementById('physiquebundle_physique_prenomTuteur').disabled = true;
        }
        })
    });