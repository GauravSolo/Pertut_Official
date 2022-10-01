function processPayment(e,type){
    e.preventDefault();

    fullname = $("#sessionfullname").val();
    email = $("#sessionemail").val();
    phone = $("#sessionphone").val();
    amount = (type==1)?199:999;

    var options = {
      //"key": "rzp_test_XbZeljHYPVwHVJ", // Enter the Key ID generated from the Dashboard
      "key": "rzp_live_PXcssglgGBzk8v", // Enter the Key ID generated from the Dashboard
      "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
      "currency": "INR",
      "name": "PERTUT OFFICIAL",
      "description": "Test Transaction",
      "image": "../images/pertutlogocanva.png",
      "handler": function (response){
        console.log(response,response.razorpay_payment_id);
       
        
        setUserPackage(type,response.razorpay_payment_id);

      },
      "prefill": {
          "name": fullname,
          "email": email,
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
    setUserPackage(0,"");
          alert(response.error.code);
          alert(response.error.description);
          alert(response.error.source);
          alert(response.error.step);
          alert(response.error.reason);
          alert(response.error.metadata.order_id);
          alert(response.error.metadata.payment_id);
  });
  rzp1.open();
}


function setUserPackage(type,paymentid){
  console.log("setuserpayment",type,paymentid);

  $.ajax({
    url: "../fetch_and_submit_sitedata.php",
    method:"POST",
    dataType: "json",
    data:{
        setUserPackage: "package",
        type : type,
        paymentid: paymentid
    },
    success:function(data){
            if(data.error == '1')
            {
              $("#msg").html(`<span class="text-danger text-center  my-2 w-100" style="font-size:1.5rem;display:inline-block;">Payment failed!</span>`);
            }else{
              $("#msg").html(`<span class="text-success text-center  my-2 w-100" style="font-size:1.5rem;display:inline-block;">Purchased Successfull!</span>`);
              setTimeout(() => {
                        window.location.href="packages.php";
              }, 2000);
            }

            // setTimeout(() => {
            //   $("#msg").html('');
            // }, 2000);
    }
  });

}