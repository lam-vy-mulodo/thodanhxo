<?php /* Smarty version 3.1.23, created on 2015-06-04 10:59:50
         compiled from "C:/xampp/htdocs/cbuybank/fuel/app/views/users/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29855701386684217_91102034%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46fa7aab19fba11d269ade8132fcf035e77c845a' => 
    array (
      0 => 'C:/xampp/htdocs/cbuybank/fuel/app/views/users/index.tpl',
      1 => 1431588701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29855701386684217_91102034',
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_557013866f0be1_43436815',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557013866f0be1_43436815')) {
function content_557013866f0be1_43436815 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '29855701386684217_91102034';
echo $_smarty_tpl->getSubTemplate ("users/submenu_tk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<!-- thong tin chung -->
<div class="container">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
        
        <tbody>

        
        <tr>
            <td colspan="2" align="left" nowrap="nowrap">
                <h4 class="border">
                    Tên khách hàng:
                    &nbsp;<span class="back">Bùi Ngọc Thạch</span>
                </h4>
            </td>
        </tr>
          
        <tr>
            <td colspan="2" align="left">
                <h4 class="border">
                    Tài khoản chính(TKC): &nbsp;<span class="back" style="color: Blue;">4.680
                        VND</span>&nbsp; <a class="blue" href="/tai-khoan/xem-sao-ke.html">
                          
                </a></h4><a class="blue" href="/tai-khoan/xem-sao-ke.html">
            </a></td>
        </tr>
        <tr>
            <td colspan="2" align="left">
                <h4 class="border">
                    Khuyến mãi 1(KM1): &nbsp;
                    <span class="back" style="color: Blue;">
                        0
                        VND</span>
                </h4>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="left">
                <h4 class="border">
                    Khuyến mãi 2(KM2): &nbsp;<span class="back" style="color: Blue;">0
                        VND</span>
                </h4>
            </td>
        </tr>
       
        <tr>
            <td colspan="2" align="left">
                <h4 class="border">
                    Lần đăng nhập gần nhất:
                    &nbsp;<span class="back">11:50:00 ngày 12/05/2015, IP: 192.168.100.138</span> <a class="blue" href="/ho-tro/nhat-ky-truy-cap.html">[Xem chi tiết]</a>
                </h4>
            </td>
        </tr>
        
        <tr>
            <td colspan="2" align="left">
                <h4 class="border">
                    Thông tin giao dịch:</h4>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table cellpadding="2" cellspacing="0" width="100%">
                    <tbody><tr>
                        <td width="30px">
                            &nbsp;
                        </td>
                        <td>
                            <span style="font-size: 10pt;">Các giao dịch mới nhất:</span> <a class="blue" href="/tai-khoan/tim-kiem-giao-dich.html">
                                [Xem chi tiết]</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="30px">
                            &nbsp;
                        </td>
                        <td>
                            <table width="95%" cellpadding="2" cellspacing="0" border="1" class="tableboder">
                                <tbody><tr class="headerTable">
                                    <td width="80px">
                                        Mã giao dịch
                                    </td>
                                    <td width="130px">
                                        Ngày giao dịch
                                    </td>
                                    <td width="120px">
                                        Loại giao dịch
                                    </td>
                                    <td width="80px">
                                        Mã hóa đơn
                                    </td>
                                    <td width="100px">
                                        Trạng thái
                                    </td>
                                    <td width="100px">
                                        Từ TK
                                    </td>
                                    <td width="100px">
                                        Đến TK
                                    </td>
                                  
                                    <td width="80px">
                                        Số tiền GD
                                    </td>
                                    <td>
                                    TKC
                                    </td>
                                    <td>KM1</td>
                                    <td>KM2</td>
                                </tr>
                                
                                <tr class="size14" onmouseover="this.className='trHighlight'" onmouseout="this.className='trNormal'" onclick="goDetailTran('MQA1ADcAMAA3ADQAMwA=');">
                                    <td>
                                        505-570743
                                    </td>
                                    <td>
                                        04/05/2015 08:31:34
                                    </td>
                                    <td>
                                        Thanh toán
                                    </td>
                                    <td>
                                        504459529
                                    </td>
                                    <td>
                                        <font style="color:Green">Hoàn tất</font>
                                    </td>
                                    <td>
                                        0987033169
                                    </td>
                                    <td>
                                        muaban.net
                                    </td>                                   
                                    <td align="right">
                                        20.000
                                    </td>
                                    <td align="right">
                                        <font style="color:red">-15.120</font>
                                    </td>
                                    <td align="right">
                                        0
                                    </td>
                                    <td align="right">
                                        <font style="color:red">-4.880</font>
                                    </td>
                                </tr>
                                
                                <tr class="size14" onmouseover="this.className='trHighlight'" onmouseout="this.className='trNormal'" onclick="goDetailTran('MQA1ADYANwA4ADEANQA=');">
                                    <td>
                                        504-567815
                                    </td>
                                    <td>
                                        30/04/2015 07:31:28
                                    </td>
                                    <td>
                                        Thanh toán
                                    </td>
                                    <td>
                                        99-00-410657-2
                                    </td>
                                    <td>
                                        <font style="color:Orange">Chờ xác nhận</font>
                                    </td>
                                    <td>
                                        0987033169
                                    </td>
                                    <td>
                                        mua&amp;ban
                                    </td>                                   
                                    <td align="right">
                                        13.200
                                    </td>
                                    <td align="right">
                                        0
                                    </td>
                                    <td align="right">
                                        0
                                    </td>
                                    <td align="right">
                                        0
                                    </td>
                                </tr>
                                
                                <tr class="size14" onmouseover="this.className='trHighlight'" onmouseout="this.className='trNormal'" onclick="goDetailTran('MQA1ADYANgAwADMANgA=');">
                                    <td>
                                        504-566036
                                    </td>
                                    <td>
                                        27/04/2015 17:26:51
                                    </td>
                                    <td>
                                        Nạp thẻ cào
                                    </td>
                                    <td>
                                        VTEL_0122142466383
                                    </td>
                                    <td>
                                        <font style="color:Green">Hoàn tất</font>
                                    </td>
                                    <td>
                                        001-TKTT-CTY
                                    </td>
                                    <td>
                                        0987033169
                                    </td>                                   
                                    <td align="right">
                                        16.800
                                    </td>
                                    <td align="right">
                                        16.800
                                    </td>
                                    <td align="right">
                                        0
                                    </td>
                                    <td align="right">
                                        4.880
                                    </td>
                                </tr>
                                
                                <tr class="size14" onmouseover="this.className='trHighlight'" onmouseout="this.className='trNormal'" onclick="goDetailTran('NgA2ADEAOQAwADgA');">
                                    <td>
                                        402-661908
                                    </td>
                                    <td>
                                        20/02/2014 13:06:06
                                    </td>
                                    <td>
                                        Thanh toán
                                    </td>
                                    <td>
                                        402326509
                                    </td>
                                    <td>
                                        <font style="color:Green">Hoàn tất</font>
                                    </td>
                                    <td>
                                        0987033169
                                    </td>
                                    <td>
                                        muaban.net
                                    </td>                                   
                                    <td align="right">
                                        14.800
                                    </td>
                                    <td align="right">
                                        <font style="color:red">-14.800</font>
                                    </td>
                                    <td align="right">
                                        0
                                    </td>
                                    <td align="right">
                                        0
                                    </td>
                                </tr>
                                
                                <tr class="size14" onmouseover="this.className='trHighlight'" onmouseout="this.className='trNormal'" onclick="goDetailTran('NgA2ADEAOQAwADQA');">
                                    <td>
                                        402-661904
                                    </td>
                                    <td>
                                        20/02/2014 13:01:37
                                    </td>
                                    <td>
                                        Nạp thẻ cào
                                    </td>
                                    <td>
                                        VTEL_1662095460663
                                    </td>
                                    <td>
                                        <font style="color:Green">Hoàn tất</font>
                                    </td>
                                    <td>
                                        001-TKTT-CTY
                                    </td>
                                    <td>
                                        0987033169
                                    </td>                                   
                                    <td align="right">
                                        16.800
                                    </td>
                                    <td align="right">
                                        16.800
                                    </td>
                                    <td align="right">
                                        0
                                    </td>
                                    <td align="right">
                                        0
                                    </td>
                                </tr>
                                
                            </tbody></table>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td width="30px">
                            &nbsp;
                        </td>
                        <td>
                            <span style="font-size: 10pt;">Hộp thư:</span> <a class="blue" href="/ho-tro/hop-thu.html">
                                [Xem chi tiết]</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="30px">
                            &nbsp;
                        </td>
                        <td>
                            <table width="95%" cellpadding="2" cellspacing="0" border="1" class="tableboder">
                                <tbody><tr class="headerTable">
                                    <td width="100px">
                                        Người gửi
                                    </td>
                                    <td>
                                        Chủ đề
                                    </td>
                                    <td width="150px">
                                        Ngày nhận
                                    </td>
                                </tr>
                                
                            </tbody></table>
                            <br>
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="left">
                <h4 class="border">
                    Thông tin xác thực:</h4>
            </td>
        </tr>
        <!-- Begin Account is main -->
        
        <tr class="size14">
            <td class="left">
                Xác thực email:
            </td>
            <td class="right">
                
                <a class="blue" href="/tai-khoan/gui-thu-xac-thuc-email.html">[Nhấn vào đây để
                    gửi e-mail xác thực]</a> | <a class="blue" href="/huong-dan/xac-thuc-email.html">
                        [Xem hướng dẫn xác thực e-mail tại đây]</a>
                
            </td>
        </tr>
        <tr>
            <td class="left">
                Thông tin cá nhân:
            </td>
            <td class="right">
                
                <a class="blue" href="/ho-tro/thong-tin-ca-nhan.html">[Nhấn vào đây để cập
                    nhật CMND/Passport]</a> | <a class="blue" href="/huong-dan/xac-thuc-thong-tin-ca-nhan.html">
                        [Xem hướng dẫn xác thực tại đây]</a>
                
            </td>
        </tr>
        <!-- Begin Business info-->
        <tr>
            <td class="left">
                Thông tin doanh nghiệp:
            </td>
            <td class="right">
                
                <a class="blue" href="/tai-khoan-phu/cap-nhat-thong-tin-doanh-nghiep.html">[Nhấn vào đây
                    để cập nhật thông tin doanh nghiệp]</a> | <a class="blue" href="/huong-dan/xac-thuc-thong-tin-doanh-nghiep.html">
                        [Xem hướng dẫn xác thực tại đây]</a>
                
            </td>
        </tr>
        <!-- End Business info-->
        
        <tr>
            <td colspan="2" align="left">
                <h4 class="border">
                    Giới thiệu người sử dụng:</h4>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 100%" align="center">
                
                <div class="boder-out" style="width: 510px">
                    <div class="boder-in">
                        <table width="500px" cellpadding="2" cellspacing="1">
                            <tbody><tr>
                                <td style="width: 100px">
                                    Họ tên <font style="color: Red">*</font>
                                </td>
                                <td align="left">
                                    <input type="text" name="txtFullName" id="txtFullName" style="width: 250px" maxlength="126">
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 100px">
                                    Email <font style="color: Red">*</font>
                                </td>
                                <td align="left">
                                    <input type="text" name="txtEmail" id="txtEmail" style="width: 250px" maxlength="126">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nội dung<font style="color: Red">*</font>
                                </td>
                                <td align="left">
                                    <textarea id="txtContent" name="txtContent" style="width: 256px; height: 100px"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 100px" valign="middle">
                                    Mã an toàn<font style="color: Red">*</font>
                                </td>
                                <td align="left">
                                    <label>
                                        <input type="hidden" id="Captcha" name="Captcha" value="efc59070-30a0-4b8f-b3aa-49703f5db398">
<img id="imgCaptcha" src="/captcha.ashx?guid=efc59070-30a0-4b8f-b3aa-49703f5db398&amp;rand=" alt="CAPTCHA" width="150" height="35"></label><br>
                                    <input autocomplete="off" class="inputText" id="ConfirmCaptcha" maxlength="5" name="ConfirmCaptcha" style="width: 250px" type="text" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td align="left">
                                    <input type="button" id="btnSend" name="btnSend" value="Gửi giới thiệu" class="btn btn-danger">
                                    <input type="reset" id="btnReset" name="btnReset" value="Làm lại" class="btn btn-danger">
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
            </td>
        </tr>
    </tbody></table>
</div>
	<?php echo '<script'; ?>
>
    $(document).ready(function(){
		$(".nav-tabs #1").addClass("active");
	});
	<?php echo '</script'; ?>
><?php }
}
?>