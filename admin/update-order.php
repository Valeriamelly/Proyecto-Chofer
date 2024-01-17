<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Actualizar Estado de Chofer</h1>
        <br><br>


        <?php 
        
            //CHeck whether id is set or not
            if(isset($_GET['id']))
            {
                //GEt the Order Details
                $id=$_GET['id'];

                //Get all other details based on this id
                //SQL Query to get the order details
                $sql = "SELECT * FROM tbl_order WHERE id=$id";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    //Detail Availble
                    $row=mysqli_fetch_assoc($res);

                    $chofer = $row['chofer'];
                    $price = $row['price'];
                    $status = $row['status'];
                    $customer_name = $row['customer_name'];
                    $customer_contact = $row['customer_contact'];
                    $customer_email = $row['customer_email'];
                    $customer_address= $row['customer_address'];
                }
                else
                {
                    //DEtail not Available/
                    //Redirect to Manage Order
                    header('location:'.SITEURL.'admin/manage-order.php');
                }
            }
            else
            {
                //REdirect to Manage ORder PAge
                header('location:'.SITEURL.'admin/manage-order.php');
            }
        
        ?>

        <form action="" method="POST">
        
            <table class="tbl-30">
                <tr>
                    <td>Nombre Chofer</td>
                    <td><b> <?php echo $chofer; ?> </b></td>
                </tr>

                <tr>
                    <td>Precio</td>
                    <td>
                        <b> $ <?php echo $price; ?></b>
                    </td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status">
                            <option <?php if($status=="Solicitado"){echo "selected";} ?> value="Solicitado">Solicitado</option>
                            <option <?php if($status=="En Camino"){echo "selected";} ?> value="En Camino">En Camino</option>
                            <option <?php if($status=="Finalizado"){echo "selected";} ?> value="Finalizado">Finalizado</option>
                            <option <?php if($status=="Cancelado"){echo "selected";} ?> value="Cancelado">Cancelado</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Nombre Cliente: </td>
                    <td>
                    <div class="section" name="customer_name"><?php echo $customer_name; ?></div>
                    </td>
                </tr>

                <tr>
                    <td>Contacto Cliente: </td>
                    <td>
                    <div class="section" name="customer_contact"><?php echo $customer_contact; ?></div>
                    </td>
                </tr>

                <tr>
                    <td>Email Cliente: </td>
                    <td>
                    <div class="section" name="customer_email"><?php echo $customer_email; ?></div>
                    </td>
                </tr>

                <tr>
                    <td>Direccion Cliente: </td>
                    <td>
                    <div class="section" name="customer_address"><?php echo $customer_address; ?></div>
                    </td>
                </tr>

                <tr>
                    <td clospan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="price" value="<?php echo $price; ?>">

                        <input type="submit" name="submit" value="Update Order" class="btn-secondary">
                    </td>
                </tr>
            </table>
        
        </form>


        <?php 
            //CHeck whether Update Button is Clicked or Not
            if(isset($_POST['submit']))
            {
                //echo "Clicked";
                //Get All the Values from Form
                $id = $_POST['id'];
                $price = $_POST['price'];

                $status = $_POST['status'];

                /*$customer_name = $_POST['customer_name'];
                $customer_contact = $_POST['customer_contact'];
                $customer_email = $_POST['customer_email'];
                $customer_address = $_POST['customer_address'];*/

                //Update the Values
                $sql2 = "UPDATE tbl_order SET 
                    status = '$status'
                    /*customer_name = '$customer_name',
                    customer_contact = '$customer_contact',
                    customer_email = '$customer_email',
                    customer_address = '$customer_address'*/
                    WHERE id=$id
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //CHeck whether update or not
                //And REdirect to Manage Order with Message
                if($res2==true)
                {
                    //Updated
                    $_SESSION['update'] = "<div class='success'>Order Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-order.php');
                }
                else
                {
                    //Failed to Update
                    $_SESSION['update'] = "<div class='error'>Failed to Update Order.</div>";
                    header('location:'.SITEURL.'admin/manage-order.php');
                }
            }
        ?>


    </div>
</div>