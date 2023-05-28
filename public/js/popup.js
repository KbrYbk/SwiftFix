//всплывающая форма
function show_popap(id_popap) {
    var id = "#" + id_popap;
    $(id).addClass('active');
}

function myFunction() {
    var element = document.getElementById("modal-1");
    element.classList.remove("active");
  }