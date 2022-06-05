const container = document.querySelector('.containercus');
const seats = document.querySelectorAll('.row .seat:not(.occupied');
const count = document.getElementById('count');
const total = document.getElementById('total');
const movieSelect = document.getElementById('currPrice');
const curmov = document.getElementById('curMovie');
const curPrice = document.getElementById('curPrice');
const curtic = document.getElementById('curTic');
const place = document.getElementById('place');

populateUI();
let ticketPrice = +movieSelect.value;

// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem('selectedMovieIndex', movieIndex);
  localStorage.setItem('selectedMoviePrice', moviePrice);
}

// update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll('.row .seat.selected');

  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

  localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

  //copy selected seats into arr
  // map through array
  //return new array of indexes

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;
}

// get data from localstorage and populate ui
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));
  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        seat.classList.add('selected');
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem('selectedMovieIndex');

  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
  }
}

// Movie select event
movieSelect.addEventListener('change', (e) => {
  ticketPrice = +e.target.value;
  setMovieData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});



// Seat click event
container.addEventListener('click', (e) => {
  if (e.target.classList.contains('seat') && !e.target.classList.contains('occupied')) {
    e.target.classList.toggle('selected');

    updateSelectedCount();
  }
});

// intial count and total
updateSelectedCount();

document.querySelector("#subm").onclick = function(){
  if(total.innerText == 0){
    alert("Выберите места, пожалуйста!");
    location.reload();
  }
  curmov.innerText = document.getElementById('filmcur').innerText;
  document.querySelector('#val').value = document.getElementById('filmcur').innerText;
  document.querySelector('#valbil').value = count.innerText;
  document.querySelector('#valprice').value = total.innerText;
  curPrice.innerText = total.innerText;
  curTic.innerText = count.innerText;
  place.innerText = '';
  const selseats = document.querySelectorAll('.row .seat.selected');
  let i = 0;
  var rp = '';
  while (i < selseats.length) {
    place.innerText += selseats[i].parentElement.id + ' ряд ' + selseats[i].id + ' место; ';
    rp += selseats[i].parentElement.id + selseats[i].id;
    i++;
  }
  document.querySelector('#valplace').value = rp;
}
