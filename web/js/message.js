$(document).ready(function()
{
    // (function($) 
    //     {
    //         showSwal = function(type) {
    //             if (type === 'success-message') {
                   
            
    //             }
    //             else
    //                 {
    //                     swal("Error occured !");
    //                 }
    //             }
        
    //     })
        (jQuery);

    $('#enregistrer').on('click', function(e) {
        e.preventDefault();
        var form = $('form');
        swal({
            title: 'Félicitations!',
            text: 'Enregistré avec succès!',
            type: 'success',
            button: 
                {
                text: "OK",
                value: true,
                visible: true,
                className: "btn btn-primary",
                closeModal: true
                }
        }
        // ,
        //     function(isConfirm){
                    		
        //     if (isConfirm) form.submit();
        // }
        )

    })

}
)
