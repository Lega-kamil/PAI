 function button() {
            var image = document.getElementById("szkiel");
            if (image.src.match("szkieletor")) {
                image.src = "images/skelet.jpg";
            }
            else {
                image.src = "images/szkieletor.jpg";
            }
        }
		
function sprawdzam() {
  
  let x = document.getElementById("numb").value;
  
  let text;
  if (isNaN(x) || x < 1 || x > 10) {
    text = "Liczba się nie zgadza";
  } else {
    text = "Liczba jest poprawna";
  }
  document.getElementById("odp").innerHTML = text;
}
