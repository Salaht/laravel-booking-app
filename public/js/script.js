// eerst delete

$(document).on("click", ".delete button", function (e) {
  e.preventDefault(); 

  var id = $(this).attr("value");

  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'DELETE',
    url: '/admin/holiday/' + id,
    success: function(){
      var holiday = "#holiday-" + id;
      $(holiday).remove();
    },
    error: function (data) {
      $('body').html(data["responseText"]);
    }
  });
});

// create


$("#create-save").click(function (e) {
  e.preventDefault(); 
  $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   },
   type: 'POST',
   dataType: 'json',
   url: '/admin/holiday',
   data: {
    name: $('#create-title').val(),
    description: $('#create-description').val(),
    decimal: $('#create-price').val(),
    country_id: $('#select-country').val(),
    accommodation_id: $('#select-accommodation').val()
  },
  success: function(data){
    $('#createModal').modal('hide');
    $('#holidays tbody').append("<tr id='holiday-"+ data["id"] +"'><td>"+ data["name"] +"</td><td>"+ data["description"] +"</td><td>"+ data["decimal"] +"</td><td>"+ data["country"]["name"] +"</td><td>"+ data["accommodation"]["name"] +"</td><td class='edit'><button id='edit' type='button' class='btn btn-primary' data-toggle='modal' data-target='#createModal' value="+ data["id"] +">Edit</button></td><td  class='delete'><button type='button' class='btn btn-primary' value="+ data["id"] +">Delete</button></td></tr>");
    $('#create-title').val('');
    $('#create-description').val('');
    $('#create-price').val('');
  },
  error: function (data) {
   $('body').html(data["responseText"]);
 }
});
});

// modal EDIT get data
var editId;
$('#editModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  editId = button[0]["value"];

  
  $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   },
   type: 'GET',
   dataType: 'json',
   url: '/admin/holiday/' + editId + '/edit',
   success: function(data){
     $('#edit-title').val(data["name"]);
     $('#edit-description').val(data["description"]);
     $('#edit-price').val(data["decimal"]);
     $('#select-country').val(data["country_id"]);
     $('#select-accommodation').val(data["accommodation_id"]);
   },
   error: function (data) {
     $('body').html(data["responseText"]);
   }
 });
});

// button put

$("#edit-save").click(function (e) {
  e.preventDefault();

  $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   },
   type: 'PUT',
   dataType: 'json',
   url: '/admin/holiday/' + editId,
   data: {
    name: $('#edit-title').val(),
    description: $('#edit-description').val(),
    decimal: $('#edit-price').val(),
    country_id: $('#select-country').val(),
    accommodation_id: $('#select-accommodation').val()
  },
  success: function(data){
    var newData = [data["name"],
      data["description"],
      data["decimal"],
      data["country"]["name"],
      data["accommodation"]["name"]
    ];
      //loop door de waardes en voeg ze toe aan de tablerow
      for (var i = 0; i <= 4; i++) {
       $('#holiday-'+data.id).children('td')[i].innerHTML = newData[i];
     }
      $('#editModal').modal('hide');
    },
    error: function (data) {
     $('body').html(data["responseText"]);
   }
 });
});

var reserveerId;

// modal data personen,vertrekperiode,reisduur, 

$('#reservationModal').on('show.bs.modal', function (event) {
 var button = $(event.relatedTarget);
  reserveerId = button[0]["value"];

  
});




$("#reservation").click(function (e) { 
  console.log(reserveerId);
});
