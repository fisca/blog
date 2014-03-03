<?php
function pro_select($value, $data){
    if($value == $data){
        return ' selected';
    }
}

function pro_list_th($data){
    return '
    <select name="province_th">
      <option value=""' . pro_select("", $data) . '>--------- เลือกจังหวัด ---------</option>
      <option value="กรุงเทพมหานคร"' . pro_select('กรุงเทพมหานคร', $data) . '>กรุงเทพมหานคร</option>
      <option value="กระบี่"' . pro_select('กรุงเทพมหานคร', $data) . '>กระบี่ </option>
      <option value="กาญจนบุรี"' . pro_select('กรุงเทพมหานคร', $data) . '>กาญจนบุรี </option>
      <option value="กาฬสินธุ์"' . pro_select('กรุงเทพมหานคร', $data) . '>กาฬสินธุ์ </option>
      <option value="กำแพงเพชร"' . pro_select('กรุงเทพมหานคร', $data) . '>กำแพงเพชร </option>
      <option value="ขอนแก่น"' . pro_select('กรุงเทพมหานคร', $data) . '>ขอนแก่น</option>
      <option value="จันทบุรี"' . pro_select('กรุงเทพมหานคร', $data) . '>จันทบุรี</option>
      <option value="ฉะเชิงเทรา"' . pro_select('กรุงเทพมหานคร', $data) . '>ฉะเชิงเทรา </option>
      <option value="ชัยนาท"' . pro_select('กรุงเทพมหานคร', $data) . '>ชัยนาท </option>
      <option value="ชัยภูมิ"' . pro_select('กรุงเทพมหานคร', $data) . '>ชัยภูมิ </option>
      <option value="ชุมพร"' . pro_select('กรุงเทพมหานคร', $data) . '>ชุมพร </option>
      <option value="ชลบุรี"' . pro_select('กรุงเทพมหานคร', $data) . '>ชลบุรี </option>
      <option value="เชียงใหม่"' . pro_select('เชียงใหม่', $data) . '>เชียงใหม่ </option>
      <option value="เชียงราย"' . pro_select('กรุงเทพมหานคร', $data) . '>เชียงราย </option>
      <option value="ตรัง"' . pro_select('กรุงเทพมหานคร', $data) . '>ตรัง </option>
      <option value="ตราด"' . pro_select('กรุงเทพมหานคร', $data) . '>ตราด </option>
      <option value="ตาก"' . pro_select('กรุงเทพมหานคร', $data) . '>ตาก </option>
      <option value="นครนายก"' . pro_select('กรุงเทพมหานคร', $data) . '>นครนายก </option>
      <option value="นครปฐม"' . pro_select('กรุงเทพมหานคร', $data) . '>นครปฐม </option>
      <option value="นครพนม"' . pro_select('กรุงเทพมหานคร', $data) . '>นครพนม </option>
      <option value="นครราชสีมา"' . pro_select('กรุงเทพมหานคร', $data) . '>นครราชสีมา </option>
      <option value="นครศรีธรรมราช"' . pro_select('กรุงเทพมหานคร', $data) . '>นครศรีธรรมราช </option>
      <option value="นครสวรรค์"' . pro_select('กรุงเทพมหานคร', $data) . '>นครสวรรค์ </option>
      <option value="นราธิวาส"' . pro_select('กรุงเทพมหานคร', $data) . '>นราธิวาส </option>
      <option value="น่าน"' . pro_select('กรุงเทพมหานคร', $data) . '>น่าน </option>
      <option value="นนทบุรี"' . pro_select('กรุงเทพมหานคร', $data) . '>นนทบุรี </option>
      <option value="บึงกาฬ"' . pro_select('กรุงเทพมหานคร', $data) . '>บึงกาฬ</option>
      <option value="บุรีรัมย์"' . pro_select('กรุงเทพมหานคร', $data) . '>บุรีรัมย์</option>
      <option value="ประจวบคีรีขันธ์"' . pro_select('กรุงเทพมหานคร', $data) . '>ประจวบคีรีขันธ์ </option>
      <option value="ปทุมธานี"' . pro_select('กรุงเทพมหานคร', $data) . '>ปทุมธานี </option>
      <option value="ปราจีนบุรี"' . pro_select('กรุงเทพมหานคร', $data) . '>ปราจีนบุรี </option>
      <option value="ปัตตานี"' . pro_select('กรุงเทพมหานคร', $data) . '>ปัตตานี </option>
      <option value="พะเยา"' . pro_select('กรุงเทพมหานคร', $data) . '>พะเยา </option>
      <option value="พระนครศรีอยุธยา"' . pro_select('กรุงเทพมหานคร', $data) . '>พระนครศรีอยุธยา </option>
      <option value="พังงา"' . pro_select('กรุงเทพมหานคร', $data) . '>พังงา </option>
      <option value="พิจิตร"' . pro_select('กรุงเทพมหานคร', $data) . '>พิจิตร </option>
      <option value="พิษณุโลก"' . pro_select('กรุงเทพมหานคร', $data) . '>พิษณุโลก </option>
      <option value="เพชรบุรี"' . pro_select('กรุงเทพมหานคร', $data) . '>เพชรบุรี </option>
      <option value="เพชรบูรณ์"' . pro_select('กรุงเทพมหานคร', $data) . '>เพชรบูรณ์ </option>
      <option value="แพร่"' . pro_select('กรุงเทพมหานคร', $data) . '>แพร่ </option>
      <option value="พัทลุง"' . pro_select('กรุงเทพมหานคร', $data) . '>พัทลุง </option>
      <option value="ภูเก็ต"' . pro_select('กรุงเทพมหานคร', $data) . '>ภูเก็ต </option>
      <option value="มหาสารคาม"' . pro_select('กรุงเทพมหานคร', $data) . '>มหาสารคาม </option>
      <option value="มุกดาหาร"' . pro_select('กรุงเทพมหานคร', $data) . '>มุกดาหาร </option>
      <option value="แม่ฮ่องสอน"' . pro_select('กรุงเทพมหานคร', $data) . '>แม่ฮ่องสอน </option>
      <option value="ยโสธร"' . pro_select('กรุงเทพมหานคร', $data) . '>ยโสธร </option>
      <option value="ยะลา"' . pro_select('กรุงเทพมหานคร', $data) . '>ยะลา </option>
      <option value="ร้อยเอ็ด"' . pro_select('กรุงเทพมหานคร', $data) . '>ร้อยเอ็ด </option>
      <option value="ระนอง"' . pro_select('กรุงเทพมหานคร', $data) . '>ระนอง </option>
      <option value="ระยอง"' . pro_select('กรุงเทพมหานคร', $data) . '>ระยอง </option>
      <option value="ราชบุรี"' . pro_select('กรุงเทพมหานคร', $data) . '>ราชบุรี</option>
      <option value="ลพบุรี"' . pro_select('กรุงเทพมหานคร', $data) . '>ลพบุรี </option>
      <option value="ลำปาง"' . pro_select('กรุงเทพมหานคร', $data) . '>ลำปาง </option>
      <option value="ลำพูน"' . pro_select('ลำพูน', $data) . '>ลำพูน </option>
      <option value="เลย"' . pro_select('กรุงเทพมหานคร', $data) . '>เลย </option>
      <option value="ศรีสะเกษ"' . pro_select('กรุงเทพมหานคร', $data) . '>ศรีสะเกษ</option>
      <option value="สกลนคร"' . pro_select('กรุงเทพมหานคร', $data) . '>สกลนคร</option>
      <option value="สงขลา"' . pro_select('กรุงเทพมหานคร', $data) . '>สงขลา </option>
      <option value="สมุทรสาคร"' . pro_select('กรุงเทพมหานคร', $data) . '>สมุทรสาคร </option>
      <option value="สมุทรปราการ"' . pro_select('กรุงเทพมหานคร', $data) . '>สมุทรปราการ </option>
      <option value="สมุทรสงคราม"' . pro_select('กรุงเทพมหานคร', $data) . '>สมุทรสงคราม </option>
      <option value="สระแก้ว"' . pro_select('กรุงเทพมหานคร', $data) . '>สระแก้ว </option>
      <option value="สระบุรี"' . pro_select('กรุงเทพมหานคร', $data) . '>สระบุรี </option>
      <option value="สิงห์บุรี"' . pro_select('กรุงเทพมหานคร', $data) . '>สิงห์บุรี </option>
      <option value="สุโขทัย"' . pro_select('กรุงเทพมหานคร', $data) . '>สุโขทัย </option>
      <option value="สุพรรณบุรี"' . pro_select('กรุงเทพมหานคร', $data) . '>สุพรรณบุรี </option>
      <option value="สุราษฎร์ธานี"' . pro_select('กรุงเทพมหานคร', $data) . '>สุราษฎร์ธานี </option>
      <option value="สุรินทร์"' . pro_select('กรุงเทพมหานคร', $data) . '>สุรินทร์ </option>
      <option value="สตูล"' . pro_select('กรุงเทพมหานคร', $data) . '>สตูล </option>
      <option value="หนองคาย"' . pro_select('กรุงเทพมหานคร', $data) . '>หนองคาย </option>
      <option value="หนองบัวลำภู"' . pro_select('กรุงเทพมหานคร', $data) . '>หนองบัวลำภู </option>
      <option value="อำนาจเจริญ"' . pro_select('กรุงเทพมหานคร', $data) . '>อำนาจเจริญ </option>
      <option value="อุดรธานี"' . pro_select('กรุงเทพมหานคร', $data) . '>อุดรธานี </option>
      <option value="อุตรดิตถ์"' . pro_select('อุตรดิตถ์', $data) . '>อุตรดิตถ์ </option>
      <option value="อุทัยธานี"' . pro_select('อุทัยธานี', $data) . '>อุทัยธานี </option>
      <option value="อุบลราชธานี"' . pro_select('อุบลราชธานี', $data) . '>อุบลราชธานี</option>
      <option value="อ่างทอง"' . pro_select('อ่างทอง', $data) . '>อ่างทอง </option>
      <option value="อื่นๆ"' . pro_select('อื่นๆ', $data) . '>อื่นๆ</option>
</select>
    ';
    
}
?>
<?php /*
<select name="province">
      <option value="" selected>--------- เลือกจังหวัด ---------</option>
      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
      <option value="กระบี่">กระบี่ </option>
      <option value="กาญจนบุรี">กาญจนบุรี </option>
      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
      <option value="กำแพงเพชร">กำแพงเพชร </option>
      <option value="ขอนแก่น">ขอนแก่น</option>
      <option value="จันทบุรี">จันทบุรี</option>
      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
      <option value="ชัยนาท">ชัยนาท </option>
      <option value="ชัยภูมิ">ชัยภูมิ </option>
      <option value="ชุมพร">ชุมพร </option>
      <option value="ชลบุรี">ชลบุรี </option>
      <option value="เชียงใหม่">เชียงใหม่ </option>
      <option value="เชียงราย">เชียงราย </option>
      <option value="ตรัง">ตรัง </option>
      <option value="ตราด">ตราด </option>
      <option value="ตาก">ตาก </option>
      <option value="นครนายก">นครนายก </option>
      <option value="นครปฐม">นครปฐม </option>
      <option value="นครพนม">นครพนม </option>
      <option value="นครราชสีมา">นครราชสีมา </option>
      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
      <option value="นครสวรรค์">นครสวรรค์ </option>
      <option value="นราธิวาส">นราธิวาส </option>
      <option value="น่าน">น่าน </option>
      <option value="นนทบุรี">นนทบุรี </option>
      <option value="บึงกาฬ">บึงกาฬ</option>
      <option value="บุรีรัมย์">บุรีรัมย์</option>
      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
      <option value="ปทุมธานี">ปทุมธานี </option>
      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
      <option value="ปัตตานี">ปัตตานี </option>
      <option value="พะเยา">พะเยา </option>
      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
      <option value="พังงา">พังงา </option>
      <option value="พิจิตร">พิจิตร </option>
      <option value="พิษณุโลก">พิษณุโลก </option>
      <option value="เพชรบุรี">เพชรบุรี </option>
      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
      <option value="แพร่">แพร่ </option>
      <option value="พัทลุง">พัทลุง </option>
      <option value="ภูเก็ต">ภูเก็ต </option>
      <option value="มหาสารคาม">มหาสารคาม </option>
      <option value="มุกดาหาร">มุกดาหาร </option>
      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
      <option value="ยโสธร">ยโสธร </option>
      <option value="ยะลา">ยะลา </option>
      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
      <option value="ระนอง">ระนอง </option>
      <option value="ระยอง">ระยอง </option>
      <option value="ราชบุรี">ราชบุรี</option>
      <option value="ลพบุรี">ลพบุรี </option>
      <option value="ลำปาง">ลำปาง </option>
      <option value="ลำพูน">ลำพูน </option>
      <option value="เลย">เลย </option>
      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
      <option value="สกลนคร">สกลนคร</option>
      <option value="สงขลา">สงขลา </option>
      <option value="สมุทรสาคร">สมุทรสาคร </option>
      <option value="สมุทรปราการ">สมุทรปราการ </option>
      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
      <option value="สระแก้ว">สระแก้ว </option>
      <option value="สระบุรี">สระบุรี </option>
      <option value="สิงห์บุรี">สิงห์บุรี </option>
      <option value="สุโขทัย">สุโขทัย </option>
      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
      <option value="สุรินทร์">สุรินทร์ </option>
      <option value="สตูล">สตูล </option>
      <option value="หนองคาย">หนองคาย </option>
      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
      <option value="อุดรธานี">อุดรธานี </option>
      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
      <option value="อุทัยธานี">อุทัยธานี </option>
      <option value="อุบลราชธานี">อุบลราชธานี</option>
      <option value="อ่างทอง">อ่างทอง </option>
      <option value="อื่นๆ">อื่นๆ</option>
</select>
*/
?>