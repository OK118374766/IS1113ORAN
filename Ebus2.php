<form id="Basket" action="Ebus2.php" method="post">
    <table class="shopping-cart">
        <thead>
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Qty</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <p id="sub-total">
        <b>Sub Total</b>: <span id="stotal"></span>
    </p>
    <ul id="shopping-cart-actions">
        <li>
            <input type="submit" name="update" id="update-cart" class="btn" value="Update Cart" />
        </li>
        <li>
            <input type="submit" name="delete" id="empty-cart" class="btn" value="Empty Cart" />
        </li>
        <li>
            <a href="Ebus1.html" class="btn">Continue Shopping</a>
        </li>
        <li>
            <a href="" class="btn">Go To Checkout</a>
        </li>
    </ul>
</form>