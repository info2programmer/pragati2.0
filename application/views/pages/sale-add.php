<?php // $this->cart->destroy();
 ?>
<!-- Container-fluid starts -->
<div class="container-fluid">

    <!-- Header start -->
    <div class="row">
        <div class="main-header">
            <h4>Sale Management</h4>
            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url(); ?>user/"><i class="icofont icofont-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>user/">Dashbord</a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>settings/SaleManage">Sale
                        Details</a>
                </li>
            </ol>
            <center><ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                    </li><button type="button" class="btn btn-inverse-primary waves-effect waves-light " data-toggle="tooltip" data-placement="top" title=""><a href="<?php echo base_url();?>View/Sales" style="color:#FF0000;">View Sales Details</a></button></li>
                     </ol>
        </center>
        </div>
    </div>
    <!-- Header end -->

    <div class="row">
        <!-- Form Control starts -->

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">New Sale Bill</h5>

                </div>
                <!-- end of modal -->
                <form name="companyform" id="signupform" method="post" action="<?php echo base_url();?>index.php/add/sales" enctype="multipart/form-data" autocomplete="off">
              
                    <div class="card-block">
                        <div class="row">

                            <div class="col-sm-4">
                                <!-- <div class="md-input-wrapper multisugg">
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" placeholder="Scan Barcode Here" name="cname"/>
                                        
                                    </div>
                                </div> -->
                            </div>

                            <div class="col-sm-4">
                                <div class="md-input-wrapper multisugg">
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" placeholder="Scan Barcode Here" id="barcode" autofocus/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <h2 align="center">Item('s)</h2>
                            <div class="col-xs-12 bill-item-list">
                                <div class="row">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                        <th scope="col">Item Name</th>
                                        <th scope="col">Sale Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">S-GST</th>
                                        <th scope="col">C-GST</th>
                                        <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody id="content_bill">
                                        <?php
                                        foreach ($this->cart->contents() as $item) {
                                            $sub=(float)$item['subtotal']+((float)$item['subtotal']*((float)$item['sgst']+(float)$item['cgst'])/100);
                                            echo "
                                            <tr>
                                                <td>".$item['name']."</td>
                                                <td>".$item['price']."</td>
                                                <td><input type='text' value='".$item['qty']."' class='qty' style='max-width:16%;text-align:center' data-rowid='".$item['rowid']."' data-maxquentity='".$item['maxquentity']."' data-crnt='".$item['qty']."'></td>
                                                <td>".$item['unit']."</td>
                                                <td>".$item['sgst']."</td>
                                                <td>".$item['cgst']."</td>
                                                <td>".$sub."</td>
                                            </tr>"; 
                                        }                                              
                                        ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-sm-8 text-right p-t-15">
                                Discount
                            </div>
                            <div class="col-sm-2">
                                <div class="md-input-wrapper">
                                    <input type="text" class="md-form-control" placeholder="Discount" name="discount" oninput="calcDiscount()" />
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="row">
                            <div class="col-sm-8 text-right p-t-15">
                                Net Total
                            </div>
                            <div class="col-sm-2">
                                <div class="md-input-wrapper">
                                    <input type="text" class="md-form-control" placeholder="Net Total" name="all-total" />
                                </div>
                            </div>
                        </div> -->

                        <!-- <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Submit</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- Container-fluid ends -->

<script>
    $('#barcode').on('input',function(e) { 
        if($('#barcode').val()!=""){
            var urls='<?php echo base_url() ?>view/get_item/';
            var datas={'barcode':$('#barcode').val()};
            $.ajax({
                type: "post",
                url: urls,
                data: datas,
                dataType: "html",
                success: function (response) {
                    $('#content_bill').html(response);
                //    console.log(response);
                }
            });
        }        
    });

    $('.qty').on('input',function(e) { 
        // console.log(e.currentTarget.value);
        var update_qty=e.currentTarget.value;
        if(update_qty!=""){
            var rowId=$('.qty').data("rowid");
            var maxQty=$('.qty').data("maxquentity");
            var crnt=$('.qty').data("crnt");
            if(update_qty>maxQty){
                alert('maximum quentity must same or similar then current quentity');
                e.currentTarget.value=crnt;
                return;
            }
            else{
                var datas={'rowid' : rowId, 'qty':update_qty };
                var urls='<?php echo base_url(); ?>view/update_sell_item_quentity';

                $.ajax({
                    type: "post",
                    url: urls,
                    data: datas,
                    dataType: "html",
                    success: function (response) {
                        $('#content_bill').html(response);
                    }
                });
            }
        }
    });
</script>

 