// Listen for submit
document.getElementById('dollariCalcolatore').addEventListener('submit', function(d){

  // Hide results


  //Show loader
  // document.getElementById('loading').style.display = 'block';

  setTimeout(contaDollari);

  d.preventDefault();
 });

// funzione per calcolare gli euro secondo i tagli rispetto a quanto in cassaforte
function contaDollari(d){

  console.log('conteggio');

  var centoDollari = document.getElementById('cento$');
      cinquantaDollari = document.getElementById('cinquanta$');
      ventiDollari = document.getElementById('venti$');
      dieciDollari = document.getElementById('dieci$');
      cinqueDollari = document.getElementById('cinque$');
      dueDollari = document.getElementById('due$');
      unDollari = document.getElementById('un$');
      overlimitDollari = document.getElementById('totaleOverlimit');
      stockDollari = document.getElementById('totaleStock');


      // creo la costante principal e con parseFloat passo una stringa da stringa a numero


      quantitaCentoDollari = parseFloat(centoDollari.value);
      quantitaCinquantaDollari = parseFloat(cinquantaDollari.value);
      quantitaVentiDollari = parseFloat(ventiDollari.value);
      quantitaDieciDollari = parseFloat(dieciDollari.value);
      quantitaCinqueDollari = parseFloat(cinqueDollari.value);
      quantitaDueDollari = parseFloat(dueDollari.value);
      quantitaUnoDollari = parseFloat(unDollari.value);
      quantitaOverlimitDollari = parseFloat(overlimitDollari.value);
      quantitaStockDollari = parseFloat(stockDollari.value);


      // Totali per Taglio Euro


      totale100USD.value = (quantitaCentoDollari*100).toFixed(2);
      totale50USD.value = (quantitaCinquantaDollari*50).toFixed(2);
      totale20USD.value = (quantitaVentiDollari*20).toFixed(2);
      totale10USD.value = (quantitaDieciDollari*10).toFixed(2);
      totale5USD.value = (quantitaCinqueDollari*5).toFixed(2);
      totale2USD.value = (quantitaDueDollari*2).toFixed(2);
      totale1USD.value = (quantitaUnoDollari*1).toFixed(2);


      // SUBTOTALI



      // totaleBanconote.value = (parseFloat(totale500.value) + parseFloat(totale200.value) + parseFloat(totale100.value) + parseFloat(totale50.value) + parseFloat(totale20.value) + parseFloat(totale10.value) + parseFloat(totale5.value)).toFixed(2);
      // totaleMonete.value = (parseFloat(totale2.value) + parseFloat(totale1.value) + parseFloat(totale050.value) + parseFloat(totale020.value) + parseFloat(totale010.value) + parseFloat(totale005.value) + parseFloat(totale002.value) + parseFloat(totale001.value)).toFixed(2);

      //totale
      totaleCombinatoDollari.value = (parseFloat(totale100USD.value) + parseFloat(totale50USD.value) + parseFloat(totale20USD.value)  + parseFloat(totale10USD.value) + parseFloat(totale5USD.value) + parseFloat(totale2USD.value)  + parseFloat(totale1USD.value)  + parseFloat(overlimitDollari.value)  + parseFloat(stockDollari.value) ).toFixed(2);
};
