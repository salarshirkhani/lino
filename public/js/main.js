
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
    plugins: {
      legend: {
        display: false
      }
    }
  }
});
///////////////

function button_table(button) {
  if (button == "tab-1") {
    document.getElementById("myTable").style.zIndex = 0;
    document.getElementById("tab-2").style.opacity = 0.5;
    document.getElementById("tab-1").style.opacity = 1;
    document.getElementById("table-2").style.zIndex = -1;
  }
  else if (button == "tab-2") {
    document.getElementById("table-2").style.zIndex = 0;
    document.getElementById("tab-1").style.opacity = 0.5;
    document.getElementById("tab-2").style.opacity = 1;
    document.getElementById("myTable").style.zIndex = -1;
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


///// sort table 
new DataTable('#myTable', {
  order: [[3, 'desc']],
  info: false,
  paging: false,
  language: {
    searchPlaceholder: "جستجو کنید",
    search: "",
    emptyTable: "هیچ داده ای موجود نیست",
    zeroRecords: "هیچ داده ای موجود نیست",

  } 
});
$('#myTable_filter input').addClass('whatever');
const search = document.querySelector(".bboo")
const searchbox = document.querySelector(".whatever")


document.addEventListener("click", function () {

  document.querySelector(".whatever").style.display = "none";
  
});

search.addEventListener("click", function (event) {
  event.stopPropagation(); // جلوگیری از انتشار رویداد به سرچ باکس
  document.querySelector(".whatever").style.display = "block";
  
});
searchbox.addEventListener("click", function (event) {
  event.stopPropagation(); // جلوگیری از انتشار رویداد به سرچ باکس
});

new DataTable('table.display', {
  info: false,
  ordering: true,
  paging: false,
  language: {
    searchPlaceholder: "جستجو کنید",
    search: "",
    emptyTable: "هیچ داده ای موجود نیست",
    zeroRecords: "هیچ داده ای موجود نیست",
  } 
});
new DataTable('#table-2', {
  order: [[3, 'desc']],
  info: false,
  paging: false,
  language: {
    searchPlaceholder: "جستجو کنید",
    search: "",
  } 
});

$('table .display input').addClass('what');
$('#table-2_filter input').addClass('what2');



///modal_percentages
const searchmo = document.querySelector(".bboomo")
const searchboxmo = document.querySelector(".what")

document.addEventListener("click", function () {

  document.querySelector(".what").style.display = "none";
});

searchmo.addEventListener("click", function (event) {
  event.stopPropagation(); // جلوگیری از انتشار رویداد به سرچ باکس
  document.querySelector(".what").style.display = "block";
});
searchboxmo.addEventListener("click", function (event) {
  event.stopPropagation(); // جلوگیری از انتشار رویداد به سرچ باکس
});

///



////////////////
///stok tab 2
const searchmo2 = document.querySelector(".bboo2")
const searchboxmo2 = document.querySelector(".what2")

document.addEventListener("click", function () {

  document.querySelector(".what2").style.display = "none";
});

searchmo2.addEventListener("click", function (event) {
  event.stopPropagation(); // جلوگیری از انتشار رویداد به سرچ باکس
  document.querySelector(".what2").style.display = "block";
});
searchboxmo2.addEventListener("click", function (event) {
  event.stopPropagation(); // جلوگیری از انتشار رویداد به سرچ باکس
});

///


////modal 
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})




