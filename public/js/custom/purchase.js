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

$("#purchaseProductInputId").change(function);



        // Cart Area Start Here 



        // Cart Area End Here 





});
