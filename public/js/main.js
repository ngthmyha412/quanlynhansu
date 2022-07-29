document.addEventListener("DOMContentLoaded", function(){
document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

    let nextEl = element.nextElementSibling;
    let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
            mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
}) // forEach
}); 
// DOMContentLoaded  end

var xValues = [100,200,300,400,500,600,700,800,900,1000];

new Chart("myChart", {
    type: "line",
    data: {
    labels: xValues,
    datasets: [{ 
        data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
        fill: true,
        backgroundColor: "rgba(151,249,190,0.5)",
        borderColor: "rgba(152,235,1,1)",
        pointColor: "black"
    }, { 
        data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
        fill: true,
        backgroundColor: "rgba(252,147,65,0.5)",
        borderColor: "rgba(173,173,173,1)",
        pointColor: "black"
    }]
    },
    options: {
    legend: {display: false}
    }
});

new Chart("myChart01", {
    type: "line",
    data: {
    labels: xValues,
    datasets: [{ 
        data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
        fill: true,
        backgroundColor: "rgba(151,249,190,0.5)",
        borderColor: "rgba(152,235,1,1)",
        pointColor: "black"
    }, { 
        data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
        fill: true,
        backgroundColor: "rgba(252,147,65,0.5)",
        borderColor: "rgba(173,173,173,1)",
        pointColor: "black"
    }]
    },
    options: {
    legend: {display: false}
    }
});

new Chart("myChart02", {
    type: "line",
    data: {
    labels: xValues,
    datasets: [{ 
        data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
        fill: true,
        backgroundColor: "rgba(151,249,190,0.5)",
        borderColor: "rgba(152,235,1,1)",
        pointColor: "black"
    }, { 
        data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
        fill: true,
        backgroundColor: "rgba(252,147,65,0.5)",
        borderColor: "rgba(173,173,173,1)",
        pointColor: "black"
    }]
    },
    options: {
    legend: {display: false}
    }
});

new Chart("myChart03", {
    type: "line",
    data: {
    labels: xValues,
    datasets: [{ 
        data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
        fill: true,
        backgroundColor: "rgba(151,249,190,0.5)",
        borderColor: "rgba(152,235,1,1)",
        pointColor: "black"
    }, { 
        data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
        fill: true,
        backgroundColor: "rgba(252,147,65,0.5)",
        borderColor: "rgba(173,173,173,1)",
        pointColor: "black"
    }]
    },
    options: {
    legend: {display: false}
    }
});

new Chart("myChart04", {
    type: "line",
    data: {
    labels: xValues,
    datasets: [{ 
        data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
        fill: true,
        backgroundColor: "rgba(151,249,190,0.5)",
        borderColor: "rgba(152,235,1,1)",
        pointColor: "black"
    }, { 
        data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
        fill: true,
        backgroundColor: "rgba(252,147,65,0.5)",
        borderColor: "rgba(173,173,173,1)",
        pointColor: "black"
    }]
    },
    options: {
    legend: {display: false}
    }
});

let addE = document.querySelector("#addEmployeeBtn");
addE.addEventListener("click", addEmployee);

let cancelAddE = document.querySelectorAll(".cancelAddE");
for (var i = 0; i < cancelAddE.length; i++) {
    cancelAddE[i].addEventListener("click", addEmployee);
}

function addEmployee(){
    if(document.querySelector("#addEmployee").style.display == "contents"){
        document.querySelector("#addEmployee").style.display = "none";
        document.querySelector(".box").style.position = "relative";
    }    
    else {
        document.querySelector("#addEmployee").style.display = "contents";
        document.querySelector(".box").style.position = "absolute";
    }
}

//Initialize sideNav
var sideNav = document.querySelector('.sidenav');
M.Sidenav.init(sideNav);

//Initialize Modal
var modal = document.querySelector('.modal');
M.Modal.init(modal);

//initialize Form Select
$(document).ready(function(){
    $('select').formSelect();
    $('.datepicker').datepicker();
    $(".dropdown-trigger").dropdown();
    $('.collapsible').collapsible();
  });
if(document.getElementById('address')){
  M.textareaAutoResize($('#address'));
}

