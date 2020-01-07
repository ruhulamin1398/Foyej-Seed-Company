$(document).ready(function () {




    // supplier Area Start 

    $('#purchasePageAddSupplierForm').hide();
    $("#purchasePageSupplierView").hide();

    $("#purchasePageSupplierPhoneField").change(function () {
        var phoneNumber = $("#purchasePageSupplierPhoneField").val();

        $.get("/supplierscheck?phone=" + phoneNumber, function (data, status) {
            if (data == 1) {

                $.get("/api/supplier/" + phoneNumber, function (data, status) {

                    $("#purchasePageSupplierName").text(data.name);
                    $("#purchasePageSupplierPhone").text(data.phone);
                    $("#purchasePageSupplieCompany").text(data.company);
                    $("#purchasePageSupplierDue").html("Due : " + data.due);
                    
                    $('#purchasePageAddSupplierForm').hide();
                    $("#purchasePageSupplierView").show();
                });
            } else {
                $('#purchasePageAddSupplierForm').show();
                $("#purchasePageSupplierView").hide();
            }

        });
    });


    $("#purchasePageAddSupplierButton").click(function () {
        var phoneNumber = $("#purchasePageSupplierPhoneField").val();
        $("#purchasePageAddSupplierFormPhone").val(phoneNumber);
        var frm = $('#purchasePageAddSupplierForm');
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {

                $.get("/api/supplier/" + phoneNumber, function (data, status) {

                    $("#purchasePageSupplierName").text(data.name);
                    $("#purchasePageSupplierPhone").text(data.phone);
                    $("#purchasePageSupplieCompany").text(data.company);
                    $("#purchasePageSupplierDue").html("Due : " + data.due);
                    
                    $('#purchasePageAddSupplierForm').hide();
                    $("#purchasePageSupplierView").show();
                });

                console.log('Submission was successful.');
                $("#purchasePageAddSupplierError").hide();

                console.log(data);
            },
            error: function (data) {
                console.log('An error occurred.');
                $("#purchasePageAddSupplierError").html(data);
                console.log(data);
            },
        });


    });


        // supplier Area end 

        $("#purchaseProductInputId").change(function(){
            $.get("/api/product/" +  $("#purchaseProductInputId").val(), function (data, status) {
                
                $("#purchaseProductInputName").val(data.name);
  
            });
    
            $("#purchaseProductInputPrice").val(0);
            $("#purchaseProductInputQuantity").val(0);
            $("#purchaseProductInputTotal").val(0);
        });

        $("#purchaseProductInputPrice").change(function(){
    
           var price= $("#purchaseProductInputPrice").val();
            var quantity = $("#purchaseProductInputQuantity").val();
            $("#purchaseProductInputTotal").val(price*quantity);
        });

        $("#purchaseProductInputQuantity").change(function(){
            
            var price= $("#purchaseProductInputPrice").val();
            var quantity = $("#purchaseProductInputQuantity").val();
                $("#purchaseProductInputTotal").val(price*quantity);
           
        });

   
  

                        


        // Cart Area Start Here 

  var  PurchaseTableData={};

      
function showTable(){
 
    var html='';
    var i=0;
    jQuery.each(PurchaseTableData,function(row){
        html += '<tr>'
        html += '<td>' + ++i + '</td>'
        html += '<td>' + PurchaseTableData[row].id + '</td>'
        html += '<td>' + PurchaseTableData[row].name + '</td>'
        html += '<td>' + PurchaseTableData[row].price + '</td>'
        html += '<td>' + PurchaseTableData[row].quantity + '</td>'
        html += '<td>' + PurchaseTableData[row].total + '</td>'
        html += '<td>'
        html += '<button type="button" productId='+PurchaseTableData[row].id+' id="purchaseProductTableEdit" class="btn btn-success"> <i class="fa fa-edit" aria-hidden="false"> </i></button>'
        
       html += ' <button type="button" id="purchaseProductTableDelete" productId='+PurchaseTableData[row].id+'  class="btn btn-danger" > <i class="fa fa-trash" aria-hidden="false"> </i></button>'
                      
       
         html += '</td> </tr>';
    $("#purchaseProductTable tbody").html(html);
    });
}



      $('#purchaseProductInputSubmit').click(function(){
        var purchaseProductInputId= $("#purchaseProductInputId").val();
        var purchaseProductInputPrice= $("#purchaseProductInputPrice").val();
        var purchaseProductInputQuantity= $("#purchaseProductInputQuantity").val();
        var purchaseProductInputTotal= $("#purchaseProductInputTotal").val();
        
        PurchaseTableData[purchaseProductInputId]={
            id          :   purchaseProductInputId,
            price       :   purchaseProductInputPrice,
            quantity    :   purchaseProductInputQuantity,
            total       :   purchaseProductInputTotal,

        };
        console.log(PurchaseTableData);
        showTable();

      });

      $("body").on("click", "#purchaseProductTableEdit", function () {
      
        var prooductId =  $(this).attr('productId');
      //   alert(prooductId);
      
      $("#purchaseProductInputId").val(PurchaseTableData[prooductId].id);
      $("#purchaseProductInputPrice").val(PurchaseTableData[prooductId].price);
      $("#purchaseProductInputQuantity").val(PurchaseTableData[prooductId].quantity);
      $("#purchaseProductInputTotal").val(PurchaseTableData[prooductId].total);



        delete PurchaseTableData[prooductId];
        showTable();
     
     });

     $("body").on("click", "#purchaseProductTableDelete", function () {
         console.log("clicked");

        // $(this).addClass('edit-item-trigger-clicked');
        // console.log("class added ");
        // var el = $(".edit-item-trigger-clicked");
        // console.log("class selected ");
        // var prooductId= el.attr('productId');

       var prooductId =  $(this).attr('productId');
        
        console.log("Clicked On "+prooductId);

        delete PurchaseTableData[prooductId];
        showTable();
       
         
     
     });





        // Cart Area End Here 





});
