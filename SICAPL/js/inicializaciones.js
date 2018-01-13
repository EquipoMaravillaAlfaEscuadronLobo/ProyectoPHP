$(document).ready(function () {
    $('.datepicker').pickadate();
});

$(document).ready(function () {
    $('select').material_select();
});
 $(document).ready(function() {
    Materialize.updateTextFields();
  });
  $(document).ready(function() {
   $('[rel="popover"]').popover({
       trigger: 'hover',
       html: true,
   })
  });