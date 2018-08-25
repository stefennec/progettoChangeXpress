// Listen for submit
document.getElementById('mcv-form').addEventListener('submit', function(m){

  // Hide results
    document.getElementById('results').style.display = 'none';

  //Show loader
  // document.getElementById('loading').style.display = 'block';

  setTimeout(calculateResultsMcv);

  m.preventDefault();
 });




 // calculate Result
 function calculateResultsMcv(m){



  console.log('calculating');

  // UI variables
  var quantitaMcv = document.getElementById('quantitaMcv');
       rateMcv = document.getElementById('rateMcv');
       commissioneMcv = document.getElementById('commissioneMcv');
       spesaMcv = document.getElementById('spesaMcv');
       nettoTransazioneMcv = document.getElementById('nettoTransazioneMcv');
       commissioneTransazioneMcv = document.getElementById('commissioneTransazioneMcv');
       lordoTransazioneMcv = document.getElementById('lordoTransazioneMcv');

  // creo la costante principal e con parseFloat passo una stringa da stringa a numero
       quantitaValutaMcv = parseFloat(quantitaMcv.value);
       tassoRateMcv = parseFloat(rateMcv.value);
       commissionePercentualeMcv = parseFloat(commissioneMcv.value);
       spesaFissaMcv = parseFloat(spesaMcv.value);

  // Compute monthly payment
  //const x = Math.pow(1 + calculatedInterest, calculatedPayments);
       monthlyMcv = (quantitaValutaMcv*tassoRateMcv);

  if(isFinite(monthlyMcv)) {

    commissioneTransazioneMcv.value = (monthlyMcv * (commissionePercentualeMcv/100)).toFixed(2);
    nettoTransazioneMcv.value = (monthlyMcv + (monthlyMcv * commissionePercentualeMcv/100) + spesaFissaMcv).toFixed(2);
    lordoTransazioneMcv.value = monthlyMcv.toFixed(2);//al max 2 decimali

    // Hide results
    document.getElementById('results').style.display = 'block';

    //Show loader
    // document.getElementById('loading').style.display = 'none';
  } else {
    showError('Please check your number');
  }



 }

 // Show error
 function showError(error){

    // Hide results
    document.getElementById('results').style.display = 'none';

    //Hide loader
    document.getElementById('loading').style.display = 'none';

    //Create a div
    const errorDiv = document.createElement('div');

    // Get elements
    const card = document.querySelector('.card');
    const heading = document.querySelector('.heading');


    // Add ClassName
    errorDiv.className = 'alert alert-danger';

    //Add textNode and append to div
    errorDiv.appendChild(document.createTextNode(error))

    // Insert Error above heading
    card.insertBefore(errorDiv, heading);

    // insertBefore->all'interno di un oggetto richiama quello che dico io prima di un altro

    // Clear error after 3 seconds
    setTimeout(clearError, 3000)
 }



    //after 3 second active the clearError
 function clearError(){
    document.querySelector('.alert').remove();
 }
