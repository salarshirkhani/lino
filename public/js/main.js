
// side bar for [roduct].
const viewportWidth = screen.width;
if (viewportWidth >= 1000) {
  $('#side').stick_in_parent(); 
}   

// side bar contolor
const menuItems = document.querySelectorAll('.menu-item');

menuItems.forEach(item => {
  item.addEventListener('click', () => {

    menuItems.forEach(item => item.classList.remove('active'));

    item.classList.add('active');
  });
});

//chart 
var xValues = ["لینو", "شاخص کل", "شاخص کل", "دلار"];
var yValues = [150, 49, 44, -24, 0];
var barColors = ["green", "blue ","orange","red"];

Chart.defaults.font.family = "B_Koodak_Bold";
Chart.defaults.font.size = 18;
new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      label: '',
      backgroundColor: barColors,
      data: yValues,
      barPercentage: 1,
    }]
  },
  options: {
    legend: {display: false},
    title: {

    }
  }
});
///////////////

function button_table(button) {
  if (button == "tab-1") {
    document.getElementById("table-1").style.zIndex = 0;
    document.getElementById("tab-2").style.opacity = 0.5;
    document.getElementById("tab-1").style.opacity = 1;
    document.getElementById("table-2").style.zIndex = -1;
  }
  else if (button == "tab-2") {
    document.getElementById("table-2").style.zIndex = 0;
    document.getElementById("tab-1").style.opacity = 0.5;
    document.getElementById("tab-2").style.opacity = 1;
    document.getElementById("table-1").style.zIndex = -1;
  }
} 


//////////////// chart account
$(function () {
  $('.chart').easyPieChart({
    size:170,
    barColor:"#4EFF5F",
    scaleLength:0,
    lineWidth: 5,
    trackColor:"#58697c7d",
    lineCap:"circal",
    animate:2000,
  })
  
})

/////////////

var isSearchBoxVisible = false;
var searchBox = document.getElementById("searchbox");
var skipClose;

function toggleSearchBox() {
  showSearchBox(!isSearchBoxVisible);
  skipCloseFn();
}

function showSearchBox(show=true){
   searchBox.style.display = show ? '' : 'none'; 
   isSearchBoxVisible = show;
}

function skipCloseFn(){
  skipClose = true;
}

showSearchBox(false);

// This can be directly given in HTML as well as given for outer search icon.
searchBox.querySelector('input').addEventListener('click', skipCloseFn);
//Can be included only if necessary
searchBox.querySelector('button').addEventListener('click', function(e){
  e.preventDefault();
  skipCloseFn();
});


document.addEventListener('click', function(){
  if(!skipClose){
    showSearchBox(false);
  }
  skipClose = false;
});



////modal 
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})


