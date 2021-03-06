// Listen for submit
document.getElementById('acquisto-form').addEventListener('submit', function(e){

  // Hide results
    // document.getElementById('results').style.display = 'none';

  //Show loader
  // document.getElementById('loading').style.display = 'block';

  // setTimeout(calculateResults);

  e.preventDefault();
 });




 // calculate Result
 function calculateResults(e){

  console.log('calculating');

  // UI variables
  var quantita = document.getElementById('quantita');
       rate = document.getElementById('rate');
       commissione = document.getElementById('commissione');
       spesa = document.getElementById('spesa');
       nettoTransazione = document.getElementById('netto-transazione');
       commissioneTransazione = document.getElementById('commissione-transazione');
       lordoTransazione = document.getElementById('lordo-transazione');

  // creo la costante principal e con parseFloat passo una stringa da stringa a numero
       quantitaValuta = parseFloat(quantita.value);
       tassoRate = parseFloat(rate.value);
       commissionePercentuale = parseFloat(commissione.value);
       spesaFissa = parseFloat(spesa.value);

  // Compute monthly payment
  //const x = Math.pow(1 + calculatedInterest, calculatedPayments);
       monthly = (quantitaValuta/tassoRate);

  if(isFinite(monthly)) {

    commissioneTransazione.value = (monthly * (commissionePercentuale/100)).toFixed(2);
    nettoTransazione.value = (monthly - (monthly * commissionePercentuale/100) - spesaFissa).toFixed(2);
    lordoTransazione.value = monthly.toFixed(2);//al max 2 decimali

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
