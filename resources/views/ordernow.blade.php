@extends('master')
@section('content')
    <div class="container custom-product">
        <div class="col-sm-6">
            <table class="table">
                <tbody>
                <tr>
                    <th scope="row">Amount</th>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <th scope="row">Tax</th>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <th scope="row">Delivery charges</th>
                    <td>$ 5</td>
                </tr>
                <tr>
                    <th scope="row">Total Amount</th>
                    <td>$ {{$total + 5}}</td>
                </tr>
                </tbody>
            </table>
            <div>
                <form action="/action_page.php">
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="address" placeholder="Enter your address here!"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="payment">Payment method: </label> <br>
                        <input type="radio" name="payment"> <span>Online Payment</span><br>
                        <input type="radio" name="payment"> <span>EMI Payment</span><br>
                        <input type="radio" name="payment"> <span>Cash on delivery</span>
                    </div>
                    <button type="submit" class="btn btn-success">Order Now</button>
                </form>
            </div>
        </div>
    </div>
@endsection
