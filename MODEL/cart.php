<?php
class Cart{

    // function getCartItems($user_ID){
    //     $sql = "select p.ID, cp.quantity, p.name, p.price, p.description from cart c ";
    //     $sql .= "inner join account a on a.ID = c.user_ID ";
    //     $sql .= "inner join cart_product cp on cp.cart_ID = c.ID "; 
    //     $sql .= "inner join product p on p.ID = cp.product_ID ";
    //     $sql .= "where a.ID = " .$user_ID;
    //     return $sql;
    // }
    function getCartItems($user_ID){
        $sql = "select p.id, c.quantity, p.name, p.price, p.description from cart c ";
        $sql .= "inner join user u on u.id = c.user ";
        $sql .= "inner join product p on p.id = c.product ";
        $sql .= "where u.id = " .$user_ID;
        return $sql;
    }

    // function setCartItemsAdd($p_ID, $c_ID){
    //     $sql = "update cart_product
    //             set quantity = quantity + 1
    //             where product_ID = " . $p_ID ." and cart_ID = " . $c_ID . ";";

    //     echo $sql . "</br>";
    //     return $sql;
    // }
    function setCartItemsAdd($p_ID, $u_ID){
        $sql = "update cart
                set quantity = quantity + 1
                where product = " . $p_ID ." and user = " . $u_ID . ";";

        echo $sql . "</br>";
        return $sql;
    }

    // function setCartItemsRemove($p_ID, $c_ID){
    //     $sql = "update cart_product
    //     set quantity = quantity - 1
    //     where product_ID = " . $p_ID ." and cart_ID = " . $c_ID . ";";
    //     return $sql;
    // }
    function setCartItemsRemove($p_ID, $u_ID){
        $sql = "update cart
        set quantity = quantity - 1
        where product = " . $p_ID ." and user = " . $u_ID . ";";
        return $sql;
    }

    // function deleteItem($p_ID, $c_ID){
    //     $sql = "delete from cart_product
    //     where product_ID = " . $p_ID ." and cart_ID = " . $c_ID . ";";
    //     return $sql;
    // }
    function deleteItem($p_ID, $u_ID){
        $sql = "delete from cart
        where product = " . $p_ID ." and user = " . $u_ID . ";";
        return $sql;
    }

    // function addItem($p_ID, $c_ID){
    //     $sql = "
    //     insert into cart_product(cart_ID, product_ID, quantity)
    //     values(" . $c_ID . ", " . $p_ID .", 1);";
    //     return $sql;
    // }
    function addItem($p_ID, $u_ID){
        $sql = "
        insert into cart(user, product, quantity)
        values(" . $u_ID . ", " . $p_ID .", 1);";
        return $sql;
    }
}
?>