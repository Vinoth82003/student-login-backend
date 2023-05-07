console.log("table js is connected.....!");
const markdTable = document.querySelector(".mark-table");
const data = document.querySelectorAll(".data");
const gradeRow = document.querySelectorAll(".grade");
const btns = document.querySelector(".print-mark");
const view_mark = document.querySelector(".view-btn");


function markCheck() {
  data.forEach((e) => {
    if (e.innerHTML.length === 2) {
      markdTable.style.display = "block";
      btns.style.scale = 1;
    } else {
      console.log(e.innerHTML.length);
      markdTable.style.display = "none";
      btns.style.scale = 0;
    }
  });
}
markCheck();

var tot = [];
function totAvg() {
  var total = 0;

  data.forEach((e) => {
    if (e.innerHTML.length > 0) {
      tot.push(e.innerHTML);
    }
  });

  for (let i = 0; i < tot.length; i++) {
    total = total + parseInt(tot[i]);
  }
  document.querySelector(".total").innerHTML = total;
  var average = Math.floor(total / tot.length);
  document.querySelector(".average").innerHTML = average;
}
totAvg();

function grade() {
  var average = document.querySelector(".average").innerHTML;

  for (let i = 0; i < tot.length; i++) {
    if (tot[i] > 90 && tot[i] <= 100) {
      gradeRow[i].innerHTML = "A1";
    } else if (tot[i] > 80 && tot[i] <= 90) {
      gradeRow[i].innerHTML = "A2";
    } else if (tot[i] > 70 && tot[i] <= 80) {
      gradeRow[i].innerHTML = "B1";
    } else if (tot[i] > 60 && tot[i] <= 70) {
      gradeRow[i].innerHTML = "B2";
    } else if (tot[i] > 50 && tot[i] <= 60) {
      gradeRow[i].innerHTML = "C1";
    } else if (tot[i] > 40 && tot[i] <= 50) {
      gradeRow[i].innerHTML = "C2";
    } else if (tot[i] > 35 && tot[i] <= 40) {
      gradeRow[i].innerHTML = "D";
    } else {
      gradeRow[i].innerHTML = "Fail";
    }
  }

  if (average > 90 && average <= 100) {
    gradeRow[gradeRow.length - 1].innerHTML = "A1";
  } else if (average > 80 && average <= 90) {
    gradeRow[gradeRow.length - 1].innerHTML = "A2";
  } else if (average > 70 && average <= 80) {
    gradeRow[gradeRow.length - 1].innerHTML = "B1";
  } else if (average > 60 && average <= 70) {
    gradeRow[gradeRow.length - 1].innerHTML = "B2";
  } else if (average > 50 && average <= 60) {
    gradeRow[gradeRow.length - 1].innerHTML = "C1";
  } else if (average > 40 && average <= 50) {
    gradeRow[gradeRow.length - 1].innerHTML = "C2";
  } else if (average > 35 && average <= 40) {
    gradeRow[gradeRow.length - 1].innerHTML = "D";
  } else {
    gradeRow[gradeRow.length - 1].innerHTML = "No Rank";
  }
}
grade();

view_mark.addEventListener('click',function(){
markCheck();
});
