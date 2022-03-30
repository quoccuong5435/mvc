<section>
<?php
       if(!empty($_GET['msg']))
       {
         $msg = unserialize(urldecode($_GET['msg']));
         foreach($msg as $key => $value)
         {
           echo '<span style="color:blue;font-weight:bold">'.$value."</span>";
         }
       }   
    ?>
         <div class="bg_in ">
            <div class="contact_form ">
               <div class="contact_left">
               
               <div class="form_contact_in">
                     <div class="box_contact">
                        <h2 style="text-align: center;font-size: 20px;padding-top: 20px;">ĐĂNG KÝ</h2>
                        <form name="FormDatHang" method="post" action="<?php echo BASE_URL ?>khachhang/dangky" >
                           <div class="content-box_contact">
                              <div class="row">
                                 <div class="input">
                                    <label>Họ và tên: <span style="color:red;">*</span></label>
                                    <input type="text" name="customer_name" required class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Số điện thoại: <span style="color:red;">*</span></label>
                                    <input type="phone" name="customer_phone" require class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Địa chỉ: <span style="color:red;">*</span></label>
                                    <input type="text" name="customer_address" required class="clsip" >
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Email: <span style="color:red;">*</span></label>
                                    <input type="email" name="customer_email" required class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <div class="row">
                                 <div class="input">
                                    <label>Password: <span style="color:red;">*</span></label>
                                    <input type="password" name="password" required  class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                            
                              <!---row---->
                              <div class="row btnclass">
                                 <div class="input ipmaxn ">
                                    <input type="submit"  class="btn-gui" name="frmSubmit" id="frmSubmit" value="Đăng ký">
                                    <input type="reset" class="btn-gui" value="Nhập lại">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="clear"></div>
                           </div>
                        </form>
                     </div>
                  </div>
            
               
               
               </div>

               <div class="contact_right">
               <h2 style="text-align: center;font-size: 20px;padding-top: 20px;">ĐĂNG NHẬP</h2>
               <div class="form_contact_in">
                     <div class="box_contact">
                        <form name="FormDatHang" method="post" action="gio-hang/" >
                           <div class="content-box_contact" style="margin-left: 40px;">
                              <div class="row">
                                 <div class="input">
                                    <label>Email: <span style="color:red;">*</span></label>
                                    <input type="email" name="customer_email" style="width: 80%;" required class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Password: <span style="color:red;">*</span></label>
                                    <input type="text" name="password" minlength="8" style="width: 80%;" required  class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              
                              <!---row---->
                              <div class="row btnclass">
                                 <div class="input ipmaxn ">
                                    <input type="submit" class="btn-gui" name="frmSubmit" id="frmSubmit" value="Đăng nhập">
                                    <input type="reset" class="btn-gui" value="Nhập lại">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="clear"></div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
                           </div>
      </section>