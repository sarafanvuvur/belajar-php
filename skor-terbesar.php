<?php
function skor_terbesar($arr){
//kode di sini
  $result = [];
  $nilai = 0;
  $nilai1 = 0;
  $nilai2 = 0;

  foreach ($arr as $key => $value) {
    if($value[$nilai] > $nilai && $value["kelas"] == "Laravel"){
      $nilai = $value["nilai"];
      $result[$value["kelas"]] =
      [
        "nama" => $value["nama"],
        "kelas" => $value["kelas"]
        "nilai" => $value["nilai"]
      ];
    }else if ($value["nilai"] > $nilai && $value["kelas"] == "React JS") {
      $nilai1 = $value["nilai"];
      $result[$value["kelas"]] =
      [
        "nama" => $value["nama"],
        "kelas" => $value["kelas"]
        "nilai" => $value["nilai"]
      ];
    }else if ($value["nilai"] > $nilai && $value["kelas"] == "React Native") {
      $nilai1 = $value["nilai"];
      $result[$value["kelas"]] =
      [
        "nama" => $value["nama"],
        "kelas" => $value["kelas"]
        "nilai" => $value["nilai"]
      ];

    }
}
  return $result

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>