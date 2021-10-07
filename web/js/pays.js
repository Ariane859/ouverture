// function appelAjax() {
//     var method='GET';
//     var api_name=   "APP_LOGIN";
//     var api_key =   "APP_KEY";
//     var url     =   "https://www.citysearch-api.com/fr/pays?login="+api_name+"&apiKey="+api_key;
//     http.open(method, url);
//     // Déclaration de la fonction à appeler pour traiter le retour Ajax
//     http.onreadystatechange = handleResponse;
//     http.send(null);
// }
// /**
// * Fonction qui traitera la réponse AJAX
// */
// function handleResponse() {
//     // Si l'état = 4 ...
//     if(http.readyState == 4){
//         // On stocke la réponse Ajax dans la variable "response"
//         var response = http.responseText;
//     }
// }
// $(document).ready(function(){
//     $("#physiquebundle_physique_pays").on("change",function(e) {
//         e.preventDefault();
//         console.log();

//     })
// })

$(document).ready(function() {
    // $("#physiquebundle_physique_telephone").on("change",function(e){
    //     e.preventDefault();
    //     console.log($(this).val());  
    //     })
    // $("#physiquebundle_physique_email").on("change",function(e){
    //     e.preventDefault();
    //     console.log($(this).val());  
    //     })
    $.get('https://restfulcountries.com/api/v1/countries?fetch_type=slim',function(countries)
    {
        $.each(countries.data,function(key,value){
            $('#physiquebundle_physique_pays')
                .append($("<option></option>")
                    .attr("value", value.name)
                    .text(value.name));
        });
    });
});

$('#physiquebundle_physique_pays').on('change',function(e) {
    e.preventDefault();
    //Get selected country name
 let country=$("#physiquebundle_physique_pays").val();

 //Remove previous loaded states
 $('#physiquebundle_physique_ville option:gt(0)').remove();
 $('#district-select option:gt(0)').remove();

 //Call restful countries states endpoint
 $.get('https://restfulcountries.com/api/v1/countries/'+country+'/states?fetch_type=slim',function(states){

     //Loop through returned result and populate states select
     $.each(states.data,function(key,value){
         $('#physiquebundle_physique_ville')
             .append($("<option></option>")
                 .attr("value", value.name)
                 .text(value.name));
     });
 });
})
