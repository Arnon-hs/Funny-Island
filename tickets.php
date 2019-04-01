<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <title>Module-1</title>
</head>
<body>
<?php include("header.php") ?>
<div class="box">
    <div class="content container pr-1 pl-1">
<?php include("menu.php") ?>
<hr>
<div class="container">
     <p class="name_menu"><img src="/Media/ticket-16x16.png""> Tickets and Admission </p>
     <p>Amount of Guests</p>
</div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <label class="label_tickets" for="Adult">Adult:</label>
                    <select class="form-control" id="Adult">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col">
                    <label class="label_tickets" for="Children">Children:</label>
                    <select class="form-control" id="Children">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col">
                    <label class="label_tickets" for="Senior">Senior:</label>
                    <select class="form-control" id="Senior">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-5">
                    <label class="label_tickets" for="Adult1">Adult1</label>
                    <input type="text" class="form-control" placeholder="Example Wood" id="Adult1">
                        <div class="form-check mt-4">
                            <input type="checkbox" class="form-check-input" id="FastPass">
                            <label class="label_tickets" for="FastPass">+ Fast Pass >></label>
                        </div>
                </div>
                <div class="col-md-7 mt-4">
                    <img class="guest_ticket" src="/Media/Funny Island Ticket-2x.png">
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-5">
                    <label class="label_tickets" for="Adult2">Adult2</label>
                    <input type="text" class="form-control" placeholder="John Wood" id="Adult2">
                    <div class="form-check mt-4">
                        <input type="checkbox" class="form-check-input" id="FastPass2">
                        <label class="label_tickets" for="FastPass2">+ Fast Pass >></label>
                    </div>
                </div>
                <div class="col-md-7 mt-4">
                    <img class="guest_ticket" src="/Media/Funny Island Ticket FP-2x.png">
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-5">
                    <label class="label_tickets" for="Adult3">Adult3</label>
                    <input type="text" class="form-control" placeholder="Thomas Wood" id="Adult3">
                    <div class="form-check mt-4">
                        <input type="checkbox" class="form-check-input" id="FastPass3">
                        <label class="label_tickets" for="FastPass3">+ Fast Pass >></label>
                    </div>
                </div>
                <div class="col-md-7 mt-4">
                    <img class="guest_ticket" src="/Media/Funny Island Ticket FP-2x.png">
                </div>
            </div>
        </div>
        <div class="container mt-5 pb-2">
            <button type="button" class="btn btn-secondary btn-lg btn-block"> Checkout and Confirm the tickets </button>
        </div>
    </div>
</div>
<?php include("footer.php") ?>
</body>
</html>