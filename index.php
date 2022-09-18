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

  .input-radio {
    width: 1.75rem;
    height: 1.75rem;
  }
</style>

<body class="bg-slate-100">
  
  <div class="flex flex-row justify-center items-center bg-purple-400 text-white py-10 lg:py-24 shadow-xl">
    <div class="font-bold md:text-2xl">แบบประเมินโรคซึมเศร้า 9 คำถาม (9Q)</div>
  </div>

  <form action="result.php" method="post">

    <div class="container mx-auto px-4 lg:px-12 my-10">
      
      <div class="bg-white p-8 rounded-xl shadow-md">

        <div class="flex flex-row justify-center pb-10">
          <div class="font-bold">แบบประเมินโรคซึมเศร้า 9 คำถาม (9Q)</div>
        </div>
        mentalhealth
        <div class="flex flex-col space-y-6">
          
          <div class="flex flex-row">
            <div>ในช่วง 2 สัปดาห์ที่ผ่านมา รวมทั้งวันนี้ ท่านมีอาการเหล่านี้บ่อยแค่ไหน</div>
          </div>

          <div class="w-full flex flex-col lg:flex-row justify-between space-y-2">
            <div class="basis-full lg:basis-2/5 xl:basis-3/5">1. เบื่อ ไม่สนใจอยากทำอะไร</div>
            <div class="flex flex-col md:flex-row space-x-0 space-y-2 md:space-y-0 md:space-x-10 lg:space-x-2">
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[1]" value="0" required>
                <div>ไม่มีเลย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[1]" value="1" required>
                <div>เป็นบางวัน</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[1]" value="2" required>
                <div>เป็นบ่อย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[1]" value="3" required>
                <div>เป็นทุกวัน</div>
              </div>
            </div>
          </div>

          <div class="w-full flex flex-col lg:flex-row justify-between space-y-2">
            <div class="basis-full lg:basis-2/5 xl:basis-3/5">2. ไม่สบายใจ ซึมเศร้า ท้อแท้</div>
            <div class="flex flex-col md:flex-row space-x-0 space-y-2 md:space-y-0 md:space-x-10 lg:space-x-2">
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[2]" value="0" required>
                <div>ไม่มีเลย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[2]" value="1" required>
                <div>เป็นบางวัน</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[2]" value="2" required>
                <div>เป็นบ่อย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[2]" value="3" required>
                <div>เป็นทุกวัน</div>
              </div>
            </div>
          </div>

          <div class="w-full flex flex-col lg:flex-row justify-between space-y-2">
            <div class="basis-full lg:basis-2/5 xl:basis-3/5">3. หลับยาก หรือหลับๆ ตื่นๆ หรือหลับมากไป</div>
            <div class="flex flex-col md:flex-row space-x-0 space-y-2 md:space-y-0 md:space-x-10 lg:space-x-2">
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[3]" value="0" required>
                <div>ไม่มีเลย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[3]" value="1" required>
                <div>เป็นบางวัน</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[3]" value="2" required>
                <div>เป็นบ่อย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[3]" value="3" required>
                <div>เป็นทุกวัน</div>
              </div>
            </div>
          </div>

          <div class="w-full flex flex-col lg:flex-row justify-between space-y-2">
            <div class="basis-full lg:basis-2/5 xl:basis-3/5">4. เหนื่อยง่าย หรือ ไม่ค่อยมีแรง</div>
            <div class="flex flex-col md:flex-row space-x-0 space-y-2 md:space-y-0 md:space-x-10 lg:space-x-2">
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[4]" value="0" required>
                <div>ไม่มีเลย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[4]" value="1" required>
                <div>เป็นบางวัน</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[4]" value="2" required>
                <div>เป็นบ่อย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[4]" value="3" required>
                <div>เป็นทุกวัน</div>
              </div>
            </div>
          </div>

          <div class="w-full flex flex-col lg:flex-row justify-between space-y-2">
            <div class="basis-full lg:basis-2/5 xl:basis-3/5">5. เบื่ออาหาร หรือกินมากเกินไป</div>
            <div class="flex flex-col md:flex-row space-x-0 space-y-2 md:space-y-0 md:space-x-10 lg:space-x-2">
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[5]" value="0" required>
                <div>ไม่มีเลย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[5]" value="1" required>
                <div>เป็นบางวัน</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[5]" value="2" required>
                <div>เป็นบ่อย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[5]" value="3" required>
                <div>เป็นทุกวัน</div>
              </div>
            </div>
          </div>

          <div class="w-full flex flex-col lg:flex-row justify-between space-y-2">
            <div class="basis-full lg:basis-2/5 xl:basis-3/5">6. รู้สึกไม่ดีกับตัวเอง คิดว่าตัวเองล้มเหลว หรือทำให้ตนเองหรือครอบครัวผิดหวัง</div>
            <div class="flex flex-col md:flex-row space-x-0 space-y-2 md:space-y-0 md:space-x-10 lg:space-x-2">
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[6]" value="0" required>
                <div>ไม่มีเลย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[6]" value="1" required>
                <div>เป็นบางวัน</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[6]" value="2" required>
                <div>เป็นบ่อย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[6]" value="3" required>
                <div>เป็นทุกวัน</div>
              </div>
            </div>
          </div>

          <div class="w-full flex flex-col lg:flex-row justify-between space-y-2">
            <div class="basis-full lg:basis-2/5 xl:basis-3/5">7. สมาธิไม่ดีเวลาทำอะไร เช่น ดูโทรทัศน์ ฟังวิทยุ หรือทำงานที่ต้องใช้ความตั้งใจ</div>
            <div class="flex flex-col md:flex-row space-x-0 space-y-2 md:space-y-0 md:space-x-10 lg:space-x-2">
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[7]" value="0" required>
                <div>ไม่มีเลย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[7]" value="1" required>
                <div>เป็นบางวัน</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[7]" value="2" required>
                <div>เป็นบ่อย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[7]" value="3" required>
                <div>เป็นทุกวัน</div>
              </div>
            </div>
          </div>

          <div class="w-full flex flex-col lg:flex-row justify-between space-y-2">
            <div class="basis-full lg:basis-2/5 xl:basis-3/5">8. พูดช้า ทำอะไรช้าลง จนคนอื่นสังเกตเห็นได้ หรือกระสับกระส่ายไม่สามารถอยู่นิ่งได้เหมือนที่เคยเป็น</div>
            <div class="flex flex-col md:flex-row space-x-0 space-y-2 md:space-y-0 md:space-x-10 lg:space-x-2">
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[8]" value="0" required>
                <div>ไม่มีเลย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[8]" value="1" required>
                <div>เป็นบางวัน</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[8]" value="2" required>
                <div>เป็นบ่อย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[8]" value="3" required>
                <div>เป็นทุกวัน</div>
              </div>
            </div>
          </div>

          <div class="w-full flex flex-col lg:flex-row justify-between space-y-2">
            <div class="basis-full lg:basis-2/5 xl:basis-3/5">9. คิดทำร้ายตนเอง หรือคิดว่าถ้าตายไปคงจะดี</div>
            <div class="flex flex-col md:flex-row space-x-0 space-y-2 md:space-y-0 md:space-x-10 lg:space-x-2">
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[9]" value="0" required>
                <div>ไม่มีเลย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[9]" value="1" required>
                <div>เป็นบางวัน</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[9]" value="2" required>
                <div>เป็นบ่อย</div>
              </div>
              <div class="flex flex-row items-center space-x-2">
                <input type="radio" class="input-radio" name="answer[9]" value="3" required>
                <div>เป็นทุกวัน</div>
              </div>
            </div>
          </div>

          <div class="flex flex-row justify-center items-center py-4">
            <button type="submit" class="bg-purple-400 text-white text-xl py-2 px-4 rounded-lg transition-all hover:bg-purple-500 ">
              ส่งแบบประเมิน
            </button>
          </div>

        </div>

      </div>
    </div>

  </form>
  
</body>
</html>