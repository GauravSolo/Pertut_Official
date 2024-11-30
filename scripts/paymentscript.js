function processPayment(e,course_id,teacher_id,amount){
    e.preventDefault();

    fullname = $("#sessionfullname").val();
    email = $("#sessionemail").val();
    phone = $("#sessionphone").val();

    var options = {
      //"key": "rzp_test_XbZeljHYPVwHVJ", // Enter the Key ID generated from the Dashboard
      "key": "rzp_test_cS2OLb0c6cymPk", // Enter the Key ID generated from the Dashboard
      "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
      "currency": "INR",
      "name": "PERTUT OFFICIAL",
      "description": "Test Transaction",
      "image": "../images/pertutlogocanva.png",
      "handler": function (response){
        console.log(response,response.razorpay_payment_id);
       
        
        setUserPackage(course_id,teacher_id,response.razorpay_payment_id);

      },
      "prefill": {
          "name": fullname,
          "contact": phone
      },
      "notes": {
          "address": "Razorpay Corporate Office"
      },
      "theme": {
          "color": "#3399cc"
      }
  };
  
  var rzp1 = new Razorpay(options);
  rzp1.on('payment.failed', function (response){
    console.log("erro",response);
          console.log(response.error.code);
          console.log(response.error.description);
          alert(response.error.description);
          console.log(response.error.source);
          console.log(response.error.step);
          console.log(response.error.reason);
          alert(response.error.reason);
          console.log(response.error.metadata.order_id);
          console.log(response.error.metadata.payment_id);
  });
  rzp1.open();
}


function setUserPackage(course_id,teacher_id,paymentid){
  console.log("setuserpayment",course_id,teacher_id,paymentid);

  $.ajax({
    url: "../fetch_and_submit_sitedata.php",
    method:"POST",
    dataType: "json",
    data:{
        setUserEnrollment: "enrollment",
        course_id : course_id,
        teacher_id : teacher_id,
        payment_id: paymentid
    },
    success:function(data){
            if(data.error == '1')
            {
              $("#msg").html(`<span class="text-danger text-center  my-2 w-100" style="font-size:1.5rem;display:inline-block;">Payment failed!</span>`);
            }else{
              $("#msg").html(`<span class="text-success text-center  my-2 w-100" style="font-size:1.5rem;display:inline-block;">Subscribed Successfully!</span>`);
              setTimeout(() => {
                        window.location.reload();
              }, 2000);
            }

            // setTimeout(() => {
            //   $("#msg").html('');
            // }, 2000);
    }
  });

}