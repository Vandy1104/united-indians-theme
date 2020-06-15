console.log('js');

$=jQuery;

$(document).ready(function(){

//   function validateForm()
// {
//   var fields = ["name, mobile", "itemName", "ePrice"];
//
//   var i, l = fields.length;
//   var fieldname;
//   for (i = 0; i < l; i++) {
//     fieldname = fields[i];
//     if (document.forms.myForm.fieldname.value === "") {
//       alert(fieldname + " can not be empty");
//       return false;
//     }
//   }
//     return true;
// }

// function test()
// {
//    alert("thank you");
// }

// submit button alert and form fields clear

var name = document.getElementById('name');
var mobile = document.getElementById('mobile');
var itemName = document.getElementById('itemName');
var ePrice = document.getElementById('ePrice');

  $('#donate').click(function(){
    Swal.fire('Thanks for donation! Yours Item will be picked up shortly.');
    $('#exampleModal').hide();
    $('.modal-backdrop').hide();
    $('#name').val('');
    $('#mobile').val('');
    $('#itemName').val('');
    $('#ePrice').val('');
  });

});
