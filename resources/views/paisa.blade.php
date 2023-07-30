<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<input type="hidden" id="bn" value="{{bn}}"/>
<input type="hidden" id="gt" value="{{gt}}"/>

<script>
window.onload=function(){
    pay_now();
}
    function pay_now(){
        var name="{{$name}}";
        var amt={{$amount}};

         jQuery.ajax({
               type:'post',
               url:'/payment_process/',
               data:"amt="+amt+"&name="+name+"&_token={{Session::token()}}",
               success:function(result){
                   var options = {
                        "key": "rzp_test_Vi1FqajvIGR2IX",
                        "amount": amt*100,
                        "currency": "INR",
                        "name": "Trycart",
                        "description": "Ecommerce",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'/payment_process/',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="{{url('/')}}";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });


    }
</script>
