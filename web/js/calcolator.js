// Listen for submit
document.getElementById('loan-form').addEventListener('submit', function(e){

  // Hide results
    document.getElementById('results').style.display = 'none';

  //Show loader 
  document.getElementById('loading').style.display = 'block';

  setTimeout(calculateResults, 1000);

  e.preventDefault();
});




// calculate Result
function calculateResults(e){

    

  console.log('calculating');

  // UI variables
  const amount = document.getElementById('amount');
  const interest = document.getElementById('interest');
  const years = document.getElementById('years');
  const monthlyPayment = document.getElementById('monthly-payment');
  const totalPayment = document.getElementById('total-payment');
  const totalInterest = document.getElementById('total-interest'); 

  // creo la costante principal e con parseFloat passo una stringa da stringa a numero
  const principal = parseFloat(amount.value);
  const calculatedInterest = parseFloat(interest.value) / 100 / 12;
  const calculatedPayments = parseFloat(years.value) * 12;

  // Compute monthly payment
  const x = Math.pow(1 + calculatedInterest, calculatedPayments);
  const monthly = (principal*x*calculatedInterest)/(x-1);

  if(isFinite(monthly)) {
    monthlyPayment.value = monthly.toFixed(2);//al max 2 decimali
    totalPayment.value = (monthly * calculatedPayments).toFixed(2);
    totalInterest.value = ((monthly * calculatedPayments)-principal).toFixed(2);

    // Hide results
    document.getElementById('results').style.display = 'block';

    //Show loader 
    document.getElementById('loading').style.display = 'none';
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