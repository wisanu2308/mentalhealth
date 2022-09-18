<?php 

  error_reporting(0);

  $result_list = [
    [
      "condition" => "น้อยกว่า 7 คะแนน",
      "name" => "ไม่มีอาการของโรคซึมเศร้าหรือมีอาการของโรคซึมเศร้าระดับน้อยมาก",
      "descripion" => "",
      "suggestion" => "ขณะนี้ยังไม่บบภาวะชัมเศร้าที่ชัดเจนแต่อย่าลืมดูแลและรักตัวเองให้มากๆ"
    ],
    [
      "condition" => "7 - 12 คะแนน",
      "name" => "มีอาการของโรคซึมเศร้า ระดับน้อย",
      "descripion" => "ภาวะซิมเศรัาระดับเล็กน้อย (Mild Depression) เป็นภาวะอารมณ์ที่ไม่สดชื่น แจ่มใส อารมณ์เศร้า เหงาหงอยชั่วคราวซึ่งบุคคลทั่วไปรู้สึกได้ในบางครั้ง การนอนลดลง อาจหลับยากหรือตื่นเช้ากว่าปกติ อาจมีสาเหตุหรือไม่ก็ได้ เริ่มคิดลบเปรียบเทียบตนกับผู้อื่น ความตั้งใจทำงานต่างๆ ลดลงต้องการความช่วยเหลือ แนะนำ การเอาใจใส่",
      "suggestion" => "คันหาและประเมินปัญหาด้านจิตสังคม ควรปรึกษาจิตแพทย์เพื่อวินิจฉัยและบำบัดการรักษา"
    ],
    [
      "condition" => "13 - 18 คะแนน",
      "name" => "มีอาการของโรคซึมเศร้า ระดับปานกลาง",
      "descripion" => "ภาวะซิมเศร้จะดับปานกลาง (Moderate Depression) มีอารมณ์ซึมเศร้าจนแรงขึ้น จนมีผลกระทบต่อชีวิตครอบครัวและการงาน แต่ยังสามารถดำเนินชีวิตประจำวันได้แต่อาจไม่สมบูรณ์ อาการเป็นมากช่วงเช้า รู้สึกไม่มีความสุข เบื่อหน่ายต่อสิ่งต่างๆ อ่อนเพลีย มีพละกำลังลดลง รู้สึกตนเองไร้ค่า ตำหนิตนเอง หงุดหงิด ร้องไห้ง่าย โกรธง่าย กังวลกับสุขภาพ หลีกหนีสังคม แยกตัว อาจคิดอยากตาย ไม่อยากอาหาร น้ำหนักลด",
      "suggestion" => "คันหาและประเมินปัญหาด้านจิตสังคม ควรปรึกษาจิตแพทย์เบื่อวินิจฉัยและบำบัดการรักษา"
    ],
    [
      "condition" => "ตั้งแต่ 19 คะแนนขึ้นไป",
      "name" => "มีอาการของโรคซึมเศร้า ระดับรุนแรง",
      "descripion" => "ภาวะซิมเศร้าระดับรุนแรง (Severe Depression) มีอารมณ์เศร้าตลอดเวลา สิ้นหวัง มองตนเองด้านลบ ไม่มีคุณค่า คิดอยากตายมากขึ้น แยกตัวมากขึ้น สิ้นหวัง มองไม่เห็นอนาคต การตัดสินใจเสียแม้เรื่องง่ายในชีวิตประจำวันไม่สนใจดูแลตนเอง อาจนั่งอยู่ท่าเดียวนานๆหรือ กระวนกระวายอยู่ไม่สุข นอนน้อยลง อ่อนเพลีย บางคนไม่อยู่ในโลกแห่งความเป็นจริง",
      "suggestion" => "ควรปรึกษาจิตแบทย์เบื่อวินิจฉัยและบำบัดรักษา หรือประเมินการฆ่าตัวตาย ด้วยแบบประเมินการฆ่าตัวตาย"
    ],
  ];
  
  $sum_score = 0;
  foreach($_POST["answer"] as $formIndex => $formScore){
    $sum_score += $formScore;
  }

  if($sum_score <= 6) {
    $result_name = $result_list[0]["name"];
    $result_descripion = $result_list[0]["descripion"];
    $result_suggestion = $result_list[0]["suggestion"];

  } else if($sum_score <= 12) {
    $result_name = $result_list[1]["name"];
    $result_descripion = $result_list[1]["descripion"];
    $result_suggestion = $result_list[1]["suggestion"];

  } else if($sum_score <= 18) {
    $result_name = $result_list[2]["name"];
    $result_descripion = $result_list[2]["descripion"];
    $result_suggestion = $result_list[2]["suggestion"];

  } else  {
    $result_name = $result_list[3]["name"];
    $result_descripion = $result_list[3]["descripion"];
    $result_suggestion = $result_list[3]["suggestion"];

  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>แบบประเมินโรคซึมเศร้า 9 คำถาม (9Q)</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mali&display=swap" rel="stylesheet">

</head>

<style>

  body {
    font-family: 'Mali', cursive;
  }

</style>

<body class="bg-slate-100">
  
  <div class="flex flex-row justify-center items-center bg-purple-400 text-white py-10 lg:py-24 shadow-xl">
    <div class="font-bold md:text-2xl">แบบประเมินโรคซึมเศร้า 9 คำถาม (9Q)</div>
  </div>

  <div class="container mx-auto px-4 lg:px-12 my-10">
    <div class="bg-orange-50 p-8 rounded-xl shadow-md">

      <div class="flex flex-row justify-center items-center pb-10 font-bold text-xl">
        <div>คะแนนรวม <?= $sum_score ?> คะแนน</div>
      </div>

      <div class="flex flex-row justify-center text-xs md:text-base">
        <table class="w-full lg:w-4/5 bg-white border border-2 border-slate-400">
          <tr class="hover:bg-slate-50">
            <td class="p-2 md:p-4 border border-2 border-slate-400 bg-slate-100 text-center">คะแนนรวม</td>
            <td class="p-2 md:p-4 border border-2 border-slate-400 bg-slate-100 text-center">การแปลผล</td>
          </tr>

          <?php foreach($result_list as $key => $value): ?>
            <tr class="hover:bg-slate-50">
              <td class="p-2 md:p-4 border border-2 border-slate-400 text-center"><?= $value["condition"] ?></td>
              <td class="p-2 md:p-4 border border-2 border-slate-400 text-left"><?= $value["name"] ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>

      <div class="w-full lg:w-4/5 mx-auto flex flex-col space-y-4 py-10">

        <div class="flex flex-row">
          <div class="font-bold text-xl">ผลลัพธ์</div>
        </div>

        <div class="flex flex-col md:flex-row">
          <div class="font-bold">ระดับภาวะซึมเศร้า:</div>
          <div class="indent-4"><?= $result_name ?></div>
        </div>

        <div class="flex flex-row">
          <div class="indent-4 md:indent-10 text-justify"><?= $result_descripion ?></div>
        </div>

        <div class="flex flex-col md:flex-row">
          <div class="font-bold">คำแนะนำ:</div>
          <div class="indent-4"><?= $result_suggestion ?></div>
        </div>
      </div>

      <div class="flex flex-row justify-center items-center py-4">
        <a href="index.php">
          <div class="bg-purple-400 text-white text-xl py-2 px-4 rounded-lg transition-all hover:bg-purple-500 ">
            กลับ
          </div>
        </a>
      </div>

    </div>
  </div>
  
</body>
</html>