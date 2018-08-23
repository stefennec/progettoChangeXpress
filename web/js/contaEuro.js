// Listen for submit
document.getElementById('euroCalcolatore').addEventListener('submit', function(c){

  // Hide results


  //Show loader
  // document.getElementById('loading').style.display = 'block';

  setTimeout(contaEuro);

  c.preventDefault();
 });

// funzione per calcolare gli euro secondo i tagli rispetto a quanto in cassaforte
function contaEuro(c){

  console.log('conteggio');

  var cinquecentoEuro = document.getElementById('cinquecento€');
      duecentoEuro = document.getElementById('duecento€');
      centoEuro = document.getElementById('cento€');
      cinquantaEuro = document.getElementById('cinquanta€');
      ventiEuro = document.getElementById('venti€');
      dieciEuro = document.getElementById('dieci€');
      cinqueEuro = document.getElementById('cinque€');
      dueEuro = document.getElementById('due€');
      unEuro = document.getElementById('uno€');
      cinquantaEuroCento = document.getElementById('cinquantaCent');
      ventiEuroCent = document.getElementById('ventiCent');
      dieciEuroCent = document.getElementById('dieciCent');
      cinqueEuroCent = document.getElementById('cinqueCent');
      dueEuroCent = document.getElementById('dueCent');
      unEuroCent = document.getElementById('unCent');

      // creo la costante principal e con parseFloat passo una stringa da stringa a numero

      quantitaCinquecento = parseFloat(cinquecentoEuro.value);
      quantitaDuecento = parseFloat(duecentoEuro.value);
      quantitaCento = parseFloat(centoEuro.value);
      quantitaCinquanta = parseFloat(cinquantaEuro.value);
      quantitaVenti = parseFloat(ventiEuro.value);
      quantitaDieci = parseFloat(dieciEuro.value);
      quantitaCinque = parseFloat(cinqueEuro.value);
      quantitaDue = parseFloat(dueEuro.value);
      quantitaUno = parseFloat(unEuro.value);
      quantitaCinquantaCent = parseFloat(cinquantaEuroCento.value);
      quantitaVentiCent = parseFloat(ventiEuroCent.value);
      quantitaDieciCent = parseFloat(dieciEuroCent.value);
      quantitaCinqueCent = parseFloat(cinqueEuroCent.value);
      quantitaDueCent = parseFloat(dueEuroCent.value);
      quantitaUnCent = parseFloat(unEuroCent.value);

      // Totali per Taglio Euro

      totale500.value = (quantitaCinquecento*500).toFixed(2);
      totale200.value = (quantitaDuecento*200).toFixed(2);
      totale100.value = (quantitaCento*100).toFixed(2);
      totale50.value = (quantitaCinquanta*50).toFixed(2);
      totale20.value = (quantitaVenti*20).toFixed(2);
      totale10.value = (quantitaDieci*10).toFixed(2);
      totale5.value = (quantitaCinque*5).toFixed(2);
      totale2.value = (quantitaDue*2).toFixed(2);
      totale1.value = (quantitaUno*1).toFixed(2);
      totale050.value = (quantitaCinquantaCent*0.50).toFixed(2);
      totale020.value = (quantitaVentiCent*0.20).toFixed(2);
      totale010.value = (quantitaDieciCent*0.10).toFixed(2);
      totale005.value = (quantitaCinqueCent*0.05).toFixed(2);
      totale002.value = (quantitaDueCent*0.02).toFixed(2);
      totale001.value = (quantitaUnCent*0.01).toFixed(2);

      // SUBTOTALI



      totaleBanconote.value = (parseFloat(totale500.value) + parseFloat(totale200.value) + parseFloat(totale100.value) + parseFloat(totale50.value) + parseFloat(totale20.value) + parseFloat(totale10.value) + parseFloat(totale5.value)).toFixed(2);
      totaleMonete.value = (parseFloat(totale2.value) + parseFloat(totale1.value) + parseFloat(totale050.value) + parseFloat(totale020.value) + parseFloat(totale010.value) + parseFloat(totale005.value) + parseFloat(totale002.value) + parseFloat(totale001.value)).toFixed(2);

      //totale
      totaleCombinato.value = (parseFloat(totaleBanconote.value) + parseFloat(totaleMonete.value)).toFixed(2);
};
