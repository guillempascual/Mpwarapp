<html>
<head>
    <title>{$title}</title>
</head>
<body>

<div class="col-lg-12 " >
    <h1>VIP Customers</h1>
    <ul>
       {foreach $all_customers as $customer}
            <li>
                <p><h2>{$customer.name}</h2></p>
                <p>email: {$customer.email}</p>
                <p>phone: {$customer.phone} </p>
            </li>
        {/foreach}
    </ul>
</div>

</body>
</html>