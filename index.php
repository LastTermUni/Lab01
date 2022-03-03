<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link href="./style.css" rel="stylesheet"  >
    <!-- <link rel="stylesheet" href="css\bootstrap.min.css">
    <script src="js\bootstrap.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body >
    <div id="wrapper">
        <h2>Xếp loại kết quả tuyển sinh</h2>
        <form action="#" method="post">

        <div class="row">
            <div class="lbtitle">
                <label>Điểm Toán</label>
            </div>
            <div class="libinput">
                <input type="number" name="toan" value="<?php echo isset($_POST["toan"]) ? $_POST["toan"] : "" ; ?> "/>
            </div>
        </div>

        <div class="row">
            <div class="lbtitle">
                <label>Điểm Lí</label>
            </div>
            <div class="libinput">
                <input type="number" name="ly" value="<?php echo isset($_POST["ly"]) ? $_POST["ly"] : "" ; ?> "/>
            </div>
        </div>

        <div class="row">
            <div class="lbtitle">
                <label>Điểm Hóa</label>
            </div>
            <div class="libinput">
                <input type="number" name="hoa" value="<?php echo isset($_POST["hoa"]) ? $_POST["hoa"] : "" ; ?> "/>
            </div>
        </div>
        <div class="row">
            <div class="lbltitle">
                <label>Chọn khu vực </label>
            </div>
            <div class="lblinput">
                <select name="KhuVuc">
                <option value-"" selected> --Chọn Khu vực--</option>
                <option value="1">Vũng Tàu</option>
                <option value="2">Tây Ninh</option>
                <option value="3">Hà Tĩnh</option>
                <option value="4">Hà Nội</option>
                <option value="5">Tp Hồ Chí Minh</option>
                </select>
            </div>
         </div>


        <div class="row">
            <div class="submit">
                <input type="submit" name="btnsubmit" value="Xếp loại" />
            </div>
        </div>
        </form>
        <div id="result">
            <h2>Kết quả xếp loại</h2>
            <div class="row">
                <div class="libtitle">
                    <label >Tổng điểm</label>
                </div>
                <div id="liboutput">
                    <?php
                        echo isset($_POST["btnsubmit"]) ? $_POST["toan"] + $_POST["ly"] + $_POST["hoa"] : "";
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="libtitle">
                    <label >Xếp loại</label>
                </div>
                <div id="liboutput">
                    <?php if(isset($_POST["btnsubmit"])) {
                            $tong= $_POST["toan"] + $_POST["ly"] + $_POST["hoa"];
                            if($tong>=24)
                                echo "Giỏi";
                            else if($tong>=21)
                                echo "Khá";
                            else if($tong>=15)
                                echo "Trung bình";
                            else {
                                echo "Yếu";
                            }
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="libtitle">
                    <label>Điểm ưu tiên</label>
                </div>
                <div class="liboutput">
                <?php
                    if(isset ($_POST ["btnsubmit"]))
                    {
                    $DiemUuTien = empty ($_POST ["KhuVuc"]) ? 0 : $_POST ["KhuVuc"];
                    switch ($DiemUuTien) {
                        case 0:
                        case 4:
                        case 5:
                        echo "0";
                        break;
                        case 1:
                        case 2:
                        echo "5";
                        break;
                        case 3:
                        echo "3";
                        break;
                        default:
                        # code...
                        break;
                    }
                    }
                    ?>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<footer>
</footer>