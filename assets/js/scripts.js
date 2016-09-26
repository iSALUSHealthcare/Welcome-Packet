//Tooltips for Checkboxes Masks for inputs

$('#practice-zip').mask("99999?-9999");
$('#pay-to-zip').mask("99999?-9999");
$('#provider-zip').mask("99999?-9999");
$('#bill-to-zip').mask("99999?-9999");
$('#location-zip').mask("99999?-9999");
$("#practice-phone").mask('(999) 999-9999', {placeholder: 'x'});
$("#practice-fax").mask('(999) 999-9999', {placeholder: 'x'});
$("#contact-phone").mask('(999) 999-9999', {placeholder: 'x'});
$("#bill-to-phone").mask('(999) 999-9999', {placeholder: 'x'});
$("#pay-to-phone").mask('(999) 999-9999', {placeholder: 'x'});
$("#provider-practice-phone").mask('(999) 999-9999', {placeholder: 'x'});
$("#provider-practice-fax").mask('(999) 999-9999', {placeholder: 'x'});
$("#location-fax").mask('(999) 999-9999', {placeholder: 'x'});
$("#location-phone").mask('(999) 999-9999', {placeholder: 'x'});
$("#tax-id").mask('99-9999999', {placeholder: 'x'});
$("#practice-npi").mask('9999999999', {placeholder: 'x'});
$("#provider-npi").mask('9999999999', {placeholder: 'x'});
$("#provider-dea").mask('9999999', {placeholder: 'x'});
$("#provider-state-license").mask('999999', {placeholder: 'x'});
$("#provider-medicaid-number").mask('9999999', {placeholder: 'x'});
$("#provider-medicare-ptan").mask('9999999', {placeholder: 'x'});
$("#provider-rr-medicare-ptan").mask('9999999', {placeholder: 'x'});
$("#provider-pin").mask('9999', {placeholder: 'x'});
//Clones pages
$('.clone-users').cloneya();
$('.clone-locations').cloneya();
$('.clone-payers').cloneya();
$('.clone-appts').cloneya();
$('.clone-documents').cloneya();
$('#animate-clone-users').cloneya().on('before_clone.cloneya', function (event, toclone) {
  // do something
}).on('after_clone.cloneya', function (event, toclone, newclone) {
  // do something
}).on('before_append.cloneya', function (event, toclone, newclone) {
  $(newclone).css('display', 'none');
  $(toclone).fadeOut('fast', function () {
    $(this).fadeIn('fast');
  });
}).on('after_append.cloneya', function (event, toclone, newclone) {
  $(newclone).slideToggle();
  console.log('finished cloning ' + toclone.attr('id') + ' to ' + newclone.attr('id'));
}).off('remove.cloneya').on('remove.cloneya', function (event, clone) {
  clone.css('background-color', 'red');

  $(clone).slideToggle('slow', function () {
    $(clone).remove();
  });

}).on('after_delete.cloneya', function () {
  console.log('deleted');
});

$('#animate-clone-locations').cloneya().on('before_clone.cloneya', function (event, toclone) {
  // do something
}).on('after_clone.cloneya', function (event, toclone, newclone) {
  // do something
}).on('before_append.cloneya', function (event, toclone, newclone) {
  $(newclone).css('display', 'none');
  $(toclone).fadeOut('fast', function () {
    $(this).fadeIn('fast');
  });
}).on('after_append.cloneya', function (event, toclone, newclone) {
  $(newclone).slideToggle();
  console.log('finished cloning ' + toclone.attr('id') + ' to ' + newclone.attr('id'));
}).off('remove.cloneya').on('remove.cloneya', function (event, clone) {
  clone.css('background-color', 'red');

  $(clone).slideToggle('slow', function () {
    $(clone).remove();
  });

}).on('after_delete.cloneya', function () {
  console.log('deleted');
});
$('#animate-clone-appts').cloneya().on('before_clone.cloneya', function (event, toclone) {
  // do something
}).on('after_clone.cloneya', function (event, toclone, newclone) {
  // do something
}).on('before_append.cloneya', function (event, toclone, newclone) {
  $(newclone).css('display', 'none');
  $(toclone).fadeOut('fast', function () {
    $(this).fadeIn('fast');
  });
}).on('after_append.cloneya', function (event, toclone, newclone) {
  $(newclone).slideToggle();
  console.log('finished cloning ' + toclone.attr('id') + ' to ' + newclone.attr('id'));
}).off('remove.cloneya').on('remove.cloneya', function (event, clone) {
  clone.css('background-color', 'red');

  $(clone).slideToggle('slow', function () {
    $(clone).remove();
  });

}).on('after_delete.cloneya', function () {
  console.log('deleted');
});

$('#animate-clone-payers').cloneya().on('before_clone.cloneya', function (event, toclone) {
  // do something
}).on('after_clone.cloneya', function (event, toclone, newclone) {
  // do something
}).on('before_append.cloneya', function (event, toclone, newclone) {
  $(newclone).css('display', 'none');
  $(toclone).fadeOut('fast', function () {
    $(this).fadeIn('fast');
  });
}).on('after_append.cloneya', function (event, toclone, newclone) {
  $(newclone).slideToggle();
  console.log('finished cloning ' + toclone.attr('id') + ' to ' + newclone.attr('id'));
}).off('remove.cloneya').on('remove.cloneya', function (event, clone) {
  clone.css('background-color', 'red');

  $(clone).slideToggle('slow', function () {
    $(clone).remove();
  });

}).on('after_delete.cloneya', function () {
  console.log('deleted');
});

$('#animate-clone-documents').cloneya().on('before_clone.cloneya', function (event, toclone) {
  // do something
}).on('after_clone.cloneya', function (event, toclone, newclone) {
  // do something
}).on('before_append.cloneya', function (event, toclone, newclone) {
  $(newclone).css('display', 'none');
  $(toclone).fadeOut('fast', function () {
    $(this).fadeIn('fast');
  });
}).on('after_append.cloneya', function (event, toclone, newclone) {
  $(newclone).slideToggle();
  console.log('finished cloning ' + toclone.attr('id') + ' to ' + newclone.attr('id'));
}).off('remove.cloneya').on('remove.cloneya', function (event, clone) {
  clone.css('background-color', 'red');

  $(clone).slideToggle('slow', function () {
    $(clone).remove();
  });

}).on('after_delete.cloneya', function () {
  console.log('deleted');
});


// Single select
$('#payer-eclaims').multipleSelect({placeholder: "Do You Plan on Sending eClaims?", single: true});
$('#payer-era').multipleSelect({placeholder: "Do You Want to Receive Electronic EOB's?", single: true});
$('#location-state').multipleSelect({placeholder: "Please Select Your State", single: true});
$('#provider-state').multipleSelect({placeholder: "Please Select Your State", single: true});
$('#pay-to-state').multipleSelect({placeholder: "Please Select Your State", single: true});
$('#company-state').multipleSelect({placeholder: "Please Select Your State", single: true});
$('#bill-to-state').multipleSelect({placeholder: "Please Select Your State", single: true});
$('#location-pos').multipleSelect({placeholder: "Please Select Your POS", single: true});
$('#company-npi').multipleSelect({placeholder: "Please Select NPI Type", single: true});
$('#provider-mu').multipleSelect({placeholder: "Are They Meaningful Use Compliant?", single: true});
$('#provider-medicaid').multipleSelect({placeholder: "Are They Medicare or Medicaid?", single: true});
$('#provider-stage').multipleSelect({placeholder: "What Stage are They at?", single: true});
