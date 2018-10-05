// Listen for submit
document.getElementById('mcv-form').addEventListener('submit', function(e){


  e.preventDefault();
 });




 // calculate Result
 function calculateResultsMcv(e){

  console.log('calculating');

  // UI variables
  var quantitaMcv = document.getElementById('quantitaMcv');
      rateMcv = document.getElementById('rateMcv');
      percentualeMcv = document.getElementById('percentualeMcv').value;
      spesaMcv = document.getElementById('spesaMcv').value;
      nettoTransazioneMcv = document.getElementById('nettoMcv');
      commissioneTransazioneMcv = document.getElementById('commissioneMcv');
      lordoTransazioneMcv = document.getElementById('lordoMcv');

       quantitaValutaMcv = parseFloat(quantitaMcv.value);
       tassoRateMcv = parseFloat(rateMcv.value);
       commissionePercentualeMcv = parseFloat(commissioneMcv.value);
       spesaFissaMcv = parseFloat(spesaMcv);
       

       monthlyMcv = (quantitaValutaMcv*tassoRateMcv);
       // console.log(commissioneVendita);
if(isFinite(monthlyMcv)) {
  
    commissioneTransazioneCalculed = (monthlyMcv * (percentualeMcv/100)).toFixed(2);
    nettoTransazioneCalculed = (monthlyMcv - (monthlyMcv * percentualeMcv/100) - spesaMcv).toFixed(2);
    lordoTransazioneCalculed = monthlyMcv.toFixed(2);//al max 2 decimali
    
     console.log(nettoTransazioneCalculed);
    // 
    // console.log(nettoTransazioneCalculed);
    nettoTransazioneMcv.value = nettoTransazioneCalculed;
    commissioneTransazioneMcv.value  = commissioneTransazioneCalculed;
    lordoTransazioneMcv.value  = lordoTransazioneCalculed;
    

      } else {
        showError('Please check your number');
      }
 }
