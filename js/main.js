var action = document.getElementById("selector")
var selector_form = document.getElementById("selector-form");

action.addEventListener("change", selection);

function selection(e){
   selector_form.setAttribute("action", "./"+e.target.value+".php"); 
}