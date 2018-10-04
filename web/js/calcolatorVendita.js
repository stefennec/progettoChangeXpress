// Listen for submit
document.getElementById('vendita-form').addEventListener('submit', function(e){


  e.preventDefault();
 });




 // calculate Result
 function calculateResultsVendita(e){

  console.log('calculating');

  // UI variables
  var quantitaVendita = document.getElementById('quantitaVendita');
      rateVendita = document.getElementById('rateVendita');
      percentualeVendita = document.getElementById('percentualeVendita').value;
      spesaVendita = document.getElementById('spesaVendita').value;
      nettoTransazioneVendita = document.getElementById('nettoVendita');
      commissioneTransazioneVendita = document.getElementById('commissioneVendita');
      lordoTransazioneVendita = document.getElementById('lordoVendita');

       quantitaValutaVendita = parseFloat(quantitaVendita.value);
       tassoRateVendita = parseFloat(rateVendita.value);
       commissionePercentualeVendita = parseFloat(commissioneVendita.value);
       spesaFissaVendita = parseFloat(spesaVendita.value);
       

       monthlyVendita = (quantitaValutaVendita*tassoRateVendita);
       // console.log(commissioneVendita);
if(isFinite(monthlyVendita)) {
  
    commissioneTransazioneCalculed = (monthlyVendita * (percentualeVendita/100)).toFixed(2);
    nettoTransazioneCalculed = (monthlyVendita - (monthlyVendita * percentualeVendita/100) - spesaVendita).toFixed(2);
    
    lordoTransazioneCalculed = monthlyVendita.toFixed(2);//al max 2 decimali
    
    console.log(commissioneTransazioneCalculed);
    
    nettoTransazioneVendita.value = nettoTransazioneCalculed;
    commissioneTransazioneVendita.value  = commissioneTransazioneCalculed;
    lordoTransazioneVendita.value  = lordoTransazioneCalculed;
  
    // Hide results
    // document.getElementById('results').style.display = 'block';
    
    //Show loader
    // document.getElementById('loading').style.display = 'none';
      } else {
        showError('Please check your number');
      }
 }
