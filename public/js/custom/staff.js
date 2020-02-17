$(document).ready(function(){


    $(document).on('click', "#edit-staff-button", function() {

      $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
    
      var options = {
        'backdrop': 'static'
      };
      $('#staff-edit-modal').modal(options)
    });
    
      // on modal show
      $('#staff-edit-modal').on('show.bs.modal', function() {
        var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
        var row = el.closest(".data-row");
        // get the data
        var id = el.val();
        var staffName = row.children("#staffName").text();
        var staffPhone  = row.children("#staffPhone").text();
        var staffAddress = row.children("#staffAddress").text();
        var staffSalary = row.children("#staffSalary").text();
        // fill the data in the input fields
        
        $("#customerEditId").val('0'+id);
        $("#StaffEditId").val(id);
        $("#editModalStaffName").val(staffName);
        $("#editModalStaffPhone").val(staffPhone);
        $("#editModalStaffAddress").val(staffAddress);
        $("#editModalStaffSalary").val(staffSalary);
        
        
       
        

  

      // on modal hide
      $('#staff-edit-modal').on('hide.bs.modal', function() {
        $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
        $("#edit-form").trigger("reset");
      });













  });
});