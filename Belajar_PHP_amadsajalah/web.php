
   


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS WEB JADWAL ANDY</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
   
</head> 
<body class="">

<style>
 bakcground-image: url("")
</style>

<h1 class="text-6xl font-Bold text-center mb-6"><strong>~~HAI SEMUANYA~~</strong></h1>

<img src="andy2.png" alt="Gambar" style="float: right; margin-left: 20px;" width="200px">


    <h4>Nama kelompok :  <li>Dhafa Achmad Favian / 10</li>
     <li>Fazle Dzaky Aryaguna / 15</li>
</h4>
<br>

<strong>jika kalian mau tanya jam nya, tanya aja </strong> <br>
<?php
    
    $time = date("16:40");
    $isTugas = false;
    $isApalan = true;
    

    if ($time == "15:30") {
        $kegiatan = "Pulang sekolah";
    }elseif ($time >= "15:31" && $time <= "15:44") {
        $kegiatan = "Perjalanan";
    }elseif ($time =="15:45") {
        $kegiatan = "Tiba di rumah";
    } elseif ($time >= "15:46" && $time < "16:00") {
        $kegiatan = "Mandi";
    } elseif ($time >= "16:00" && $time <"16:30") {
        $kegiatan = "Mengaji";
    } elseif ($time >= "16:30" && $time <"18:30") {
        if($isTugas){
            $kegiatan = "Mengerjakan tugas sekolah";
        } else {
            $kegiatan = "istirahat";
        };
    } elseif ($time >= "18:30" && $time < "18:45") {
        $kegiatan = "Sholat Maghrib";
    } elseif ($time >= "18:45" && $time <"19:15") {
        if($isTugas){
            $kegiatan = "Mengerjakan tugas sekolah";
        } else {
            $kegiatan = "istirahat";
        };
    } elseif ($time >= "19:15" && $time < "19:30") {
        $kegiatan = "Membeli Bumbu Masakan";    
    } elseif ($time >= "19:30" && $time < "20:00") {
        $kegiatan = "Makan malam";
    } elseif ($time >= "20:00" && $time < "20:15") {
        $kegiatan = "Sholat Isya";
    } elseif ($time >= "20:15" && $time < "20:45") {
        $kegiatan = "Chatting dengan Raya mengenai persiapan festival";
    } elseif ($time >= "20:45" && $time < "21:15") {
        $kegiatan = "Mengobrol bersama keluarga";
    } elseif ($time >= "21:15" && $time <= "23:59") {
        $kegiatan = "Tidur";
    } elseif ($time >= "00:00" && $time < "04:00") {
        $kegiatan = "Tidur";
    } elseif ($time >= "04:00" && $time < "04:30") {
        $kegiatan = "Bangun";
    }   elseif ($time >= "04:30" && $time < "04:45") {
        $kegiatan = "Shalat Shubuh";
    } elseif ($time >= "04:45" && $time < "06:30") {
        $kegiatan = "Persiapan Berangkat Sekolah";
    }elseif ($time >= "06:30" && $time < "06:45") {
        $kegiatan = "Perjalanan Kesekolah";
    } elseif ($time >= "06:45" && $time < "07:00") {
        $kegiatan = "Tiba Di Sekolah";
    } elseif ($time >= "07:00" && $time <= "15:29") {
        $kegiatan = "Pembelajaran Di Sekoah";
    }else {
        $kegiatan = "Menghilang.";
    }


    echo"sekarang pukul: $time <br> Jadi kegiatan Andi : $kegiatan"
    ?>


<br>
<br>
    <div class="container mx-auto p-4">
        <h1 class="text-xl font-Bold text-center mb-6"><u><strong>JADWAL ANDY</strong></h1></u>
        <div>
            <table class="min-w-lg margin-auto">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-2 border-gray-300 text-center leading-tight">Waktu</th>
                        <th class="py-2 px-4 border-2 border-gray-300 text-center leading-tight">Aktivitas</th>
                    </tr>
                </thead>
                <tbody>
                    
                     <tr>
                        <td class="py-2 px-4 border border-gray-300" >04:00</td>
                        <td class="px-4 border border-gray-300">Bangun</td>
                    </tr>

                    <tr>
                        <td class="py-2 px-4 border border-gray-300">04:00 - 04:30</td>
                        <td class="px-4 border border-gray-300">Ngumpulin nyawa</td>
                    </tr>

                    <tr>
                        <td class="py-2 px-4 border border-gray-300">04:30 - 04:45 </td>
                        <td class="px-4 border border-gray-300">Solat Shubuh</td>
                    </tr>

                    <tr>
                        <td class="py-2 px-4 border border-gray-300">04:45 - 06:30</td>
                        <td class="px-4 border border-gray-300">Persiapan Berangkat sekolah</td>
                    </tr>

                    <tr>
                        <td class="py-2 px-4 border border-gray-300">06:30</td>
                        <td class="px-4 border border-gray-300">Berangkat sekolah</td>
                    </tr>

                    <tr>
                        <td class="py-2 px-4 border border-gray-300">06:30 - 06:45</td>
                        <td class="px-4 border border-gray-300">Perjalanan</td>
                    </tr>

                    <tr>
                        <td class="py-2 px-4 border border-gray-300">06:45 - 07:00</td>
                        <td class="px-4 border border-gray-300">Tiba di sekolah</td>
                    </tr>

                    <tr>
                        <td class="py-2 px-4 border border-gray-300">07:00 - 15:29</td>
                        <td class="px-4 border border-gray-300">Pulang sekolah</td>
                    </tr>

                    <tr>
                        <td class="py-2 px-4 border border-gray-300">15:30</td>
                        <td class="px-4 border border-gray-300">Pulang sekolah</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border border-gray-300">15:45</td>
                        <td class="px-4 border border-gray-300">Tiba di rumah</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border border-gray-300">15:45 - 16:00</td>
                        <td class="px-4 border border-gray-300">Mandi</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border border-gray-300">16:00 - 16:30</td>
                        <td class="px-4 border border-gray-300">Mengaji</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border border-gray-300">16:30 - 18:30</td>
                        <td class="px-4 border border-gray-300">Mengerjakan tugas sekolah</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border border-gray-300">18:30 - 18:45</td>
                        <td class="px-4 border border-gray-300">Solat Maghrib</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border border-gray-300">18:45 - 19:15</td>
                        <td class="px-4 border border-gray-300">Menghafalkan dialog</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border border-gray-300">19:15 - 19:30</td>
                        <td class="px-4 border border-gray-300">Beli bumbu </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border border-gray-300">19:30 - 20:00</td>
                        <td class="px-4 border border-gray-300">Makan malam</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border border-gray-300">20:00 - 20:15</td>
                        <td class="px-4 border border-gray-300">Sholat Isya</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border border-gray-300">20:15 - 20:45</td>
                        <td class="px-4 border border-gray-300">Chatting dengan Raya mengenai persiapan festival</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border border-gray-300">20:45 - 21:15</td>
                        <td class="px-4 border border-gray-300">Mengobrol bersama keluarga</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border border-gray-300">21:15</td>
                        <td class="px-4 border border-gray-300">Tidur</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</body>
</html>