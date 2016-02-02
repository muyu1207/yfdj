<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function p($array){
    dump($array,1,'<pre>',0);exit;    
}
function des_notice() {   
    unset($_SESSION[notice]);
    unset($_SESSION[message_type]);
    unset($_SESSION[title]);
    unset($_SESSION[message]);
}
function des_redirect() {   
    unset($_SESSION[redirect]);   
    unset($_SESSION[message_type]);
    unset($_SESSION[title]);
    unset($_SESSION[message]);
}
function showmessage($mtype = 'info', $title = '', $message = '') {   
    session('notice',true);
    session('message_type',$mtype);
    session('title',$title);
    session('message',$message);   
}
function redirect_bt($mtype = 'info', $title = '', $message = '',$url = '') {   
    session('redirect',true);
    session('message_type',$mtype);
    session('url',$url);
    session('title',$title);
    session('message',$message);   
}

//function need_login(){
//    if(!$_SESSION['user']){
//        showmessage('error','提示','请先注册登录！');
//        $this->redirect("User/login");
//    }else{
//        return true;
//    }
//}


/*邮件发送函数*/
function sendMail($to, $title, $content) {
     
        Vendor('phpmailer.PHPMailerAutoload'); 
//        vendor('PHPMailer.class#PHPMailer');
        $mail = new PHPMailer(); //实例化
        $mail->IsSMTP(); // 启用SMTP
        $mail->Host=C('MAIL_HOST'); //smtp服务器的名称（这里以QQ邮箱为例）
        $mail->SMTPAuth = C('MAIL_SMTPAUTH'); //启用smtp认证
        $mail->Username = C('MAIL_USERNAME'); //你的邮箱名
        $mail->Password = C('MAIL_PASSWORD') ; //邮箱密码
        $mail->From = C('MAIL_FROM'); //发件人地址（也就是你的邮箱地址）
        $mail->FromName = C('MAIL_FROMNAME'); //发件人姓名
        $mail->AddAddress($to,"尊敬的客户");
        $mail->WordWrap = 50; //设置每行字符长度
        $mail->IsHTML(C('MAIL_ISHTML')); // 是否HTML格式邮件
        $mail->CharSet=C('MAIL_CHARSET'); //设置邮件编码
        $mail->Subject =$title; //邮件主题
        $mail->Body = $content; //邮件内容
        $mail->AltBody = "这是一个纯文本的身体在非营利的HTML电子邮件客户端"; //邮件正文不支持HTML的备用显示
        return($mail->Send());
    }
    
   //生成随机码
   function suiji_code(){
        $string = strtoupper(md5(microtime() . mt_rand(0, 9)));
        return substr($string, 0, 6); 
    }
    
     //在线交易订单支付处理函数
//函数功能：根据支付接口传回的数据判断该订单是否已经支付成功；
//返回值：如果订单已经成功支付，返回true，否则返回false；
function checkorderstatus($ordid){
    $Ord=M('orderlist');
    $ordstatus=$Ord->where('ordid='.$ordid)->getField('ordstatus');
    
    if($ordstatus==1){   
        return true;
    }else{
        return false;    
    }
}
//处理订单函数
//更新订单状态，写入订单支付后返回的数据
function orderhandle($parameter){
    $ordid=$parameter['out_trade_no'];
    $data['payment_trade_no']      =$parameter['trade_no'];
    $data['payment_trade_status']  =$parameter['trade_status'];
    $data['payment_notify_id']     =$parameter['notify_id'];
    $data['payment_notify_time']   =$parameter['notify_time'];
    $data['payment_buyer_email']   =$parameter['buyer_email'];
    $data['ordstatus']             =1;
    $Ord=M('orderlist');
    $Ord->where('ordid='.$ordid)->save($data);
     //更改回报项目的数值
    $pro_id= $Ord->where('ordid='.$ordid)->getField('productid');     
    $Repays=M('repay');
    $Repays->where('id='.$pro_id)->setInc('num_now'); 
} 

//模板除法
function template_chu( $a , $b ){
    $result = intval ( $a )/intval ( $b );
echo $result;
}

function temp_chu( $a , $b){
    $result = intval ( $a )/intval ( $b );
    return $result;
}


//判断 手机-----------------------------------------------------------------
function isMobile(){
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
        return true;
 
    //此条摘自TPM智能切换模板引擎，适合TPM开发
    if(isset ($_SERVER['HTTP_CLIENT']) &&'PhoneClient'==$_SERVER['HTTP_CLIENT'])
        return true;
    //如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
        //找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], 'wap') ? true : false;
    //判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT'])) {
        $clientkeywords = array(
            'nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile'
        );
        //从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return true;
        }
    }
    //协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT'])) {
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
            return true;
        }
    }
    return false;
}


//获取域名
function GetHost($type = 'host', $default = 'ect.com') {
//    $httpurl = $_SERVER['HTTP_HOST'];
//    $httpurl = 'http://www.eww.com';
    $httpurl = strtolower(trim($httpurl));
    if (empty($httpurl))
    { $httpurl = $default;}
    $regx1 = '/(([^\/\?#]+\.)?([^\/\?#-\.]+\.)(com\.cn|edu\.com\.cn|gov\.cn|org\.cn|net\.cn|com\.jp|co\.jp|com\.kr|com\.tw)(\:[0-9]+)?)/i';
    $regx2 = '/(([^\/\?#]+\.)?([^\/\?#-\.]+\.)(cn|com|org|net|cc|biz|hk|jp|kr|name|me|tw|la)(\:[0-9]+)?)/i';
    $domain = '';
    $pre = '';
    if (!preg_match($regx1, $httpurl, $matches))
    { preg_match($regx2, $httpurl, $matches);}
//    dump($matches);
    if ($matches) {
        $pre = substr($matches[2], 0, -1);
        $domain = $matches[3] . $matches[4] . $matches[5];
        $host = substr($matches[3], 0, -1);
        $all = $domain.$host;
    }
    if ($type == 'domain') {
        return $domain;
    } elseif ($type == 'host') {
        return $host;
    }
    if($type == 'all'){
        return $all;
    }
//    return $pre ? $pre : 'www';
}


function exportExcel($expTitle,$expCellName,$expTableData){
        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);//文件名称
        $fileName = $_SESSION['loginAccount'].date('_YmdHis');//or $xlsTitle 文件名称可根据自己情况设定
        $cellNum = count($expCellName);
        $dataNum = count($expTableData);
        vendor("PHPExcel.PHPExcel");
        $objPHPExcel = new PHPExcel();
        $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');
        
        $objPHPExcel->getActiveSheet(0)->mergeCells('A1:'.$cellName[$cellNum-1].'1');//合并单元格
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle.'  Export time:'.date('Y-m-d H:i:s'));  
        for($i=0;$i<$cellNum;$i++){
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i].'2', $expCellName[$i][1]); 
        } 
          // Miscellaneous glyphs, UTF-8   
        for($i=0;$i<$dataNum;$i++){
          for($j=0;$j<$cellNum;$j++){
            $objPHPExcel->getActiveSheet(0)->setCellValue($cellName[$j].($i+3), $expTableData[$i][$expCellName[$j][0]]);
          }             
        }  
        
        header('pragma:public');
        header('Content-type:application/vnd.ms-excel;charset=utf-8;name="'.$xlsTitle.'.xls"');
        header("Content-Disposition:attachment;filename=$fileName.xls");//attachment新窗口打印inline本窗口打印
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
        $objWriter->save('php://output'); 
        exit;   
    }
     
    /**
     +----------------------------------------------------------
     * Import Excel | 2013.08.23
     * Author:HongPing <hongping626@qq.com>
     +----------------------------------------------------------
     * @param  $file   upload file $_FILES
     +----------------------------------------------------------
     * @return array   array("error","message")
     +----------------------------------------------------------     
     */   
   function importExecl($file){ 
        if(!file_exists($file)){ 
            return array("error"=>0,'message'=>'file not found!');
        } 
        Vendor("PHPExcel.PHPExcel.IOFactory"); 
        $objReader = PHPExcel_IOFactory::createReader('Excel5'); 
        try{
            $PHPReader = $objReader->load($file);
        }catch(Exception $e){}
        if(!isset($PHPReader)) return array("error"=>0,'message'=>'read error!');
        $allWorksheets = $PHPReader->getAllSheets();
        $i = 0;
        foreach($allWorksheets as $objWorksheet){
            $sheetname=$objWorksheet->getTitle();
            $allRow = $objWorksheet->getHighestRow();//how many rows
            $highestColumn = $objWorksheet->getHighestColumn();//how many columns
            $allColumn = PHPExcel_Cell::columnIndexFromString($highestColumn);
            $array[$i]["Title"] = $sheetname; 
            $array[$i]["Cols"] = $allColumn; 
            $array[$i]["Rows"] = $allRow; 
            $arr = array();
            $isMergeCell = array();
            foreach ($objWorksheet->getMergeCells() as $cells) {//merge cells
                foreach (PHPExcel_Cell::extractAllCellReferencesInRange($cells) as $cellReference) {
                    $isMergeCell[$cellReference] = true;
                }
            }
            for($currentRow = 1 ;$currentRow<=$allRow;$currentRow++){ 
                $row = array(); 
                for($currentColumn=0;$currentColumn<$allColumn;$currentColumn++){;                
                    $cell =$objWorksheet->getCellByColumnAndRow($currentColumn, $currentRow);
                    $afCol = PHPExcel_Cell::stringFromColumnIndex($currentColumn+1);
                    $bfCol = PHPExcel_Cell::stringFromColumnIndex($currentColumn-1);
                    $col = PHPExcel_Cell::stringFromColumnIndex($currentColumn);
                    $address = $col.$currentRow;
                    $value = $objWorksheet->getCell($address)->getValue();
                    if(substr($value,0,1)=='='){
                        return array("error"=>0,'message'=>'can not use the formula!');
                        exit;
                    }
                    if($cell->getDataType()==PHPExcel_Cell_DataType::TYPE_NUMERIC){
                        $cellstyleformat=$cell->getParent()->getStyle( $cell->getCoordinate() )->getNumberFormat();
                        $formatcode=$cellstyleformat->getFormatCode();
                        if (preg_match('/^([$[A-Z]*-[0-9A-F]*])*[hmsdy]/i', $formatcode)) {
                            $value=gmdate("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($value));
                        }else{
                            $value=PHPExcel_Style_NumberFormat::toFormattedString($value,$formatcode);
                        }                
                    }
                    if($isMergeCell[$col.$currentRow]&&$isMergeCell[$afCol.$currentRow]&&!empty($value)){
                        $temp = $value;
                    }elseif($isMergeCell[$col.$currentRow]&&$isMergeCell[$col.($currentRow-1)]&&empty($value)){
                        $value=$arr[$currentRow-1][$currentColumn];
                    }elseif($isMergeCell[$col.$currentRow]&&$isMergeCell[$bfCol.$currentRow]&&empty($value)){
                        $value=$temp;
                    }
                    $row[$currentColumn] = $value; 
                } 
                $arr[$currentRow] = $row; 
            } 
            $array[$i]["Content"] = $arr; 
            $i++;
        } 
        spl_autoload_register(array('Think','autoload'));//must, resolve ThinkPHP and PHPExcel conflicts
        unset($objWorksheet); 
        unset($PHPReader); 
        unset($PHPExcel); 
        unlink($file); 
        return array("error"=>1,"data"=>$array); 
    }