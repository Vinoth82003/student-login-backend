console.log("error js connected..!");
const error_size = document.getElementById('error');
console.log(error_size);

function errorSize() {
  if (error_size.innerHTML.length === 34) {
    error_size.style.display = "none";
  } else {
    error_size.style.display = "block";
}

}
errorSize();
