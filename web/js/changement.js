$(document).ready(function(){
    $('#piecebundle_piece_typePiece').on('change',function(e)
    {
        e.preventDefault();
        var typePiece = $(this).val();
        console.log(typePiece);
        if (typePiece =='Photo')
        {
            document.getElementById('datexpiration').style.display= "none";
            document.getElementById('datedelivrance').style.display= "none";
            document.getElementById('datdeclaration').style.display= "none";
            document.getElementById('refPiece').style.display= "none";
            document.getElementById('emetteur').style.display= "none";
            document.getElementById('paysEmission').style.display= "none";
            document.getElementById('physique').style.display= "none";
        }
        else if(typePiece =='Carte d\'identité' || typePiece=='Passeport')
        {
            document.getElementById('refPiece').style.display= "block";
            document.getElementById('emetteur').style.display= "block";
             document.getElementById('paysEmission').style.display= "block";
            document.getElementById('physique').style.display= "block";
            document.getElementById('datedelivrance').style.display= "none";
            document.getElementById('datdeclaration').style.display= "none";
            document.getElementById('datexpiration').style.display= "block";
        }
        else if(typePiece=='Attestation de résidence') {
             document.getElementById('refPiece').style.display= "block";
            document.getElementById('emetteur').style.display= "block";
             document.getElementById('paysEmission').style.display= "block";
            document.getElementById('physique').style.display= "block";
            document.getElementById('datedelivrance').style.display= "block";
            document.getElementById('datdeclaration').style.display= "none";
            document.getElementById('datexpiration').style.display= "none";

        }
        else
        {
             document.getElementById('refPiece').style.display= "block";
            document.getElementById('emetteur').style.display= "block";
             document.getElementById('paysEmission').style.display= "block";
            document.getElementById('physique').style.display= "block";
            document.getElementById('datedelivrance').style.display= "none";
            document.getElementById('datdeclaration').style.display= "block";
            document.getElementById('datexpiration').style.display= "none";
        }
    })
})