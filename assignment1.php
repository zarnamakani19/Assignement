<!DOCTYPE html>
<html>
    <head>
        
        <title></title>
        <style type="text/css">
            #s1
            {
                border: 3px Solid white;
                margin: 10px 550px 1px 50px;
                padding: 20px;
                background-color: lightgreen;
                border-radius: 5px;
            }
            #s2
            {
                border: 3px Solid white;
                margin: 1px 200px 1px 12px;
                padding: 2px;
                background-color: lightgreen;
                border-radius: 10px;
            }
            #s3
            input [type=submit]{
                hight: 30px;
                width: 100px;
                background-color: black;
                color: white;
                border-radius: 40px;

            }
        </style>
    </head>
    <body>
        <div id="s1">
            <h2>Step 1: Your Details</h2>
        <form>
        <div id="s2">
            <tr>
                <td><label>Name:</label></td>
                <td><input type="text" name="Name" placeholder="first and last name"></td>
            </tr>
        </div>
        <div id="s2">
            <tr>
                <td><label>Email:</label></td>
                <td><input type="text" name="Name" placeholder="example@domain.com"></td>
            </tr>
        </div>
        <div id="s2">
            <tr>
                <td><label>Phone:</label></td>
                <td><input type="number" name="Name" placeholder="EG. +447500000000"></td>
            </tr>
        </div>
        </form>
            <h2>Step 3: Delivery Address</h2>
        <form>
            <div id="s2">
                <tr>
                    <td> <label>Address</label></td>
                    <td>
                        <textarea name="Address" rows="5" cols="40"></textarea>
                    </td>
                </tr> 
            </div>
            <div id="s2">
                <tr>
                    <td><label>Post code</label></td>
                    <td><input type="number" name="Name" placeholder=""></td>
                </tr>
        </div>
                <div id="s2">
                    <tr>
                        <td><label>Country</label></td>
                        <td><input type="text" name="Name" placeholder=""></td>
                    </tr>
                </div>
        </form>
            <h2>Step 3: Card details</h2>
        <form>
            <div id="s2">
                <tr>
                    <td><label>Card type</label>
                        <input type="radio" name="card">VISA
                        <input type="radio" name="Amex">AMEX
                        <input type="radio" name="master">Mastercard
                    </td>
                </tr>
            </div>
                <div id="s2">
                    <tr>
                        <td>Card number</td>
                        <td><input type="text" name="name" placeholder=""></td>
                    </tr>
                </div>
                    <div id="s2">
                        <tr>
                            <td>Security code</td>
                            <td><input type="text" name="name" placeholder=""></td>
                        </tr>
                    </div>
                    <div id="s2">
                        <tr>
                            <td>Name on card</td>
                            <td><input type="text" name="name" placeholder="Exact name as the card"></td>
                        </tr>
                    </div>
                    <div id="s3">
                        <br>
                        <center> <input type="submit" name="BUY IT!" value="BUY IT!"> </center>
                    </div>        
    </body>         
</html>