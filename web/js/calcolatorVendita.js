// Listen for submit
document.getElementById('loan-form').addEventListener('submit', function(v){

  // Hide results
    document.getElementById('results').style.display = 'none';

  //Show loader
  // document.getElementById('loading').style.display = 'block';

  setTimeout(calculateResultsVendita);

  v.preventDefault();
 });




 // calculate Result
 function calculateResultsVendita(v){



  console.log('calculating');

  // UI variables
  var quantitaVendita = document.getElementById('quantitaVendita');
       rateVendita = document.getElementById('rateVendita');
       commissioneVendita = document.getElementById('commissioneVendita');
       spesaVendita = document.getElementById('spesaVendita');
       nettoTransazioneVendita = document.getElementById('netto-transazioneVendita');
       commissioneTransazioneVendita = document.getElementById('commissione-transazioneVendita');
       lordoTransazioneVendita = document.getElementById('lordo-transazioneVendita');

  // creo la costante principal e con parseFloat passo una stringa da stringa a numero
       quantitaValutaVendita = parseFloat(quantitaVendita.value);
       tassoRateVendita = parseFloat(rateVendita.value);
       commissionePercentualeVendita = parseFloat(commissioneVendita.value);
       spesaFissaVendita = parseFloat(spesaVendita.value);

  // Compute monthly payment
  //const x = Math.pow(1 + calculatedInterest, calculatedPayments);
       monthlyVendita = (quantitaValutaVendita*tassoRateVendita);

  if(isFinite(monthlyVendita)) {

    commissioneTransazione.value = (monthlyVendita * (commissionePercentualeVendita/100)).toFixed(2);
    nettoTransazione.value = (monthlyVendita - (monthlyVendita * commissionePercentualeVendita/100) - spesaFissaVendita).toFixed(2);
    lordoTransazione.value = monthlyVendita.toFixed(2);//al max 2 decimali

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
