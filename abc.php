<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	
			<div class="text-success text-left h6 my-2 text-md-right">  <a href="javascript:void(0)" data-productid="1" data-productname="dde" data-amount="20" class="btn btn-primary buynow">Buy Now</a>
    </div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

$(".buynow").click(function()
{

var amount=$(this).attr('data-amount');	
var productid=$(this).attr('data-productid');	
var productname=$(this).attr('data-productname');	
	
var options = {
    "key": "rzp_test_zHhNFsppG7bIjH", // Enter the Key ID generated from the Dashboard
    "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "name": "The Digital Oceans",
    "description": productname,
    "image": "https://example.com/your_logo",
    "handler": function (response){
        var paymentid=response.razorpay_payment_id;
		
		$.ajax({
			url:"payment-process.php",
			type:"POST",
			data:{product_id:productid,payment_id:paymentid},
			success:function(finalresponse)
			{
				if(finalresponse=='done')
				{
					window.location.href="http://localhost/php-practical-work/payment-gateway/razorpay/success.php";
				}
				else 
				{
					alert('Please check console.log to find error');
					console.log(finalresponse);
				}
			}
		})
        
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
 rzp1.open();
 e.preventDefault();
});
</script>
</body>

</html>