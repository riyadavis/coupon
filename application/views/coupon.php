<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Coupon Information</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="StyleSheet" type="text/css" href="<?php echo base_url()."assets/css/bootstrap.min.css"; ?>">
    <link rel="StyleSheet" type="text/css" href="<?php echo base_url()."assets/css/main.css"; ?>">
</head>
<body>
<div id="couponCode">

</div>
<div id="categoryId">

</div>
	
</body>
<script>
    $(document).ready(function(){
        GetCoupon();
        async function GetCoupon()
        {
            var url = "<?php echo site_url('CouponApi/getCoupon');?>"
            var request = await fetch(url);
            var response = await request.json();
            console.log(response);
            response.map(r => {
                var para = document.createElement('p');
                // textnode = r.coupon_code;
                btn = document.createElement('input');
                btn.type = "button";
                btn.value = r.coupon_code;
                btn.id = r.category_id; 
                btn.onclick = function(){
                    document.getElementById('categoryId').innerHTML = "";
                    // console.log(this.id);
                    let para = document.createElement('p');
                    let text = document.createTextNode(this.id);
                    para.appendChild(text);
                    document.getElementById('categoryId').appendChild(para);
                }
                // btn.onclick = couponInfo(btn.id);
                para.appendChild(btn);
                // var anchor = document.createElement('a');
                // anchorText = document.createTextNode(textnode);
                // anchor.setAttribute('href',"");
                // anchor.onclick = couponInfo();
                // anchor.appendChild(anchorText);
                // para.appendChild(anchor);
                
                document.getElementById('couponCode').appendChild(para); 
                
            });
        }
    });
</script>
<script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
</html>